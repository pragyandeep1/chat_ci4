<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('chat');
        $data = [];

        echo view('templates/header', $data);
        echo view('chat');
        echo view('templates/footer');
    }
}
