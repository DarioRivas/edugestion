<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/pedidoslaboratorio.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
?>
<main label="materialeslaboratorio">
  <header>
    <i class='bx bxs-vial'></i> Laboratorio
  </header>
  <section>
    <header>
      <div class="text-center">
        <h5>Material de vidrio:</h5>
        <h4>Sin novedades</h4>
      </div>
    </header>
    <div class="row">
      <div class="col-6">
        <div class="alert alert-success">
          <div class="row">
            <div class="col-9">Nombre
              <div class="row">
                <div class="col-12">Bureta</div>
                <div class="col-12">Probeta</div>
                <div class="col-12">Vaso de precipitado</div>
              </div>
            </div>
            <div class="col-3">Cantidad
              <div class="row">
                <div class="col-12">11</div>
                <div class="col-12">3</div>
                <div class="col-12">5</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="alert alert-danger">
          <div class="row">
            <div class="col-9"></div>
            <div class="col-3"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>