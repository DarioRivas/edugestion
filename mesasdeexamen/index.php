<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$conexion = conectar();

/*function get_Materias($anio)
{
  $query = "SELECT * FROM data_materias WHERE anio = $anio;";
  $result = mysqli_query(conectar(), $query);
  return $result;
}

function get_Cursos()
{
  $query = "SELECT * FROM data_cursos GROUP BY anio;";
  $result = mysqli_query(conectar(), $query);
  return $result;
}*/

$inscripcion = ' disabled ';
$boton = 'inscripcion cerrada';

if (date('d') >= 1 && date('d') <= 7) {
  $inscripcion = '';
  $boton = 'INSCRIPCIÓN ABIERTA';
}


$mesNum = (int)date('n');

// Si es Enero (1), se fuerza a Febrero (2) ya que en enero no hay actividad ni mesas
if ($mesNum === 1) {
  $mesNum = 2;
}

$meses = [
  2 => 'FEBRERO',
  3 => 'MARZO',
  4 => 'ABRIL',
  5 => 'MAYO',
  6 => 'JUNIO',
  7 => 'JULIO',
  8 => 'AGOSTO',
  9 => 'SEPTIEMBRE',
  10 => 'OCTUBRE',
  11 => 'NOVIEMBRE',
  12 => 'DICIEMBRE'
];

$mesActual = $meses[$mesNum] ?? 'FEBRERO';

?>
<main label="informacionmesas">
  <header>
    <i class='bx bx-edit'></i> Mesas de examen
  </header>
  <section class="container">
    <div class="row">
      <div class="col-xxl-4 col-xl-4 col-md-4 col-12 mt-3 align-content-center text-center">
        <div class="alert alert-danger text-center mb-3 h-100">
          <i class='bx bx-edit bx-md'></i>
          <h5>Próxima mesa:</h5>
          <h3>mes de <span class="text-danger fw-semibold"><?= $mesActual ?></span></h3>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-md-4 col-12 mt-3 text-center">
        <div class="card shadow rounded h-100">
          <div class="card-header text-bgdark">FECHA DE INSCRIPCIÓN</div>
          <div class="card-body">
            <i class='bx bx-pencil bx-md '></i>
            <h4>1 al 7</h4>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-md-4 col-12 mt-3 text-center">
        <div class="card shadow rounded h-100">
          <div class="card-header text-bg-dark">FECHA DE EXÁMENES</div>
          <div class="card-body">
            <i class='bx bx-edit bx-md text-warning'></i>
            <h4>miercoles 30 en el turno tarde</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php if (($_SESSION['user-rol']  == 'alumno') || ($_SESSION['user-rol']  == 'admin')) { ?>
    <section class="container mb-3">
      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 mt-4 ">
          <div class="card shadow text-center h-100">
            <div class="card-body">
              <h4 class="text-success">ACREDITACIÓN DE SABERES PREVIOS</h4>
              <p class="small">Este formulario es para todos aquellos estudiantes que adeuden materias que cursaron
                hasta el año 2026 inclusive.</p>
            </div>
            <div class="card-footer p-0">
              <a class="btn btn-success text-white w-100 p-2 <?= $inscripcion ?>" href="https://forms.gle/hpo8w9o1bYfX4f7g8" target="_blank"><?= $boton ?></a>
            </div>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 mt-4 ">
          <div class="card shadow text-center h-100">
            <div class="card-body">
              <h4 class="text-info">ACREDITACIÓN DE SABERES - FIN DE CICLO</h4>
              <p class="small">Este formulario de inscripcion es para todos aquellos alumnos que culminaron la cursada
                de 6to año y adeuden materias.</p>
            </div>
            <div class="card-footer p-0">
              <a class="btn btn-info text-white w-100 p-2 <?= $inscripcion ?>" href="https://forms.gle/v1HNNxBFD1f1YUN47" target="_blank"><?= $boton ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>