<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    protected $usuarioModel;
    protected $session;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
        $this->session = \Config\Services::session();
    }

    public function registrar()
    {
        $data = [
            'nombre'    => $this->request->getPost('nombre'),
            'apellido'  => $this->request->getPost('apellido'),
            'email'     => $this->request->getPost('email'),
            'clave'     => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'telefono'  => $this->request->getPost('telefono'),
            'perfil_id' => 2, // Usuario común
        ];

        $rules = [
            'nombre'            => 'required|min_length[3]|max_length[100]',
            'apellido'          => 'required|min_length[3]|max_length[100]',
            'email'             => 'required|valid_email|is_unique[usuarios.email]',
            'password'          => 'required|min_length[6]',
            'confirmarPassword' => 'required_with[password]|matches[password]',
            'telefono'          => 'permit_empty|max_length[20]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        if (! $this->usuarioModel->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->usuarioModel->errors());
        }

        return redirect()->to('/login')->with('success', '¡Registro exitoso! Ahora puedes iniciar sesión.');
    }

    public function ingresar()
    {
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $usuario = $this->usuarioModel->where('email', $email)->first();

        if ($usuario && password_verify($password, $usuario['clave'])) {
            $this->session->set([
                'id_usuario' => $usuario['id'],
                'nombre'     => $usuario['nombre'],
                'email'      => $usuario['email'],
                'perfil_id'  => $usuario['perfil_id'],
                'isLoggedIn' => true,
            ]);

            return redirect()->to('/')->with('success', '¡Bienvenido de nuevo!');
        } else {
            return redirect()->to('/login')->with('error', 'Usuario o contraseña incorrectos.');
        }
    }

    public function salir()
    {
        $this->session->destroy();
        return redirect()->to('/')->with('info', 'Has cerrado sesión correctamente.');
    }

## agregado  para CRUD
public function index()
{
    if (!$this->esAdmin()) {
        return redirect()->to('/')->with('error', 'Acceso no autorizado.');
    }

    $usuarios = $this->usuarioModel->findAll();
    return view('Front/lista_usuarios', ['usuarios' => $usuarios]);
}

public function editar($id)
{
    if (!$this->esAdmin()) {
        return redirect()->to('/')->with('error', 'Acceso no autorizado.');
    }

    $usuario = $this->usuarioModel->find($id);
    return view('Front/editar_usuario', ['usuario' => $usuario]);
}

public function actualizar($id)
{
    if (!$this->esAdmin()) {
        return redirect()->to('/')->with('error', 'Acceso no autorizado.');
    }

    $data = [
        'nombre'   => $this->request->getPost('nombre'),
        'apellido' => $this->request->getPost('apellido'),
        'email'    => $this->request->getPost('email'),
        'telefono' => $this->request->getPost('telefono'),
    ];

    $this->usuarioModel->update($id, $data);

    return redirect()->to('/usuarios')->with('success', 'Usuario actualizado correctamente.');
}

public function eliminar($id)
{
    if (!$this->esAdmin()) {
        return redirect()->to('/')->with('error', 'Acceso no autorizado.');
    }

    $this->usuarioModel->delete($id);

    return redirect()->to('/usuarios')->with('success', 'Usuario eliminado correctamente.');
}

private function esAdmin()
{
    return session()->get('perfil_id') === 1;
}
}