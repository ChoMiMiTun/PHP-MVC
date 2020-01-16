<?php

namespace App\controller;

class ContactController {

    public function index()
    {
        $title = 'Contact';
        return view('contact', compact('title'));
    }
}