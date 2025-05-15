
<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand d-flex align-items-center" href="<?= base_url('/principal') ?>">
      <img src="<?= base_url('assets/img/logoprincipal2.webp') ?>" alt="Logo" width="70" height="50" class="d-inline-block align-text-top me-2">
      
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/principal') ?>">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('quienes_somos') ?>">Quiénes Somos</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('acercade') ?>">Acerca de</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('registro') ?>">Registrarse</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>">Login</a></li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
