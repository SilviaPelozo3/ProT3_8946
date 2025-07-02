<?php
namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {
        $session = session();
        $mensaje = "Inicio sesión desde admin";

        return view('Front/head_view')
             . view('Front/navbar_view')
             . view('Admin/dashboard', ['mensaje' => $mensaje])
             . view('Front/footer_view');
    }
}

