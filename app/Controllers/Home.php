<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){
        $context = [
            'session' => $this->session,
        ];
        return view('home', $context);
    }
}
