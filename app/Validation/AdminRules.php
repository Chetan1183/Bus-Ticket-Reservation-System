<?php

namespace App\Validation;
use App\Models\AdminModel;
class AdminRules{
    public function validateAdmin(string $str,string $fields,array $data){
        $model=new AdminModel();
        $user=$model->where('admin_loginid',$data['admin_loginid'])
                     ->first();
                     
                     
        if(!$user)
         return false;

        return password_verify($data['admin_password'],$user['admin_password']);
    }

}