</main>

<footer class="bg-dark text-light text-center py-4 mt-5">
  <div class="container">
    <p class="mb-2">&copy; <?= date('Y') ?> CódigoRoto - Todos los derechos reservados.</p>
    <p class="mb-2">Desarrollado por <strong>Leandro Moraes</strong></p>
    <div class="d-flex justify-content-center">
      <a href="https://github.com/leandronmoraes" class="text-light mx-3" target="_blank" rel="noopener" title="GitHub">
        <i class="fab fa-github fa-lg"></i>
      </a>
      <a href="https://www.linkedin.com/in/leandronmoraes/" class="text-light mx-3" target="_blank" rel="noopener" title="LinkedIn">
        <i class="fab fa-linkedin fa-lg"></i>
      </a>
    </div>
  </div>
</footer>

<!-- --- Botón "Volver arriba" --- -->
<button id="btnVolverArriba" title="Volver arriba" aria-label="Volver arriba"
  style="position: fixed; bottom: 30px; right: 30px; display: none; background-color: #007bff; color: white; border: none; border-radius: 50%; width: 45px; height: 45px; font-size: 24px; cursor: pointer; z-index: 9999;">
  ↑
</button>

<!-- Bootstrap Bundle JS desde CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- FontAwesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<!-- Script de modo oscuro -->
<script>
  const switchInput = document.getElementById('toggleDarkModeSwitch');
  const body = document.body;

  if (localStorage.getItem('modoOscuro') === 'true') {
    body.classList.add('dark-mode');
    switchInput.checked = true;
  }

  switchInput.addEventListener('change', () => {
    body.classList.toggle('dark-mode');
    localStorage.setItem('modoOscuro', body.classList.contains('dark-mode'));
  });
</script>

<!-- Script para cerrar menú hamburguesa al hacer clic en un enlace -->
<script>
  document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    link.addEventListener('click', () => {
      const navbarCollapse = document.querySelector('.navbar-collapse');
      if (navbarCollapse.classList.contains('show')) {
        new bootstrap.Collapse(navbarCollapse).hide();
      }
    });
  });
</script>

<!-- Script para botón "Volver arriba" -->
<script>
  const btnVolverArriba = document.getElementById("btnVolverArriba");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
      btnVolverArriba.style.display = "block";
    } else {
      btnVolverArriba.style.display = "none";
    }
  });

  btnVolverArriba.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
</script>

<script>
  // Cierra el menú cuando se hace clic en un enlace
  document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    link.addEventListener('click', () => {
      const navbarCollapse = document.querySelector('.navbar-collapse');
      if (navbarCollapse.classList.contains('show')) {
        new bootstrap.Collapse(navbarCollapse).hide();
      }
    });
  });
</script>


</body>
</html>
