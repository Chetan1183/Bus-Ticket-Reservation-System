<?php

namespace App\Controllers;
use App\Models\Booking;
use App\Controllers\BaseController;

class Rooms extends BaseController
{
    public function ourrooms()
    {
        return view('Layouts/room/ourrooms');
    }
    
    public function bookings()
    {
        $model = new Booking();
        $newData = [
            'user_name' => $this->request->getVar('user_name'),
            'room_id',
            'user_id',
            'user_name',
             'check_in',
             'check_out',
             'no_of_rooms',
             'no_of_adults',
             'no_of_child',
             'user_email', 
             'user_phone',
              'status'
            
        ];
        $model->save($newData);
        $session = session();
        $session->setFlashdata('success', 'sucessful registration');
        return redirect()->to('/userlogin');
        return view('Layouts/room/ourrooms');
    }
}
