<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
 
    protected $table            = 'admin';
    protected $primaryKey       = 'admin_id';
    
    protected $allowedFields    = ['admin_name','admin_loginid','admin_password'];
    protected $beforeInsert=['beforeInsert'];
    protected $beforeUpdate=['beforeUpdate'];
    
    protected function beforeInsert(array $rus){
        $rus=$this->passwordHash($rus);
        return $rus;
    }
    protected function beforeUpdate(array $rus){
        $rus=$this->passwordHash($rus);
        return $rus;
    }
    protected function passwordHash(array $rus){
     
    if(isset($rus['data']['admin_password']))
       $rus['data']['admin_password']=password_hash($rus['data']['admin_password'],PASSWORD_DEFAULT);
       return $rus;
    }
}