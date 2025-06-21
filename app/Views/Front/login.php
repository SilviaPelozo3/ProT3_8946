<div class="container my-4">
  <h2>Iniciar Sesión</h2>

  <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
  <?php endif; ?>

  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>

  <form method="POST" action="<?= base_url('ingresar') ?>">
    <div class="mb-3">
      <label for="emailLogin" class="form-label">Correo Electrónico</label>
      <input type="email" class="form-control" id="emailLogin" name="email" placeholder="nombre@ejemplo.com" required>
    </div>
    <div class="mb-3">
      <label for="passwordLogin" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="passwordLogin" name="password" placeholder="Contraseña" required>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="recordarSesion" name="recordar">
      <label class="form-check-label" for="recordarSesion">Recuérdame</label>
    </div>
    <button type="submit" class="btn btn-success">Iniciar Sesión</button>
  </form>

  <p class="mt-3">¿No tienes cuenta? <a href="<?= base_url('registro') ?>">Regístrate aquí</a>.</p>
</div>
