<?php

namespace App\Controllers;

class Scrape extends BaseController
{
    public function index()
    {
        $output['maps'] = shell_exec("start baseattackforce.exe");
        $output['data'] = shell_exec('start scrapy.exe');
        return view('errors/debug', $output);
    }
}
