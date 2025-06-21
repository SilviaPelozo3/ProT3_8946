<p>Por favor, completa todos los campos requeridos para crear tu cuenta.</p>
<p>Si ya tienes una cuenta, puedes iniciar sesión desde la opción login en el menú principal.</p>
<?php if (session()->has('errors')): ?>
    <div class="alert alert-danger">
        <ul>
        <?php foreach (session('errors') as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>


<div class="container my-4">
  <h2>Formulario de Registro</h2>
  
  <form action="<?= base_url('registrar') ?>" method="post">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
    </div>

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Tu apellido" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Correo Electrónico</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
    </div>

    <div class="mb-3">
      <label for="confirmarPassword" class="form-label">Confirmar Contraseña</label>
      <input type="password" class="form-control" id="confirmarPassword" name="confirmarPassword" placeholder="Repite tu contraseña" required>
    </div>

    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono</label>
      <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Número de teléfono">
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="terminos" required>
      <label class="form-check-label" for="terminos">Acepto los términos y condiciones</label>
    </div>

    <button type="submit" class="btn btn-primary">Registrarse</button>
  </form>
</div>

<p>Gracias por unirte a nuestra comunidad. Tu participación es muy importante para nosotros.</p>
<p>Si tienes alguna duda o necesitas ayuda, no dudes en contactarnos a través de nuestro formulario de contacto.</p>

