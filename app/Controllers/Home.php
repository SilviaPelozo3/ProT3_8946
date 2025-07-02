<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = $this->obtenerNavbarYMensa(true); // Mostrará mensaje si hay uno

        return view('Front/head_view')
             . $data['navbar']
             . view('Front/principal_ultimo', ['mensaje' => $data['mensaje']])
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

    public function galeria(): string
    {
        return view('Front/head_view')
             . view('Front/navbar_view')
             . view('Front/galeria')
             . view('Front/footer_view');
    }

    public function eventos(): string
    {
        return view('Front/head_view')
             . view('Front/navbar_view')
             . view('Front/eventos')
             . view('Front/footer_view');
    }

    public function noticias(): string
    {
        return view('Front/head_view')
             . view('Front/navbar_view')
             . view('Front/noticias')
             . view('Front/footer_view');
    }

    private function obtenerNavbarYMensa($conMensaje = false)
    {
        $session = session();
        $perfilId = $session->get('perfil_id');
        $mensaje = "";

        if (!$perfilId) {
            // Usuario público
            $navbar = view('Front/navbar_view_publico');
        } elseif ($perfilId == 1) {
            $navbar = view('Front/navbar_view'); // Admin
            if ($conMensaje) {
                $mensaje = "Inicio sesión desde admin";
            }
        } elseif ($perfilId == 2) {
            $navbar = view('Front/navbar_view_usuario'); // Asociado
            if ($conMensaje) {
                $mensaje = "Inicio sesión como usuario asociado";
            }
        } else {
            $navbar = view('Front/navbar_view_publico'); // fallback
        }

        return ['navbar' => $navbar, 'mensaje' => $mensaje];
    }
}
