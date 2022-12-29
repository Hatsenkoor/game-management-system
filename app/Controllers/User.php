<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        
        if( !session('username') ){
            $response->redirect(base_url('signin')); // or use $this->response->redirect(base_url('dashboard'));
        }
    }
    
    public function index()
    {
        $model = model( UserModel::class );
        
        $data = [
            'title' => 'Members',
            'members' => $model->getUsers(),
        ];

        return view('templates/header', $data)
                .view('user/overview')
                .view('templates/footer');

    }
}
