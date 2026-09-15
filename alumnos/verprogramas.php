<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
?>
<main label="programasalu">
  <header>
    <i class='bx bx-paper-plane'></i> Alumnos
  </header>
  <section>
    <div class="card shadow mb-4">
      <div class="card-header text-bg-dark">PROGRAMAS ANUALES DE MATERIAS POR AÑO</div>
      <div class="card-body p-0 g-0">
        <div class="row g-0">
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-success shadow w-100 py-2" href="programas.php?anio=1">
              <i class='bx bxs-folder bx-lg'></i>
              <h5 class="fw-semibold">1er año</h5>
              <span class="small fw-semibold">Ciclo Básico</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-success shadow w-100 py-2" href="programas.php?anio=2">
              <i class='bx bxs-folder bx-lg'></i>
              <h5 class="fw-semibold">2do año</h5>
              <span class="small fw-semibold">Ciclo Básico</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-success shadow w-100 py-2" href="programas.php?anio=3">
              <i class='bx bxs-folder bx-lg'></i>
              <h5 class="fw-semibold">3er año</h5>
              <span class="small fw-semibold">1ro CS</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-success shadow w-100 py-2" href="programas.php?anio=4">
              <i class='bx bxs-folder bx-lg'></i>
              <h5 class="fw-semibold">4to año</h5>
              <span class="small fw-semibold">2do CS</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-success shadow w-100 py-2" href="programas.php?anio=5">
              <i class='bx bxs-folder bx-lg'></i>
              <h5 class="fw-semibold">5to año</h5>
              <span class="small fw-semibold">3ro CS</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-success shadow w-100 py-2" href="programas.php?anio=6">
              <i class='bx bxs-folder bx-lg'></i>
              <h5 class="fw-semibold">6to año</h5>
              <span class="small fw-semibold">4to CS</span>
            </a></div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="card shadow mb-5">
      <div class="card-header text-bg-dark">PROGRAMAS DE MATERIAS PARA ALUMNOS REGULARES</div>
      <div class="card-body p-0 g-0">
        <div class="row g-0">
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow w-100 py-2" href="programasregulares.php?anio=1">
              <i class='bx bxs-folder bx-lg'></i>
              <h5 class="fw-semibold">1er año</h5>
              <span class="small fw-semibold">Ciclo Básico</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow w-100 py-2" href="programasregulares.php?anio=2">
              <i class='bx bxs-folder bx-lg'></i>
              <h5 class="fw-semibold">2do año</h5>
              <span class="small fw-semibold">Ciclo Básico</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow w-100 py-2" href="programasregulares.php?anio=3">
              <i class='bx bxs-folder bx-lg'></i>
              <h5 class="fw-semibold">3er año</h5>
              <span class="small fw-semibold">1ro CS</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow w-100 py-2" href="programasregulares.php?anio=4">
              <i class='bx bxs-folder bx-lg'></i>
              <h5 class="fw-semibold">4to año</h5>
              <span class="small fw-semibold">2do CS</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow w-100 py-2" href="programasregulares.php?anio=5">
              <i class='bx bxs-folder bx-lg'></i>
              <h5 class="fw-semibold">5to año</h5>
              <span class="small fw-semibold">3ro CS</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow w-100 py-2" href="programasregulares.php?anio=6">
              <i class='bx bxs-folder bx-lg'></i>
              <h5 class="fw-semibold">6to año</h5>
              <span class="small fw-semibold">4to CS</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>