<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Auth extends BaseController
{
    public function login()
    {
        helper(['form']);

        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $usuarioModel = new UsuarioModel();
            $usuario = $usuarioModel->where('email', $email)->first();

            if ($usuario && password_verify($password, $usuario['password'])) {
                // Iniciar sesión
                $session = session();
                $session->set([
                    'id'      => $usuario['id'],
                    'email'   => $usuario['email'],
                    'perfil_id'  => $usuario['perfil_id'],
                    'logged_in' => true
                ]);

                // Redirigir según perfil
                switch ($usuario['perfil']) {
                    case 1:
                        return redirect()->to('/admin');
                    case 2:
                        return redirect()->to('/asociado');
                    default:
                        return redirect()->to('/');
                }
            } else {
                return redirect()->back()->with('error', 'Correo o contraseña incorrectos');
            }
        }

        return view('login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
