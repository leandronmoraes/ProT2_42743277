<div class="container mt-4">

  <div class="text-center mb-4">
    <h1 class="display-5">¡Bienvenido a CódigoRoto!</h1>
    <p class="lead">Tu espacio para aprender y compartir sobre desarrollo web, programación y tecnología.</p>
  </div>

  <section class="alert alert-info text-center" role="alert">
    ¿Sabías que JavaScript fue creado en solo 10 días? ¡Descubrí más curiosidades en nuestro blog!
  </section>

  <!-- Carrusel de bienvenida -->
  <div id="carouselPrincipal" class="carousel slide my-4" data-bs-ride="carousel">
    <div class="carousel-inner rounded shadow">
      <div class="carousel-item active">
        <img src="<?= base_url('assets/img/banner1.jpg') ?>" class="d-block w-100" alt="Programación 1">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/banner2.webp') ?>" class="d-block w-100" alt="Programación 2">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/banner3.jpg') ?>" class="d-block w-100" alt="Programación 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPrincipal" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselPrincipal" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- Sección de publicaciones recientes -->
  <h2 class="my-4">Últimos artículos</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">


    <!-- Agregamos Tarjetas -->
    <!-- Tarjeta 1 -->
    <div class="col">
      <div class="card h-100">
        <img src="<?= base_url('assets/img/javascript.jpg') ?>" class="card-img-top img-post" alt="JavaScript">
        <div class="card-body">
          <h5 class="card-title">¿Qué es JavaScript?</h5>
          <p class="card-text">Un repaso a lo esencial de este lenguaje clave para la web moderna.</p>
          <a href="https://lenguajejs.com/" class="btn btn-primary">Leer más</a>
        </div>
      </div>
    </div>

    <!-- Tarjeta 2 -->
    <div class="col">
      <div class="card h-100">
        <img src="<?= base_url('assets/img/boostrap.webp') ?>" class="card-img-top img-post" alt="Boostrap">
        <div class="card-body">
          <h5 class="card-title">Introducción a Bootstrap</h5>
          <p class="card-text">Aprendé a crear sitios responsivos rápidamente con Bootstrap.</p>
          <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" class="btn btn-primary">Leer más</a>
        </div>
      </div>
    </div>

    <!-- Tarjeta 3 -->
    <div class="col">
      <div class="card h-100">
        <img src="<?= base_url('assets/img/codeigniter.png') ?>" class="card-img-top img-post" alt="CodeIgniter">
        <div class="card-body">
          <h5 class="card-title">¿Qué es CodeIgniter?</h5>
          <p class="card-text">Exploramos este framework PHP liviano y muy potente.</p>
          <a href="https://www.codeigniter.com/" class="btn btn-primary">Leer más</a>
        </div>
      </div>
    </div>

  </div>

  <!-- Botón de registro --> 
  <div class="text-center mt-5">
    <a href="<?= base_url('registro') ?>" class="btn btn-success btn-lg">Unite a la comunidad</a>
  </div>

</div>
