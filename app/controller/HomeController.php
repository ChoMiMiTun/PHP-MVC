<?php

namespace App\controller;

class HomeController
{
    public function index()
    {
        $title = 'Home';
        return view('home', compact('title'));
    }
}
