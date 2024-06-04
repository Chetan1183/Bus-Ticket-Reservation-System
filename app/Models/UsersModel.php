<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
 
    protected $table            = 'users';
    protected $primaryKey       = 'user_id';
    
    protected $allowedFields    = ['user_name','user_address','user_phone','user_gender','user_idproof','user_email','user_password'];
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
     
    if(isset($rus['data']['user_password']))
       $rus['data']['user_password']=password_hash($rus['data']['user_password'],PASSWORD_DEFAULT);
       return $rus;
    }
}