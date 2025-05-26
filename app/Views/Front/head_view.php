<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Principal</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome (para iconos en footer) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tus estilos personalizados -->
    <link href="<?= base_url('assets/css/estilos.css') ?>" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo */
        }         
        .imagen-principal {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: cover;
        }
        .carousel-item img {
            max-height: 500px;
            object-fit: cover;
        }
    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<body>

<header class="text-center bg-light py-3">
    <h1>Fundación Guaraní</h1>
</header>
