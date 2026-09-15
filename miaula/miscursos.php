<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
include(ROOT_DIR . "_functions/micurso.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$userId = $_SESSION['user-id'];
$conexion = conectar();
$sql = "SELECT P.id, M.nombre AS materia, C.nombre AS curso FROM profes_materias P
INNER JOIN data_materias M ON P.iddata_materias = M.id
INNER JOIN data_cursos C on P.iddata_cursos = C.id WHERE idusuarios = $userId ORDER BY curso, materia";
$result = mysqli_query($conexion, $sql);
$registros = mysqli_num_rows($result);

/*
GET 
id curso
id materia
id docente
*/
?>
<main label="miaula">
  <header>
    <i class='bx bx-edit'></i> Mi aula
  </header>
  <div class="container">
    <div class="text-center p-3">
      <h3>3° 1ra</h3>
    </div>
    <div class="card-body">
      <?php if ($registros != 0) {
        while ($reg = mysqli_fetch_array($result)) { ?>
          <div class="row align-items-end justify-content-center py-2 border-bottom">
            <div class="col-xl-6 col-lg-4 col-12 text-start">
              <span class="small text-muted">Materia: </span><?= $reg['materia'] ?>
            </div>
            <div class="col-xl-4 col-lg-4 col-12 text-start">
              <span class="small text-muted">Curso: </span><?= $reg['curso'] ?>
            </div>
            <input type="hidden" name="idCurso" value="<?= $reg['id'] ?>">
            <div class="col-xl-2 col-lg-2 col-6">
              <a class="btn btn-success btn-sm w-100">Ver curso<i class='bx bx-chalkboard ms-3'></i></a>
            </div>
          </div>
        <?php }
      } else { ?>
        <div class="alert alert-warning">No hay cursos vinculados con su Usuario</div>
      <?php } ?>
    </div>
  </div>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>