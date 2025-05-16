<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card shadow-lg rounded overflow-hidden" style="max-width: 800px; width: 100%;">
    <div class="row g-0">
      
      <!-- Columna de la imagen -->
      <div class="col-md-5 d-none d-md-block">
        <img src="<?= base_url('assets/img/logoprincipal.png') ?>" alt="Login CódigoRoto" class="img-fluid h-100" style="object-fit: cover;">
      </div>

      <!-- Columna del formulario -->
      <div class="col-md-7 p-4">
        <h3 class="text-center mb-3">Iniciar Sesión</h3>
        <p class="text-center text-muted">Bienvenido de nuevo a <span class="codigo">Código</span><span class="roto">Roto</span></p>
        
        <form action="<?= base_url('login/validar') ?>" method="post" novalidate>
          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-envelope"></i></span>
              <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required>
            </div>
          </div>

          <!-- Contraseña -->
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-lock"></i></span>
              <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
            </div>
          </div>

          <!-- Recordarme y enlace -->
          <div class="mb-3 d-flex justify-content-between align-items-center">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="recordar" name="recordar">
              <label class="form-check-label" for="recordar">Recordarme</label>
            </div>
            <a href="#" class="text-decoration-none small">¿Olvidaste tu contraseña?</a>
          </div>

          <!-- Botones -->
          <div class="d-grid mb-2">
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </div>
          <div class="text-center text-muted small">
            ¿No tenés cuenta? <a href="<?= base_url('registro') ?>">Registrate</a>
          </div>

          <!-- GitHub -->
          <div class="text-center mt-3">
            <button type="button" class="btn btn-outline-dark btn-sm">
              <i class="bi bi-github me-1"></i> Iniciar sesión con GitHub
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
