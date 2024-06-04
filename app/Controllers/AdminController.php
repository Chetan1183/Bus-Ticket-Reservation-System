<?php

namespace App\Controllers;

use App\Models\Room;
use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Validation\AdminRules;
use App\Models\Booking;
use App\Models\Bus;



class AdminController extends BaseController
{
    public function bookings()
    {  
        $booking=new Booking();
        $data['booking' ]=$booking->findAll();
     
        return view('Layouts/admin/bookings',$data);
    }
    public function about()
    {  
     
     
        return view('about');
    }
    public function contact()
    {  
     
     
        return view('Layouts/admin/contact');
    }
    public function index()
    {
        $bus = new Bus();

        ## Fetch all records
        $data['bus'] = $bus->findAll();
        return view('Layouts/bus/index', $data);
    }
    public function create()
    {
        return view('Layouts/bus/create');
    }

    public function store()
    {
        $request = service('request');
        $postData = $request->getPost();

        if (isset($postData['submit'])) {

            ## Validation
            $input = $this->validate([
                'bus_name' => 'required',
                'bus_number' =>'required|is_unique[bus.bus_number]',
                'bus_capacity' => 'required',
                'bus_status' => 'required',
                'origin' => 'required',
                'destination' => 'required',
                'departure' => 'required',
                'price' => 'required',

            ]);

            if (!$input) {
                return redirect()->to('buscreate')->withInput()->with('validation', $this->validator);
            } else {

                $bus = new Bus();

                $data = [
                    'bus_name' => $postData['bus_name'],
                    'bus_number' => $postData['bus_number'],
                    'bus_capacity' => $postData['bus_capacity'],
                    'bus_status' => $postData['bus_status'],
                    'origin' => $postData['origin'],
                    'destination' => $postData['destination'],
                    'departure' => $postData['departure'],
                    'price' => $postData['price']
                ];

                ## Insert Record
                if ($bus->insert($data)) {
                    session()->setFlashdata('message', 'bus Added Successfully!');
                    session()->setFlashdata('alert-class', 'alert-success');

                    return redirect()->to('buscreate');
                } else {
                    session()->setFlashdata('message', 'bus Data not saved!');
                    session()->setFlashdata('alert-class', 'alert-danger');

                    return redirect()->to('buscreate')->withInput();
                }
            }
        }
    }
    public function edit($bus_id = 0)
    {

        ## Select record by id
        $bus = new Bus();
        $bus= $bus->find($bus_id);

        $data['bus'] = $bus;
        return view('Layouts/bus/edit', $data);
    }

    public function update($bus_id = 0)
    {
        $request = service('request');
        $postData = $request->getPost();

        if (isset($postData['submit'])) {

            ## Validation
            $input = $this->validate([
                
               
                'bus_name' => 'required',
                'bus_number' => 'required|is_unique[bus.bus_number]',
                'bus_capacity' => 'required',
                'bus_status' => 'required',
                'origin' => 'required',
                'destination' => 'required',
                'departure' => 'required',
                'price' => 'required',
            ]);

            if (!$input) {
                return redirect()->to('busedit/' . $bus_id)->withInput()->with('validation', $this->validator);
            } else {

                $bus = new Bus();

                $data = [
                    'bus_name' => $postData['bus_name'],
                    'bus_number' => $postData['bus_number'],
                    'bus_capacity' => $postData['bus_capacity'],
                    'bus_status' => $postData['bus_status'],
                    'origin' => $postData['origin'],
                    'destination' => $postData['destination'],
                    'departure' => $postData['departure'],
                    'price' => $postData['price']
                   
                ];

                ## Update record
                if ($bus->update($bus_id, $data)) {
                    session()->setFlashdata('message', 'bus Updated Successfully!');
                    session()->setFlashdata('alert-class', 'alert-success');

                    return redirect()->to('/index');
                } else {
                    session()->setFlashdata('message', 'bus Data not saved!');
                    session()->setFlashdata('alert-class', 'alert-danger');

                    return redirect()->to('busedit/' . $bus_id)->withInput();
                }
            }
        }
    }

    public function delete($bus_id = 0)
    {

        $bus = new Bus();

        ## Check record
        if ($bus->find($bus_id)) {

            ## Delete record
            $bus->delete($bus_id);

            session()->setFlashdata('message', 'bus Deleted Successfully!');
            session()->setFlashdata('alert-class', 'alert-success');
        } else {
            session()->setFlashdata('message', 'Bus Record not found!');
            session()->setFlashdata('alert-class', 'alert-danger');
        }

        return redirect()->to('/index');
    }
    public function dashboard()
    {
        return view('Layouts/admin/admin_dashboard');
    }
    public function adminlogin()
    {
        $val = [
            'var' => 'AdminLogin'
        ];


        $data = [];
        if ($this->request->getMethod() == 'post') {
            // 'admin_name' => 'required|min_length[3]',
            //     'admin_loginid' => 'required|min_length[6]|max_length[6]',
            //     'admin_password' => 'required|min_length[8]|max_length[13]',
            //     'confirm_password' => 'matches[admin_password]',
            $rules = [
                'admin_loginid' => 'required|min_length[6]|max_length[6]',
                'admin_password' => 'required|min_length[8]|max_length[13]|validateAdmin[admin_loginid,admin_password]',
            ];
            $errors = [
                'admin_password' => [
                    'validateAdmin' => 'loginid or password don\'t match'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new AdminModel();
                $user = $model->where('admin_loginid', $this->request->getVar('admin_loginid'))
                    ->first();
                $this->setAdminMethod($user);
                return redirect()->to('admin_dashboard');
            }
        }

        return view('Layouts/admin/adminlogin', $data, $val);
    }




    public function register()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'admin_name' => 'required|min_length[3]',
                'admin_loginid' => 'required|min_length[6]|max_length[6]',
                'admin_password' => 'required|min_length[8]|max_length[13]',
                'confirm_password' => 'matches[admin_password]',


            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new AdminModel();
                $newData = [
                    'admin_name' => $this->request->getVar('admin_name'),
                    'admin_loginid' => $this->request->getVar('admin_loginid'),
                    'admin_password' => $this->request->getVar('admin_password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'sucessful registration');
                return redirect()->to('adminlogin');
            }
        }
        // 
        //  $model->save($_POST);


        return view('Layouts/admin/admin_register', $data);
    }

    private function setAdminMethod($user)
    {
        $data = [
            'admin_id' => $user['admin_id'],
            'admin_name' => $user['admin_name'],
            'admin_loginid' => $user['admin_loginid'],
            'isAdminLoggedIn' => true,

        ];
        session()->set($data);
    }
}
