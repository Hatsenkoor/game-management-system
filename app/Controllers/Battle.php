<?php

namespace App\Controllers;

use App\Models\BattleModel;

class Battle extends BaseController
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
        $model = model( BattleModel::class );
        
        $data = [
            'title' => 'Battles',
            'battles' => $model->getBattles(),
        ];

        return view('templates/header', $data)
                .view('battle/overview')
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
