<h2>Lista de Usuarios</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th><th>Nombre</th><th>Email</th><th>Perfil</th><th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= esc($usuario['id']) ?></td>
            <td><?= esc($usuario['nombre']) ?></td>
            <td><?= esc($usuario['email']) ?></td>
            <td><?= esc($usuario['perfil_id']) == 1 ? 'Admin' : 'Asociado' ?></td>
            <td><a href="<?= base_url('usuarios/editar/' . $usuario['id']) ?>" class="btn btn-sm btn-warning">Editar</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
