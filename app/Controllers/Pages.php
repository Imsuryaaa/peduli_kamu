<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }
}
