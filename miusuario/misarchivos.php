<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$conexion = conectar();
$id = $_SESSION['user-id'];
$thisyear = date('Y');
$sqlProyectos = "SELECT P.anio, M.nombre AS materia, P.aniolectivo, P.fechadecarga, P.cargadopornombre, P.archivo, P.nombre
  FROM proyectos P
  INNER JOIN data_materias M ON P.materia = M.nomenclatura
  WHERE P.cargadoporid = $id AND aniolectivo = $thisyear 
  ORDER BY P.anio, materia;";
$misProyectos = mysqli_query($conexion, $sqlProyectos);
$sqlProgramas = "SELECT P.anio, M.nombre AS materia, P.aniolectivo, P.fechadecarga, P.cargadopornombre, P.archivo
  FROM programas P
  INNER JOIN data_materias M ON P.materia = M.nomenclatura
  WHERE P.cargadoporid = $id AND aniolectivo = $thisyear 
  ORDER BY P.anio, materia;";
$misProgramas = mysqli_query($conexion, $sqlProgramas);
$sqlTrabajos = "SELECT P.anio, M.nombre AS materia, P.aniolectivo, P.fechadecarga, P.cargadopornombre, P.archivo, P.tipo, P.mes
  FROM mesas_trabajos P
  INNER JOIN data_materias M ON P.materia = M.nomenclatura
  WHERE P.cargadoporid = $id AND aniolectivo = $thisyear 
  ORDER BY P.anio, materia;";
$misTrabajos = mysqli_query($conexion, $sqlTrabajos);
$sqlPlanificaciones = "SELECT P.anio, M.nombre AS materia, P.aniolectivo, P.fechadecarga, P.cargadopornombre, P.archivo, P.cuatrimestre
  FROM planificaciones P
  INNER JOIN data_materias M ON P.materia = M.nomenclatura
  WHERE P.cargadoporid = $id AND aniolectivo = $thisyear 
  ORDER BY P.anio, materia;";
$misPlanificaciones = mysqli_query($conexion, $sqlPlanificaciones);
$flag = 1;
?>

