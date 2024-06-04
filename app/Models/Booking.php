<?php

namespace App\Models;

use CodeIgniter\Model;

class Booking extends Model
{
   
    protected $table            = 'booking1';
    protected $primaryKey       = 'booking_id';
   
    protected $allowedFields    = ['bus_id', 'user_id','user_name','no_of_seats','pickup_point','destination','user_email', 'user_phone', 'status'];

    // Dates
  
   

}
