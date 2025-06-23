<h2>Editar Usuario</h2>

<form action="<?= base_url('usuario/actualizar/'.$usuario['id']) ?>" method="post">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= esc($usuario['nombre']) ?>" required><br>

    <label>Apellido:</label>
    <input type="text" name="apellido" value="<?= esc($usuario['apellido']) ?>" required><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?= esc($usuario['email']) ?>" required><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" value="<?= esc($usuario['telefono']) ?>"><br>

    <button type="submit">Guardar</button>
</form>
