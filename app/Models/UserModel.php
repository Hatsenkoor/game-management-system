<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['username', 'email', 'password'];

    public function auth($data)
    {
        $user = $this->where(['username' => $data['username']])->first();
        if(!$user) return array('status'=>404);

        if(is_null($user['password'])) return array('status'=>401);

        if(!password_verify($data['password'], $user['password'])) return array('status'=>401);
        
        return array('status'=>200, 'user'=>$user);
    }

    public function getUsers($slug = false)
    {
        if ($slug === false) 
        {
            return $this->findAll();
        }

        return $this->where(['alliance' => $slug])->first();
    }
    public function getUserById($userid)
    {
        return $this->where(['id'=>$userid])->first();
    }
    public function getUserByAlliance($id)
    {
        return $this->where(['alliance'=>$id])->findall();
    }
}