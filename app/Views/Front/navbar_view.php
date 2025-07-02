<?php if (isset($mensaje) && $mensaje !== ""): ?>
    <div class="alert alert-info text-center">
        <?= esc($mensaje) ?>
    </div>
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
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/') ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('quienes-somos') ?>">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('acerca') ?>">Acerca</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Más opciones
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?= base_url('galeria') ?>">Galería</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('eventos') ?>">Eventos</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('noticias') ?>">Noticias</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
            </ul>

            <form class="d-flex me-3" role="search" action="<?= base_url('buscar') ?>" method="GET">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar" name="q">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>

            <ul class="navbar-nav">
                <?php if (session()->get('isLoggedIn')): ?>
                    <?php if (session()->get('perfil_id') == 1): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('usuarios') ?>">Administrar Usuarios</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('salir') ?>">Cerrar sesión</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('registro') ?>">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
