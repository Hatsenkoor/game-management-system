<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BattleModel;

class Profile extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        
        
        if( !session('username') ){
            $response->redirect(base_url('signin')); // or use $this->response->redirect(base_url('dashboard'));
        }
    }

    public function index($userid = null)
    {
        $model = model( UserModel::class );
        $model_battle = model(BattleModel::class);
        
        $data = [
            'title' => 'User Profile',
            'user' => $model->getUserById(session('id')),
            'battles' => $model_battle->getUserBattles(session('username'))
        ];

        return view('templates/header', $data)
                .view('profile/overview')
                .view('templates/footer');

    }
    public function show($userid = null)
    {
        $model = model( UserModel::class );
        $model_battle = model(BattleModel::class);
        
        $user = $model->getUserById($userid);
        $data = [
            'title' => 'User Profile',
            'user' => $user,
            'battles' => $model_battle->getUserBattles($user['username'])
        ];

        return view('templates/header', $data)
                .view('profile/overview')
                .view('templates/footer');
    }
    public function view($slug = null)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }
}
