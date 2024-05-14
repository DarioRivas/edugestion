<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

?>
<main label="materialeslaboratorio">
  <header>
  <i class='bx bxs-vial' ></i> Laboratorio
  </header>
  <section>
    <header>
      <div class="text-center">
        <h5>Recursos:</h5>
        <h4>Sin novedades</h4>
      </div>
    </header>
    <div class="row">

    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>