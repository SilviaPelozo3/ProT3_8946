<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Front/head_view')
             . view('Front/navbar_view')
             . view('Front/principal_ultimo')
             . view('Front/footer_view');
    }
}