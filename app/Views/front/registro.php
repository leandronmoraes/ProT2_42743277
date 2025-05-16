<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card shadow-lg rounded overflow-hidden" style="max-width: 800px; width: 100%;">
    <div class="row g-0">
      
      <!-- Columna de la imagen -->
      <div class="col-md-5 d-none d-md-block">
        <img src="<?= base_url('assets/img/banner1.jpg') ?>" alt="Registro" class="img-fluid h-100" style="object-fit: cover;">
      </div>

      <!-- Columna del formulario -->
      <div class="col-md-7 p-4">
        <h3 class="text-center mb-3">Crear cuenta</h3>
        <p class="text-center text-muted">Unite a <span class="codigo">Código</span><span class="roto">Roto</span> y comenzá a compartir tu pasión por la programación.</p>

        <form action="<?= base_url('registro/procesar') ?>" method="post" novalidate>
          <!-- Nombre -->
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre completo</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Juan Pérez" required>
            </div>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
              <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required>
            </div>
          </div>

          <!-- Contraseña -->
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
              <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
            </div>
          </div>

          <!-- Confirmar contraseña -->
          <div class="mb-3">
            <label for="confirmar" class="form-label">Confirmar contraseña</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
              <input type="password" class="form-control" id="confirmar" name="confirmar" placeholder="********" required>
            </div>
          </div>

          <!-- Botones -->
          <div class="d-grid mb-3">
            <button type="submit" class="btn btn-success">Registrarse</button>
          </div>
          <div class="d-grid mb-2">
            <button type="reset" class="btn btn-secondary">Limpiar</button>
          </div>

          <!-- Ya tenés cuenta -->
          <div class="text-center text-muted small">
            ¿Ya tenés cuenta? <a href="<?= base_url('login') ?>">Iniciar sesión</a>
          </div>

          <!-- GitHub -->
          <div class="text-center mt-3">
            <button type="button" class="btn btn-outline-dark btn-sm">
              <i class="bi bi-github me-1"></i> Registrarse con GitHub
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
