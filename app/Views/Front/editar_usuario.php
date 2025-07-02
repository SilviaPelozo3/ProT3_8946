<h2>Editar Usuario</h2>

<form method="post" action="<?= base_url('usuarios/actualizar/' . $usuario['id']) ?>">
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="<?= esc($usuario['nombre']) ?>" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= esc($usuario['email']) ?>" required>
    </div>

    <div class="mb-3">
        <label>Perfil</label>
        <select name="perfil_id" class="form-control">
            <option value="1" <?= $usuario['perfil_id'] == 1 ? 'selected' : '' ?>>Admin</option>
            <option value="2" <?= $usuario['perfil_id'] == 2 ? 'selected' : '' ?>>Asociado</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
