<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{   

    public function signin()
    {
        return view('auth/signin');
    }

    public function signup()
    {
        return view('auth/signup');
    }

    public function signout()
    {
        $session = session();
        $session->destroy();
        return redirect('signin');
    }

    public function login()
    {
        $model = model(UserModel::class);
        $session = session();
        if ($this->request->getMethod() === 'post' && $this->validate([
            'username' => 'required',
            'password'  => 'required',
        ])) {
            $data =  array(
                'username' => $this->request->getPost('username'),
                'password'  => $this->request->getPost('password'),
            );
            
            $user = $model->auth($data);
            
            if($user['status'] == 404){
                $session->setFlashdata('error', 'Wrong username');
                return redirect('signin');
            }
            if($user['status'] == 401){
                $session->setFlashdata('error', 'Wrong credintals');
                return redirect('signin');
            }
            if($user['status'] == 200){
                $session->setFlashdata('message', 'Success login');
                $session->set($user['user']);
                return redirect('profile');
            }
        } else {
            $session->setFlashdata('errors', service('validation')->getErrors());
            return redirect('signin');
        }  
    }

    public function register()
    {
        $model = model(UserModel::class);
        if ($this->request->getMethod() === 'post' && $this->validate([
            'username' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|min_length[3]',
            'password'  => 'required|min_length[3]',
        ])) {
            $data =  array(
                'username' => $this->request->getPost('username'),
                'email'  => $this->request->getPost('email'),
                'password'  => $this->hash_password($this->request->getPost('password')),
            );

            $model->save($data);
            $session = session();
            $session->setFlashdata('message', 'Success register!');

            return redirect('signin');
        } else {
            session()->setFlashdata('errors', service('validation')->getErrors());
            return redirect('signup');
        }        
    }

    private function hash_password($password){
        return password_hash($password, PASSWORD_BCRYPT);
     }
}
