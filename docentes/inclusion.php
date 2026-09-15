<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
?>
<main label="inclusion">
  <header>
    <i class='bx bx-paper-plane'></i> Docentes
  </header>
  <section>
    <div class="card shadow p-3 mb-5">
      <ul class="list-group list-group-flush">
        <span class="py-2 fw-bold"><i class='bx bx-pen me-3'></i>ALUMNOS QUE SE ENCUENTRAN EN INCLUSION </span>
        <li class="list-group-item fs-5 my-3"> <i class='bx bx-cabinet me-2'></i> Corbo José Luis <i class='bx bx-right-arrow-alt'></i> 2do 2da CB TT <a href="https://drive.google.com/drive/folders/10APngQLzkM7MTd1hFloYPb1pxFX4lM8p?usp=sharing" class="btn btn-outline-success ms-3" target="_blank"><i class='bx bxl-google-cloud me-2'></i>Ver Drive</a></li>
        <li class="list-group-item fs-5 my-1"> <i class='bx bx-cabinet me-2'></i> Ayelen Cori Impa <i class='bx bx-right-arrow-alt'></i> 2to 2da CS TM <a href="https://drive.google.com/drive/folders/1UJDEThladk6tQURSeTBAkuR-FRLsn6CN?usp=sharing" class="btn btn-outline-success ms-3" target="_blank"><i class='bx bxl-google-cloud me-2'></i>Ver Drive</a></li>
      </ul>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>