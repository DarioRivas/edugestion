<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/taller.php");
include (ROOT_DIR . "_functions/usuarios.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$get_inasistencias = get_inasistencias();
$get_profesoresP = get_ProfesoresTaller('1');
$get_profesoresS = get_ProfesoresTaller('2');
?>
<main label="informaciontaller">
  <header>
    <i class='bx bx-wrench'></i> Taller
  </header>
  <section>
    <header>
      <div class="text-center mt-3">
        <div class="card rounded p-3 shadow">
          <h5>Inasistencias</h5>
          <div class="alert alert-danger">
            <?php if ($get_inasistencias != '') { ?>
              <div class="row fw-bold mb-2">
                <div class="col-12">Sección y Turno - Docente - Fecha</div>
              </div>
              <?php
              while ($inasistencia = mysqli_fetch_array($get_inasistencias)) { ?>
                <div class="row">
                  <div class="col-12">
                    <?php if ($inasistencia['fechainicio'] == $inasistencia['fechafin']) {
                      $dia = date('d/m/Y', strtotime($inasistencia['fechainicio']));
                      $fecha = "el día $dia";
                    } else {
                      $desde = date('d/m/Y', strtotime($inasistencia['fechainicio']));
                      $hasta = date('d/m/Y', strtotime($inasistencia['fechafin']));
                      $fecha = "desde el $desde hasta el $hasta";
                    } ?>
                    <span class="h6">
                      <?= $inasistencia['seccion'] . ' ' . $inasistencia['anio'] . 'º T' . $inasistencia['turno'] ?></span>
                    - <?= 'Prof. ' . $inasistencia['docente'] ?> -
                    <?= $fecha ?>
                  </div>
                  <hr>
                </div>
              <?php }
            } else { ?>
              <div class="row fw-bold mb-2">
                <div class="col-12">No se registran inasistencias</div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="row">
        <div class="col-xl-6 col-12">
          <div class="card rounded shadow p-3 mt-3 text-center">
            <h5>Rotación 1er Año</h5>
            <ul class="list-group">
              <li class="list-group-item list-group-item-warning">miércoles 20 de marzo al miércoles 15 de mayo</li>
              <li class="list-group-item list-group-item-warning">lunes 20 de mayo al viernes 5 de julio</li>
              <li class="list-group-item list-group-item-warning">lunes 22 de julio al viernes 4 de octubre</li>
              <li class="list-group-item list-group-item-warning">lunes 7 de octubre al sabado 30 noviembre</li>
            </ul>
          </div>
        </div>
        <div class="col-xl-6 col-12">
          <div class="card rounded shadow p-3 mt-3 text-center">
            <h5>Rotación 2do Año</h5>
            <ul class="list-group">
              <li class="list-group-item list-group-item-info">miércoles 20 de marzo al viernes 3 de mayo</li>
              <li class="list-group-item list-group-item-info">lunes 6 de mayo al viernes 21 de junio</li>
              <li class="list-group-item list-group-item-info">lunes 24 de junio al viernes 23 de agosto</li>
              <li class="list-group-item list-group-item-info">lunes 26 de agosto al viernes 11 de octubre</li>
              <li class="list-group-item list-group-item-info">lunes 14 de octubre al viernes 29 de noviembre</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <div class="row">
      <div class="col-xl-6 col-12">
        <div class="card rounded shadow p-3 mt-3 text-center">
          <h5>Profesores 1er Año</h5>
          <div class=" alert alert-warning">
            <div class="row">
              <?php while ($profesP = mysqli_fetch_array($get_profesoresP)) { ?>
                <div class="col-6 mb-5">
                  <div class="row align-items-center">
                    <div class="col-xl-4"><img src="../miusuario/imagenes/<?= $profesP['imagen'] ?>" alt=""
                        class="img-fluid" style="max-width: 100px; border-radius:50%;"></div>
                    <div class="col-xl-8">
                      <div class="row align-items-center">
                        <div class="col-12"><?= $profesP['docente'] ?></div>
                        <div class="col-12  fw-semibold small"><?= $profesP['seccion'] ?></div>
                        <div class="col-12 small">Turno <?= $profesP['turno'] ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-12">
        <div class="card rounded shadow p-3 mt-3 text-center">
          <h5>Profesores 2do Año</h5>
          <div class=" alert alert-info">
            <div class="row">
              <?php
              while ($profesS = mysqli_fetch_array($get_profesoresS)) { ?>
                <div class="col-6 pb-5">
                  <div class="row align-items-center">
                    <div class="col-xl-4"><img src="../miusuario/imagenes/<?= $profesS['imagen'] ?>" alt=""
                        class="img-fluid" style="max-width: 100px; border-radius:50%;"></div>
                    <div class="col-xl-8">
                      <div class="row align-items-center">
                        <div class="col-12"><?= $profesS['docente'] ?></div>
                        <div class="col-12 fw-semibold small"><?= $profesS['seccion'] ?></div>
                        <div class="col-12 small">Turno <?= $profesS['turno'] ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>