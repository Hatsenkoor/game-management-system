<?php

namespace App\Controllers;

use App\Models\BattleModel;
use App\Models\AllianceModel;
use App\Models\UserModel;

class Alliance extends BaseController
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
        $model = model( AllianceModel::class );
        
        $data = [
            'title' => 'Alliances',
            'alliances' => $model->getAlliances(),
        ];

        return view('templates/header', $data)
                .view('alliance/overview')
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

    public function alliance_detail($id)
    {
        $model = model( AllianceModel::class );
        $member = model( UserModel::class );
        
        $data = [
            'title' => 'Alliance Info',
            'alliance' => $model->getAllianceById($id),
            'members' => $member->getUserByAlliance($id)
        ];

        return view('templates/header', $data)
                .view('alliance/alliance_detail')
                .view('templates/footer');

    }
}