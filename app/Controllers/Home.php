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

    public function quienes_somos(): string
    {
        return view('Front/head_view')
             . view('Front/navbar_view')
             . view('Front/quienes_somos')
             . view('Front/footer_view');
    }

    public function acercade(): string
    {
        return view('Front/head_view')
             . view('Front/navbar_view')
             . view('Front/acercade')
             . view('Front/footer_view');
    }

    public function registro(): string
    {
        return view('Front/head_view')
             . view('Front/navbar_view')
             . view('Front/registro')
             . view('Front/footer_view');
    }

    public function login(): string
    {
        return view('Front/head_view')
             . view('Front/navbar_view')
             . view('Front/login')
             . view('Front/footer_view');
    }
}
