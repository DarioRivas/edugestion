<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$conexion = conectar();
function get_Materias($anio)
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
}

?>
<main label="informacionmesas">
  <header>
    <i class='bx bx-edit'></i> Mesas de examen
  </header>
  <section class="container">
    <header>
      <div class="text-center mb-3">
        <h5>Próxima mesa:</h5>
        <h3>mes de <span class="text-success fw-semibold">Mayo</span></h3>
      </div>
    </header>
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-md-6 col-12 mt-3 text-center">
        <div class="card shadow px-2 rounded h-100">
          <h5 class="my-3">Fecha de inscripción</h5>
          <div class="alert alert-warning">
            <i class='bx bx-pencil bx-sm'></i>
            <p>desde el lunes 29 de Abril al domingo 5 de Mayo</p>
          </div>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-md-6 col-12 mt-3 text-center">
        <div class="card shadow px-2 rounded h-100">
          <h5 class="my-3">Fecha de exámenes</h5>
          <div class="alert alert-warning">
            <i class='bx bx-edit bx-md'></i>
            <h4>martes 28 de Mayo</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container mb-3">
    <div class="row">
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-12 mt-4 ">
        <a href="https://forms.gle/nMpVcsY5gizqs5fL8" target="_blank">
          <div class="card shadow text-center h-100">
            <div class="card-body">
              <h4 class="text-success">ACREDITACIÓN DE SABERES HASTA 2023</h4>
              <p class="small">Este formulario es para todos aquellos estudiantes que adeuden materias que cursaron
                hasta
                el
                año 2023
                inclusive.</p>
            </div>
            <div class="card-footer">
              <div class="rounded bg-success py-2">
                <span class="small text-white">ver formulario de inscripción</span>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-12 mt-4 ">
        <a href="https://forms.gle/DShHaRsYXg9Z8FH98" target="_blank">
          <div class="card shadow text-center h-100">
            <div class="card-body">
              <h4 class="text-primary">ACREDITACIÓN DE SABERES DE 2020-2021</h4>
              <p class="small">Este formulario es para todos aquellos estudiantes adeuden materias que cursaron durante
                el
                2020 y 2021.</p>
            </div>
            <div class="card-footer">
              <div class="rounded bg-primary py-2">
                <span class="small text-white">ver formulario de inscripción</span>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-4 col-12 mt-4 ">
        <a href="https://forms.gle/fZb1LiWw5wY4MND17" target="_blank">
          <div class="card shadow text-center h-100">
            <div class="card-body">
              <h4 class="text-info">ACREDITACIÓN DE SABERES - FIN DE CICLO</h4>
              <p class="small">Este formulario de inscripcion es para todos aquellos alumnos que culminaron la cursada
                de
                6to año y
                adeuden materias.</p>
            </div>
            <div class="card-footer">
              <div class="rounded bg-info py-2">
                <span class="small text-white">ver formulario de inscripción</span>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>