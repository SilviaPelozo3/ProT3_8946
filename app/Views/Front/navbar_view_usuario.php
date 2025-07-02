<?php if(session()->get('isLoggedIn')): ?>
    <?php if(session()->get('perfil_id') == 1): ?>
        <div style="background-color: #d4edda; color: #155724; padding: 10px; text-align: center;">
            Sesión iniciada: Administrador - ¡Hola, <?= session()->get('nombre') ?>!
        </div>
    <?php elseif(session()->get('perfil_id') == 2): ?>
        <div style="background-color: #cce5ff; color: #004085; padding: 10px; text-align: center;">
            Sesión iniciada: Usuario Asociado - ¡Bienvenido, <?= session()->get('nombre') ?>!
        </div>
    <?php endif; ?>
<?php endif; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    

    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
            <img src="<?= base_url('assets/img/logo.jpeg') ?>" alt="marca" width="100" height="40" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('quienes-somos') ?>">Quiénes Somos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('acerca') ?>">Acerca</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Más opciones
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?= base_url('galeria') ?>">Galería</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('eventos') ?>">Eventos</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('noticias') ?>">Noticias</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav">
                <?php if(session()->get('perfil_id') == 1): ?>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('usuarios') ?>">Gestión Usuarios</a></li>
                <?php endif; ?>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('salir') ?>">Cerrar Sesión</a></li>
            </ul>
        </div>
    </div>
</nav>
