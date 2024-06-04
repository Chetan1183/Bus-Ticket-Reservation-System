<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bus;

class Checkavailability extends BaseController
{
    public function index()
    {
        $bus = new Bus();
  
        ## Fetch all records
        $data['bus'] = $bus->findAll();

       return view('Layouts/user/checkavailability',$data);
    }
}
