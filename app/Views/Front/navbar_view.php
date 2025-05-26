<!-- Barra de Navegación -->
<nav class="navbar navbar-expand-lg navbar-green bg-green">
  <div class="container-fluid">
    <!-- Logo y nombre -->
    <a class="navbar-brand" href="<?= base_url() ?>">
      <img src="<?= base_url('imagenes/logo.jpeg') ?>" alt="Logo" width="300" height="30" class="d-inline-block align-text-top">
      
    </a>

    <!-- Botón para móviles -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Elementos del menú -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('quienes-somos') ?>">Quiénes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('acerca') ?>">Acerca de</a>
        </li>
      </ul>

      <!-- Lado derecho: registro y login -->
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('registro') ?>">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
