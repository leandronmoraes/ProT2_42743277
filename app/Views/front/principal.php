

<header class="banner-header text-white text-center d-flex align-items-center justify-content-center" style="background-image: url('<?= base_url('assets/img/banner1.avif') ?>');">
  <div class="banner-overlay"></div>
  <div class="banner-content">
    <h1 class="display-4 fw-bold">Programación y mucho más</h1>
    <p class="lead">Tu fuente de conocimiento en programación y tecnología</p>
  </div>
</header>


<div class="container mt-4">

  <div class="text-center mb-4">
    <h1 class="display-5">¡Bienvenido a  <span class="codigo">Código</span><span class="roto">Roto</span>!</h1>
    <p class="lead">Tu espacio para aprender y compartir sobre desarrollo web, programación y tecnología.</p>
  </div>

  <section class="alert alert-info text-center" role="alert">
    ¿Sabías que JavaScript fue creado en solo 10 días? ¡Descubrí más curiosidades en nuestro blog!
  </section>

  <!-- Carrusel de bienvenida -->
  <div id="carouselPrincipal" class="carousel slide my-4" data-bs-ride="carousel">
    <div class="carousel-inner rounded shadow">
      <div class="carousel-item active">
        <img src="<?= base_url('assets/img/banner1.jpg') ?>" class="d-block w-100 object-fit: cover" alt="Programación 1">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/banner2.webp') ?>" class="d-block w-100 object-fit: cover" alt="Programación 2">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/banner3.jpg') ?>" class="d-block w-100 object-fit: cover" alt="Programación 3">
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
  <!-- Sección de categorías destacadas -->
<section class="my-5">
  <h3>Categorías destacadas</h3>
  <div class="d-flex flex-wrap gap-2">
    <a href="#" class="btn btn-outline-primary btn-sm">JavaScript</a>
    <a href="#" class="btn btn-outline-primary btn-sm">Bootstrap</a>
    <a href="#" class="btn btn-outline-primary btn-sm">PHP</a>
    <a href="#" class="btn btn-outline-primary btn-sm">Frameworks</a>
    <a href="#" class="btn btn-outline-primary btn-sm">Tips & Trucos</a>
  </div>
</section>

<section class="my-5">
  <h3>Artículos recomendados</h3>
  <ul class="list-group">
    <li class="list-group-item">
      <a href="#">5 errores comunes al usar JavaScript y cómo evitarlos</a>
    </li>
    <li class="list-group-item">
      <a href="#">Bootstrap vs Tailwind: ¿cuál elegir?</a>
    </li>
    <li class="list-group-item">
      <a href="#">Cómo empezar con CodeIgniter paso a paso</a>
    </li>
  </ul>
</section>


<section class="my-5">
  <h3 class="text-center mb-4">Lo que dicen nuestros lectores</h3>
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <p>"Gracias a CódigoRoto entendí conceptos de JavaScript que me costaban muchísimo. ¡Recomiendo mucho este blog!"</p>
        <p class="text-end fw-bold mb-0">– Sofía G., estudiante</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <p>"Me ayudó a mejorar mi portfolio como desarrollador junior. Muy bien explicado todo."</p>
        <p class="text-end fw-bold mb-0">– Marcos T., frontend dev</p>
      </div>
    </div>
  </div>
</section>

<section class="my-5 text-center bg-light p-4 rounded shadow-sm">
  <h4>¿Querés recibir novedades y tips en tu correo?</h4>
  <p>Suscribite a nuestro boletín y enterate antes que nadie.</p>
  <form class="d-flex justify-content-center gap-2">
    <input type="email" class="form-control w-25" placeholder="Tu correo electrónico">
    <button type="submit" class="btn btn-primary">Suscribirme</button>
  </form>
</section>



  <!-- Botón de registro --> 
  <div class="text-center mt-5">
    <a href="<?= base_url('registro') ?>" class="btn btn-success btn-lg">Unite a la comunidad</a>
  </div>

</div>
