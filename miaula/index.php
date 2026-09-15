<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
include(ROOT_DIR . "_functions/micurso.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$conexion = conectar();
?>
<main label="miaula">
  <header>
    <i class='bx bx-edit'></i> Mi aula
  </header>
  <?php
  if ($_SESSION['user-curso'] <= 0) {
  ?>
    <section class="container">
      <div class="alert alert-danger text-center small">
        <i class='bx bx-info-circle bx-md'></i>
        <h6>NO ESTAS SUSCRIPTO EN NINGUN CURSO</h6>
        <a class="btn btn-sm btn-outline-danger mt-3" href="../miusuario/ficha.php">Haz click aqui para inscribirte</a>
      </div>
    </section>
  <?php
  } else {
    $cursoArray = get_DataCursos($_SESSION['user-curso']);
    $miCurso = mysqli_fetch_assoc($cursoArray);
    $cursoId = $miCurso['id'];
    $cursoAnio = $miCurso['anio'];
    $cursoDivision = $miCurso['division'];
  ?>
    <div class="card shadow mb-5">
      <div class="card-header text-bg-dark">
        MIS MATERIAS <span class="text-success"><?= $miCurso['nombre'] ?></span>
      </div>
      <div class="card-body">
        <div class="row ">
          <?php
          $cursoMaterias = get_Materias($cursoAnio, $cursoId);
          while ($materia = mysqli_fetch_array($cursoMaterias)) {
            if ($materia['iddata_cursos'] == NULL) {
              $btn = "btn-outline-secondary disabled";
            } else {
              $btn = "btn-outline-dark ";
            }
          ?>
            <div class="col-xl-6 col-lg-4 col-md-6 col-12 my-1">
              <a class="btn <?= $btn ?> shadow w-100 p-0 m-0" href=" materia.php?materia=<?= $materia['id'] ?>&curso=<?= $cursoId ?>&docente=<?= $materia['idDocente'] ?>">
                <div class="row align-items-center ">
                  <div class="col text-start ps-3">
                    <div class=" text-success fw-semibold small"><?= $materia['nombre'] ?></div>
                    <div class="small"> <?= $materia['docente'] ?></div>
                  </div>
                  <div class="col-auto h-100 text-end">
                    <?php if ($materia['imagen'] != NULL) { ?>
                      <img class="img-fluid rounded-end" style="max-height: 10vh;" src="../miusuario/imagenes/<?= $materia['imagen'] ?>" alt="" ">
                    <?php } else { ?>
                      <img class=" img-fluid rounded-end" style="max-height: 10vh;" src="../miusuario/imagenes/_profe.png" alt="">
                    <?php } ?>
                  </div>
                </div>
              </a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="card shadow mb-5">
      <div class="card-header text-bg-dark">
        MIS COMPAÑEROS
      </div>
      <div class="card-body">
        <div class="row ">
          <?php
          $alumnos = get_Alumnos($_SESSION['user-curso']);
          while ($alumno = mysqli_fetch_array($alumnos)) {
          ?>
            <div class="col-xl-2 col-lg-3 col-md-4 col-4 my-1">
              <div class="card shadow">
                <div class="row">
                  <div class="col">
                    <?php if ($alumno['imagen'] != 'avatar4.png') { ?>
                      <img class="img-fluid rounded-end w-100" src="../miusuario/imagenes/<?= $alumno['imagen'] ?>" alt="">
                      <div class="small p-2"> <?= $alumno['apellido'] . ', ' .  $alumno['nombre'] ?></div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  <?php } ?>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>