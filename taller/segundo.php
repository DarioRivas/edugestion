<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

?>
<main label="segundo">
  <header>
  <i class='bx bx-wrench'></i> Taller
  </header>
  <section>
    <header>
      <div class="text-center my-5">
        <h4>(Espacio en construcción)</h4>        
      </div>
    </header>    
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>