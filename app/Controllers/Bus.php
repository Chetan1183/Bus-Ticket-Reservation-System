<?php

namespace App\Controllers;

use App\Models\Room;
use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Validation\AdminRules;
use App\Models\Booking;


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
        $room = new Room();

        ## Fetch all records
        $data['room'] = $room->findAll();
        return view('Layouts/room/index', $data);
    }
    public function create()
    {
        return view('Layouts/room/create');
    }

    public function store()
    {
        $request = service('request');
        $postData = $request->getPost();

        if (isset($postData['submit'])) {

            ## Validation
            $input = $this->validate([
                'room_type' => 'required',
                'roomnumber' => 'required|is_unique[room.roomnumber]',
                'status' => 'required',

            ]);

            if (!$input) {
                return redirect()->to('room/create')->withInput()->with('validation', $this->validator);
            } else {

                $room = new Room();

                $data = [
                    'room_type' => $postData['room_type'],
                    'roomnumber' => $postData['roomnumber'],
                    'status' => $postData['status']
                ];

                ## Insert Record
                if ($room->insert($data)) {
                    session()->setFlashdata('message', 'Room Added Successfully!');
                    session()->setFlashdata('alert-class', 'alert-success');

                    return redirect()->to('room/create');
                } else {
                    session()->setFlashdata('message', 'Room Data not saved!');
                    session()->setFlashdata('alert-class', 'alert-danger');

                    return redirect()->to('room/create')->withInput();
                }
            }
        }
    }
    public function edit($room_id = 0)
    {

        ## Select record by id
        $room = new Room();
        $room = $room->find($room_id);

        $data['room'] = $room;
        return view('Layouts/room/edit', $data);
    }

    public function update($room_id = 0)
    {
        $request = service('request');
        $postData = $request->getPost();

        if (isset($postData['submit'])) {

            ## Validation
            $input = $this->validate([
                'room_type' => 'required',
                'roomnumber' => 'required',
                'status' => 'required',
            ]);

            if (!$input) {
                return redirect()->to('room/edit/' . $room_id)->withInput()->with('validation', $this->validator);
            } else {

                $room = new Room();

                $data = [
                    'room_type' => $postData['room_type'],
                    'roomnumber' => $postData['roomnumber'],
                    'status' => $postData['status']
                ];

                ## Update record
                if ($room->update($room_id, $data)) {
                    session()->setFlashdata('message', 'Room Updated Successfully!');
                    session()->setFlashdata('alert-class', 'alert-success');

                    return redirect()->to('/index');
                } else {
                    session()->setFlashdata('message', 'Room Data not saved!');
                    session()->setFlashdata('alert-class', 'alert-danger');

                    return redirect()->to('room/edit/' . $room_id)->withInput();
                }
            }
        }
    }

    public function delete($room_id = 0)
    {

        $room = new Room();

        ## Check record
        if ($room->find($room_id)) {

            ## Delete record
            $room->delete($room_id);

            session()->setFlashdata('message', 'Room Deleted Successfully!');
            session()->setFlashdata('alert-class', 'alert-success');
        } else {
            session()->setFlashdata('message', 'Room Record not found!');
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
