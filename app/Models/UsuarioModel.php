<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';           // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id';            // Clave primaria
    protected $allowedFields = ['nombre', 'apellido', 'email', 'clave', 'telefono', 'perfil_id', 'created_ad'];
}
