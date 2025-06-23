<h2>Usuarios registrados</h2>

<?php if (session()->has('success')): ?>
    <p style="color: green;"><?= session('success') ?></p>
<?php endif; ?>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= esc($usuario['nombre']) ?></td>
            <td><?= esc($usuario['apellido']) ?></td>
            <td><?= esc($usuario['email']) ?></td>
            <td><?= esc($usuario['telefono']) ?></td>
            <td>
                <a href="<?= base_url('usuario/editar/'.$usuario['id']) ?>">Editar</a> |
                <a href="<?= base_url('usuario/eliminar/'.$usuario['id']) ?>" onclick="return confirm('¿Seguro que deseas eliminar?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
