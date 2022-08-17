<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
      // echo 'working...';
        return view('welcome_message');
    }
    public function second()
    {
      // echo 'working...';
        return view('welcome_message');
    }

}
