<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\Booking;
use App\Validation\UserRules;
use App\Models\Bus;

class UsersController extends BaseController
{
    public function mybookings()
    {

        $bus = new Bus();
        $booking = new Booking();
        $data=[ 
            'booking1'=>$booking->select()->join('bus','bus.bus_id=booking1.bus_id')->paginate(),
            'pager'=>$booking->pager,
        ];
      
        // $db = \Config\Database::connect();

        // $builder = $db->table('room');
        // $builder->select('*');
        // $builder->join('booking', 'booking.room_id= room.room_id');
        // $query = $builder->get();
        
        // print_r($builder);
        return view('Layouts/user/mybookings',$data);
    }


    public function user_dashboard()
    {
        $data = [];
        return view('Layouts/user/user_dashboard');
    }
    public function userlogin()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'user_email' => 'required|valid_email',
                'user_password' => 'required|min_length[8]|max_length[13]|validateUser[user_email,user_password]',
            ];
            $errors = [
                'user_password' => [
                    'validateUser' => 'email or password don\'t match'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UsersModel();
                $user = $model->where('user_email', $this->request->getVar('user_email'))
                    ->first();
                $this->setUserMethod($user);
                return redirect()->to('user_dashboard');
            }
        }

        return view('Layouts/user/userlogin', $data);
    }
    private function setUserMethod($user)
    {
        $data = [
            'user_id' => $user['user_id'],
            'user_name' => $user['user_name'],
            'user_email' => $user['user_email'],
            'isLoggedIn' => true,

        ];
        session()->set($data);
    }
    public function register()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'user_name' => 'required|min_length[3]',
                'user_address' => 'required',
                'user_phone' => 'required',
                'user_gender' => 'required',
                'user_idproof' => 'required',
                'user_email' => 'required|valid_email|is_unique[users.user_email]',
                'user_password' => 'required|min_length[8]|max_length[13]',
                'confirm_password' => 'matches[user_password]',


            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UsersModel();
                $newData = [
                    'user_name' => $this->request->getVar('user_name'),
                    'user_address' => $this->request->getVar('user_address'),
                    'user_phone' => $this->request->getVar('user_phone'),
                    'user_gender' => $this->request->getVar('user_gender'),
                    'user_idproof' => $this->request->getVar('user_idproof'),
                    'user_email' => $this->request->getVar('user_email'),
                    'user_password' => $this->request->getVar('user_password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'sucessful registration');
                return redirect()->to('/userlogin');
            }
        }
        // 
        //  $model->save($_POST);


        return view('Layouts/user/userregister', $data);
    }
    public function profile()
    {
        $data = [];
        $model = new UsersModel();
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'user_name' => 'required|min_length[3]',
            ];
            if ($this->request->getPost('user_address') != '') {

                $rules['user_address'] = 'required';
            }
            if ($this->request->getPost('user_address') != '') {

                $rules['user_address'] = 'required';
            }
            if ($this->request->getPost('user_phone') != '') {

                $rules['user_phone'] = 'required';
            }
            if ($this->request->getPost('user_gender') != '') {

                $rules['user_gender'] = 'required';
            }
            if ($this->request->getPost('user_idproof') != '') {

                $rules['user_idproof'] = 'required';
            }
            if ($this->request->getPost('user_email') != '') {

                $rules['user_email'] = 'required|valid_email';
            }

            if ($this->request->getPost('user_password') != '') {

                $rules['user_password'] = 'required|min_length[8]|max_length[13]';
                $rules['confirm_password'] = 'matches[user_password]';
            }



            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {

                $newData = [
                    'user_id' => session()->get("user_id"),
                    'user_name' => $this->request->getPost('user_name'),
                ];
                if ($this->request->getPost('user_address') != '') {
                    $newData['user_address'] = $this->request->getPost('user_address');
                }
                if ($this->request->getPost('user_phone') != '') {
                    $newData['user_phone'] = $this->request->getPost('user_phone');
                }
                if ($this->request->getPost('user_idproof') != '') {
                    $newData['user_idproof'] = $this->request->getPost('user_idproof');
                }
                if ($this->request->getPost('user_email') != '') {
                    $newData['user_email'] = $this->request->getPost('user_email');
                }
                if ($this->request->getPost('user_password') != '') {
                    $newData['user_password'] = $this->request->getPost('user_password');
                }
                $model->save($newData);

                session()->setFlashdata('success', 'sucessfully updated');
                return redirect()->to('/profile');
            }
        }
        $data['user'] = $model->where('user_id', session()->get('user_id'))->first();
        return view('Layouts/user/profile', $data);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
    public function bookbus($bus_id)
    {
      
        $bus = new Bus();

        ## Fetch all records
       

        $data = [
            
            
            'bus_id' => $bus_id,
        ];
        $data['bus']=$bus->where('bus_id',$bus_id)->first();
          $data1=[
            'status'=>'booked',
          ];
          $to_no_of_seats=1;
        if ($this->request->getMethod() == 'post') {
            $model = new Booking();
            $newData = [
               
                'bus_id' => $bus_id,
                'user_id' => session()->get('user_id'),
                'user_name' => $this->request->getVar('user_name'),
                'no_of_seats' => $this->request->getVar('no_of_seats'),
                'pickup_point' =>$this->request->getVar('pickup_point'),
                'destination' => $this->request->getVar('destination'),
                'user_email' => $this->request->getVar('user_email'),
                'user_phone' => $this->request->getVar('user_phone'),
                'status' => 'booked',
             
            ];

            $model->save($newData);
            if($to_no_of_seats==15) {
                $bus->save($data1)->where('bus_id',$bus_id)->first();
            }
          
            session()->setFlashdata('booking', 'Requested For bus');
            return redirect()->to('checkavailability');
        }

        return view('/Layouts/user/user_bookbus', $data);
    }
}
