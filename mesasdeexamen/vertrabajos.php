<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
?>
<main label="trabajosmesas">
  <header>
    <i class='bx bx-edit'></i> Mesas de examen
  </header>
  <section>
    <header>
      <div class="text-center mb-3">
        <h5>
          Selecciona el ciclo correspondiente a la mesa
        </h5>
      </div>
    </header>
  </section>
  <section class="container">
    <div class="card shadow p-3 mb-5">
      <div class="row">
        <div class="col-xxl-4 col-12"><a type="button" class="btn btn-warning w-100 py-2 my-3"
            href="trabajos.php?anio=1">
            <h4>1er año</h4>
            <h6>Ciclo Básico</h6>
          </a></div>
        <div class="col-xxl-4 col-12"><a type="button" class="btn btn-warning w-100 py-2 my-3"
            href="trabajos.php?anio=2">
            <h4>2do año</h4>
            <h6>Ciclo Básico</h6>
          </a></div>
        <div class="col-xxl-4 col-12"><a type="button" class="btn btn-success w-100 py-2 my-3"
            href="trabajos.php?anio=3">
            <h4>3er año</h4>
            <h6>1er año CS</h6>
          </a></div>
        <div class="col-xxl-4 col-12"><a type="button" class="btn btn-success w-100 py-2 my-3"
            href="trabajos.php?anio=4">
            <h4>4to año</h4>
            <h6>2do año CS</h6>
          </a></div>
        <div class="col-xxl-4 col-12"><a type="button" class="btn btn-success w-100 py-2 my-3"
            href="trabajos.php?anio=5">
            <h4>5to año</h4>
            <h6>3er año CS</h6>
          </a></div>
        <div class="col-xxl-4 col-12"><a type="button" class="btn btn-success w-100 py-2 my-3"
            href="trabajos.php?anio=6">
            <h4>6to año</h4>
            <h6>4to año CS</h6>
          </a></div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>