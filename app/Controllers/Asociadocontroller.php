<?php
namespace App\Controllers;

class AsociadoController extends BaseController
{
    public function index()
    {
        $session = session();
        $mensaje = "Inicio sesión como usuario asociado";

        return view('Front/head_view')
             . view('Front/navbar_view_usuario')
             . view('Asociado/dashboard', ['mensaje' => $mensaje])
             . view('Front/footer_view');
    }
}