<main label="misarchivos">
  <header>
    <i class='bx bx-edit'></i> Docentes
  </header>
  <section>
    <div class="card border border-success shadow mb-5">
      <div class="card-header text-bg-success">
        <i class='bx bx-coffee me-2'></i>MIS PROYECTOS
      </div>
      <div class="px-0">
        <?php while ($proyecto = mysqli_fetch_array($misProyectos)) {
          $rad = $flag % 2;
          if ($rad == 0) {
            $fila = ' bg-success bg-opacity-10';
          } else {
            $fila = '';
          }
        ?>
          <div class="row py-1 m-0 <?= $fila ?> border border-bottom-secondary">
            <div class="col-4 col-xl-2 my-1"><span class="small"></span> <?= date('d/m/Y', strtotime($proyecto['fechadecarga'])) ?></div>
            <div class="col-8 col-xl-auto my-1"><?= $proyecto['materia'] . ' de ' .  $proyecto['anio'] . '° año' ?> </div>
            <div class="col-12 col-xl my-1"><?= $proyecto['nombre'] ?></div>
            <div class="col-12 col-xl-2 my-1"> <a class="btn btn-outline-success btn-sm w-100" href="../docentes/proyectos/<?= $proyecto['archivo'] ?>" target="_blank">Descargar</a></div>
          </div>
        <?php $flag = $flag + 1;
        }
        $flag = 1; ?>
      </div>
    </div>
  </section>
  <section>
    <div class="card shadow border border-warning mb-5">
      <div class="card-header text-bg-warning  ">
        <i class='bx bx-street-view me-2'></i>MIS PROGRAMAS
      </div>
      <div class="px-0">
        <?php while ($programa = mysqli_fetch_array($misProgramas)) {
          $rad = $flag % 2;
          if ($rad == 0) {
            $fila = ' bg-warning bg-opacity-10';
          } else {
            $fila = '';
          }
        ?>
          <div class="row py-1 m-0 <?= $fila ?>  border border-bottom-secondary">
            <div class="col-4 col-xl-2 my-1"><span class="small"></span> <?= date('d/m/Y', strtotime($programa['fechadecarga'])) ?></div>
            <div class="col-8 col-xl my-1"><?= $programa['materia'] . ' de ' .  $programa['anio'] . '° año' ?> </div>
            <div class="col-12 col-xl-2 my-1"> <a class="btn btn-outline-success btn-sm w-100" href="../docentes/programas/<?= $programa['archivo'] ?>" target="_blank">Descargar</a></div>
          </div>
        <?php $flag = $flag + 1;
        }
        $flag = 1; ?>
      </div>
    </div>
  </section>
  <section>
    <div class="card  border border-success shadow mb-5">
      <div class="card-header text-bg-success  ">
        <i class='bx bx-time me-2'></i>MIS PLANIFICACIONES
      </div>
      <div class="px-0">
        <?php while ($planificacion = mysqli_fetch_array($misPlanificaciones)) {
          $rad = $flag % 2;
          if ($rad == 0) {
            $fila = ' bg-success bg-opacity-10';
          } else {
            $fila = '';
          }
        ?>
          <div class="row py-1 m-0 <?= $fila ?>  border border-bottom-secondary">
            <div class="col-4 col-xl-2 my-1"><span class="small"></span> <?= date('d/m/Y', strtotime($planificacion['fechadecarga'])) ?></div>
            <div class="col-8 col-xl my-1"><?= $planificacion['materia'] . ' de ' .  $planificacion['anio'] . '° año (' . $planificacion['cuatrimestre'] . '° cuatrimestre)' ?> </div>
            <div class="col-12 col-xl-2 my-1"> <a class="btn btn-outline-success btn-sm w-100" href="../docentes/planificaciones/<?= $planificacion['archivo'] ?>" target="_blank">Descargar</a></div>
          </div>
        <?php $flag = $flag + 1;
        }
        $flag = 1; ?>
      </div>
    </div>
  </section>
  <section>
    <div class="card shadow  border border-warning mb-5">
      <div class="card-header text-bg-warning  ">
        <i class='bx bx-edit me-2'></i>MIS TRABAJOS
      </div>
      <div class="px-0">
        <?php while ($trabajo = mysqli_fetch_array($misTrabajos)) {
          $rad = $flag % 2;
          if ($rad == 0) {
            $fila = ' bg-warning bg-opacity-10';
          } else {
            $fila = '';
          }
        ?>
          <div class="row py-1 m-0 <?= $fila ?>  border border-bottom-secondary">
            <div class="col-4 col-xl-2"><span class="small"></span> <?= date('d/m/Y', strtotime($trabajo['fechadecarga'])) ?></div>
            <?php switch ($trabajo['mes']) {
              case 2:
                $mes = 'Febrero';
                break;
              case 3:
                $mes = 'Marzo';
                break;
              case 4:
                $mes = 'Abril';
                break;
              case 5:
                $mes = 'Mayo';
                break;
              case 6:
                $mes = 'Junio';
                break;
              case 7:
                $mes = 'Julio';
                break;
              case 8:
                $mes = 'Agosto';
                break;
              case 9:
                $mes = 'Septiembre';
                break;
              case 10:
                $mes = 'Octubre';
                break;
              case 11:
                $mes = 'Noviembre';
                break;
              case 12:
                $mes = 'Diciembre';
                break;
            } ?>
            <div class="col-8 col-xl"><?= $trabajo['materia'] . ' de ' .  $trabajo['anio'] . '° año ' . '(' . $mes . ', ' . $trabajo['tipo'] . ')' ?> </div>
            <div class="col-12 col-xl-2"> <a class="btn btn-outline-success btn-sm w-100" href="../mesasdeexamen/trabajos/<?= $trabajo['archivo'] ?>" target="_blank">Descargar</a></div>
          </div>
        <?php $flag = $flag + 1;
        }
        $flag = 1; ?>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>