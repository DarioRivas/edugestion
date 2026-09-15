<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

?>
<main label="programasdoc">
  <header>
    <i class='bx bx-paper-plane'></i> Docentes
  </header>
  <section>
    <div class="card shadow mb-4">
     <div class="card-header text-bg-dark">PROGRAMAS ANUALES DE MATERIAS AÑO <?= $aniolectivo = date('Y') - 1  ?> y <?= $aniolectivo = date('Y')?></div>
      <div class="card-body bg-success bg-opacity-50 p-0">     
        <div class="row p-0 g-0">
          <div class="col-xxl-2 col-lg-2 col-6">
            <a type="button" class="btn btn-success w-100 p-0 g-0 py-3" href="programas.php?anio=1">
              <i class='bx bxs-folder bx-lg'></i>
              <h5>1er año <?= $aniolectivo = date('Y')?></h5>
              <span class="small fw-semibold">Ciclo Básico</span>
            </a>
            <a type="button" class="btn btn-outline-success bg-white text-success shadow  w-100 py-2 p-0 g-0 border-top-0" href="programaspasado.php?anio=1">
              <h6>Programa</h6>
              <span class="small fw-semibold">1er año <?= $aniolectivo = date('Y') - 1  ?></span>
            </a>
          </div>
          <div class="col-xxl-2 col-lg-2 col-6">
            <a type="button" class="btn btn-success w-100 p-0 g-0 py-3" href="programas.php?anio=2">
              <i class='bx bxs-folder bx-lg'></i>
              <h5>2do año <?= $aniolectivo = date('Y')?></h5>
              <span class="small fw-semibold">Ciclo Básico</span>
            </a>
            <a type="button" class="btn btn-outline-success bg-white text-success shadow  w-100 py-2 p-0 g-0 border-top-0" href="programaspasado.php?anio=2">
              <h6>Programa</h6>
              <span class="small fw-semibold">2do año <?= $aniolectivo = date('Y') - 1  ?> </span>
            </a>
          </div>
          <div class="col-xxl-2 col-lg-2 col-6">
            <a type="button" class="btn btn-success w-100 p-0 g-0 py-3" href="programas.php?anio=3">
              <i class='bx bxs-folder bx-lg'></i>
              <h5>3er año <?= $aniolectivo = date('Y')?></h5>
              <span class="small fw-semibold">1ro Ciclo Superior</span>
            </a>
            <a type="button" class="btn btn-outline-success bg-white text-success shadow  w-100 py-2 p-0 g-0 border-top-0" href="programaspasado.php?anio=3">
              <h6>Programa</h6>
              <span class="small fw-semibold">3er año <?= $aniolectivo = date('Y') - 1  ?></span>
            </a>
          </div>
          <div class="col-xxl-2 col-lg-2 col-6">
            <a type="button" class="btn btn-success   w-100 p-0 g-0 py-3" href="programas.php?anio=4">
              <i class='bx bxs-folder bx-lg'></i>
              <h5>4to año <?= $aniolectivo = date('Y')?></h5>
              <span class="small fw-semibold">2do Ciclo Superior</span>
            </a>
            <a type="button" class="btn btn-outline-success bg-white text-success shadow  w-100 py-2 p-0 g-0 border-top-0" href="programaspasado.php?anio=4">
              <h6>Programa</h6>
              <span class="small fw-semibold">4to año <?= $aniolectivo = date('Y') - 1  ?></span>
            </a>
          </div>
          <div class="col-xxl-2 col-lg-2 col-6">
            <a type="button" class="btn btn-success   w-100 p-0 g-0 py-3" href="programas.php?anio=5">
              <i class='bx bxs-folder bx-lg'></i>
              <h5>5to año <?= $aniolectivo = date('Y')?></h5>
              <span class="small fw-semibold">3ro Ciclo Superior</span>
            </a>
            <a type="button" class="btn btn-outline-success bg-white text-success shadow  w-100 py-2 p-0 g-0 border-top-0" href="programaspasado.php?anio=5">
              <h6>Programa</h6>
              <span class="small fw-semibold">5to año <?= $aniolectivo = date('Y') - 1  ?></span>
            </a>
          </div>
          <div class="col-xxl-2 col-lg-2 col-6">
            <a type="button" class="btn btn-success   w-100 p-0 g-0 py-3" href="programas.php?anio=6">
              <i class='bx bxs-folder bx-lg'></i>
              <h5>6to año <?= $aniolectivo = date('Y')?></h5>
              <span class="small fw-semibold">4to Ciclo Básico</span>
            </a>
            <a type="button" class="btn btn-outline-success bg-white text-success shadow  w-100 py-2 p-0 g-0 border-top-0" href="programaspasado.php?anio=6">
            <h6>Programa</h6>
            <span class="small fw-semibold">6to año <?= $aniolectivo = date('Y') - 1  ?></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="card shadow mb-5 ">
      <div class="card-header text-bg-dark">PROGRAMAS DE MATERIAS PARA ALUMNOS REGULARES <?= $aniolectivo = date('Y') ?></div>
      <div class="card-body bg-warning bg-opacity-50 p-0">
        <div class="row p-0 g-0">
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow  w-100 py-2" href="programasregulares.php?anio=1">
              <i class='bx bxs-folder bx-lg'></i>
              <h5>1er año</h5>
              <span class="small fw-semibold">Ciclo Básico</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow  w-100 py-2" href="programasregulares.php?anio=2">
              <i class='bx bxs-folder bx-lg'></i>
              <h5>2do año</h5>
              <span class="small fw-semibold">Ciclo Básico</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow  w-100 py-2" href="programasregulares.php?anio=3">
              <i class='bx bxs-folder bx-lg'></i>
              <h5>3er año</h5>
              <span class="small fw-semibold">1er año CS</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow  w-100 py-2" href="programasregulares.php?anio=4">
              <i class='bx bxs-folder bx-lg'></i>
              <h5>4to año</h5>
              <span class="small fw-semibold">2do año CS</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow  w-100 py-2" href="programasregulares.php?anio=5">
              <i class='bx bxs-folder bx-lg'></i>
              <h5>5to año</h5>
              <span class="small fw-semibold">3er año CS</span>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow  w-100 py-2" href="programasregulares.php?anio=6">
              <i class='bx bxs-folder bx-lg'></i>
              <h5>6to año</h5>
              <span class="small fw-semibold">4to año CS</span>
            </a></div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>