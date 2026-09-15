<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
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
    <i class='bx bx-edit'></i> Mi curso
  </header>
  <section class="container">
    <header>
      <div class="alert alert-primary text-center mb-3">

      </div>
    </header>
   
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>