<div class="content">
    <section class="container my-5">
         <main class="container">        
        <img src="<?= base_url('imagenes/imagen-fundacion.jpg') ?>" alt="Imagen ilustrativa" class="img-fluid">
    </main>
                <div class="cajadeparrafos my-4">
            <p class="texto-estilo">Somos una fundación sin fines de lucro dedicada a promover el desarrollo social y educativo de niños, jóvenes y familias en situación de vulnerabilidad.</p>
            <p>Trabajamos desde una perspectiva inclusiva, generando espacios de aprendizaje, contención y participación comunitaria.</p>
        </div>
        
        <p>Nuestro compromiso es construir una sociedad más justa a través de la educación, el acompañamiento social y la formación en valores.</p>
    </section>

    <!-- Inicio del Carrusel -->
    <div id="carouselExample" class="carousel slide container my-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/uno.jpg') ?>" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/dos.jpg') ?>" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/tres.jpg') ?>" class="d-block w-100" alt="Imagen 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    <!-- Fin del Carrusel -->
</div>


