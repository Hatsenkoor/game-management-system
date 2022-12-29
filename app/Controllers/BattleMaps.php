<?php

namespace App\Controllers;

class BattleMaps extends BaseController
{
    public function index($page)
    {
        $data['page'] = $page;
        return view('templates/header', $data)
                .view('maps/overview')
                .view('templates/footer');
    }
}
