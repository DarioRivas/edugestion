<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
include(ROOT_DIR . "_functions/micurso.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$anio = 0;
?>
<main label="alumnosdatos">
  <header>
    <i class='bx bx-paper-plane'></i> Docentes
  </header>
  <section>
    <?php for ($i = 1; $i < 7; $i++) {
      $cursosA = get_CursosPorAnio($i);      ?>
      <div class="card shadow p-3 mb-3">
        <h5 class="fw-semibold"><?= $i . '° año' ?></h5>
        <div class="row">
          <?php         
          while ($cursos = mysqli_fetch_array($cursosA)) {            
            ?>
            <div class="col-xl col-6">
              <a href="alumnosver.php?id=<?= $cursos['id'] ?>" class="btn btn-success btn-small w-100 py-2"><?= $cursos['nombre'] ?></a>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php } ?>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>