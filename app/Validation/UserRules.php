<?php

namespace App\Validation;
use App\Models\UsersModel;
class UserRules{
    public function validateUser(string $str,string $fields,array $data){
        $model=new UsersModel();
        $user=$model->where('user_email',$data['user_email'])
                     ->first();
                     
                     
        if(!$user)
         return false;

        return password_verify($data['user_password'],$user['user_password']);
    }

}