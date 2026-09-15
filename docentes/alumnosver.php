<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
include(ROOT_DIR . "_functions/micurso.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$anio = 0;
$alumnosA = get_AlumnosDatos($_GET['id']);
$curso = get_Curso($_GET['id']);
$rows = mysqli_num_rows($alumnosA);
?>
<main label="alumnosdatos">
  <header>
    <i class='bx bx-paper-plane'></i> Docentes
  </header>
  <section>
    <div class="row align-items-center mb-3">
      <div class="col-2 text-success"><a href="alumnos.php" class="d-flex"><i class='bx bx-chevrons-left bx-sm'></i><span>volver</span></a>
      </div>
    </div>
    <div class="card shadow p-3 mb-3">
      <h5 class="fw-semibold mb-5"><?= $curso['nombre'] . '(' . $rows . ')' ?></h5>
      <?php if ($rows == 0) { ?>
        <div class="alert alert-danger justify-content-center">
          <p class='d-flex mt-2'><i class='bx bx-error bx-sm me-2'></i>No se han registrado alumnos en este curso aún.</p>
        </div>
      <?php } else { ?>
        <?php while ($alumno = mysqli_fetch_array($alumnosA)) { ?>
          <div class="row">
            <div class="col-xl-2 col-4 text-center">
              <img src="../miusuario/imagenes/<?= $alumno['imagen'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 50%;">
            </div>
            <div class="col-xl-10 col-8">
              <div class="row">
                <div class="col-12">
                  <i class='bx bx-user-circle me-1'></i><span class="fw-semibold text-success"><?= $alumno['apellido'] . ' , ' . $alumno['nombre'] ?></span> <i class='bx bx-id-card ms-3 me-1'></i><?= $alumno['cuil'] ?><i class='bx bxs-baby-carriage ms-3 me-1'></i><?= $alumno['fecha_nac'] ?>
                </div>
                <hr>
                <div class="col-xl-6 col-12">
                  <span class="small">Tutor 1: </span>
                  <br>
                  <i class='bx bxs-user-rectangle me-1'></i><?= $alumno['tutor_a'] ?> <i class='bx bxs-phone ms-3 me-1'></i> <?= $alumno['telefonotutor_a'] ?> <i class='bx bx-id-card ms-3 me-1'></i> <?= $alumno['cuiltutor_a'] ?>
                </div>
                <div class="col-xl-6 col-12">
                  <span class="small">Tutor 2: </span>
                  <br>
                  <i class='bx bxs-user-rectangle me-1'></i><?= $alumno['tutor_b'] ?> <i class='bx bxs-phone ms-3 me-1'></i> <?= $alumno['telefonotutor_b'] ?> <i class='bx bx-id-card ms-3 me-1'></i> <?= $alumno['cuiltutor_b'] ?>
                </div>
              </div>
            </div>
          </div>
          <hr>
        <?php } ?>
      <?php } ?>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>