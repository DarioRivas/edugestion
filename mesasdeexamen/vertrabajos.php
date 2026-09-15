<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
?>
<main label="trabajosmesas">
  <header>
    <i class='bx bx-edit'></i> Mesas de examen
  </header>
  <section>
    <header>
    </header>
  </section>
  <section class="container">
    <div class="card shadow mb-5">
      <div class="card-header text-bg-dark">GUIAS Y TRABAJOS PRÁCTICOS</div>
      <div class="card-body bg-success bg-opacity-50 p-0">
        <div class="row p-0 g-0">
          <div class="col-xxl-4 col-lg-4 col-12"><a type="button" class="btn btn-success shadow  w-100 pb-2" href="trabajos.php?anio=1">
              <i class='bx bxs-folder bx-lg'></i>
              <h4>1er año</h4>
              <h6>Ciclo Básico</h6>
            </a></div>
          <div class="col-xxl-4 col-lg-4 col-12"><a type="button" class="btn btn-success shadow  w-100 pb-2" href="trabajos.php?anio=2">
              <i class='bx bxs-folder bx-lg'></i>
              <h4>2do año</h4>
              <h6>Ciclo Básico</h6>
            </a></div>
          <div class="col-xxl-4 col-lg-4 col-12"><a type="button" class="btn btn-success shadow  w-100 pb-2" href="trabajos.php?anio=3">
              <i class='bx bxs-folder bx-lg'></i>
              <h4>3er año</h4>
              <h6>1er año CS</h6>
            </a></div>
          <div class="col-xxl-4 col-lg-4 col-12"><a type="button" class="btn btn-success shadow  w-100 pb-2" href="trabajos.php?anio=4">
              <i class='bx bxs-folder bx-lg'></i>
              <h4>4to año</h4>
              <h6>2do año CS</h6>
            </a></div>
          <div class="col-xxl-4 col-lg-4 col-12"><a type="button" class="btn btn-success shadow  w-100 pb-2" href="trabajos.php?anio=5">
              <i class='bx bxs-folder bx-lg'></i>
              <h4>5to año</h4>
              <h6>3er año CS</h6>
            </a></div>
          <div class="col-xxl-4 col-lg-4 col-12"><a type="button" class="btn btn-success shadow  w-100 pb-2" href="trabajos.php?anio=6">
              <i class='bx bxs-folder bx-lg'></i>
              <h4>6to año</h4>
              <h6>4to año CS</h6>
            </a></div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>