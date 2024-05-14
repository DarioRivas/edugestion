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

<main label="informacionsecre">
  <header>
    <i class='bx bx-pen'></i> Secretaría Online
  </header>
  <section>
    <div class="container">

    </div>
  </section>
  <section>
    <header>
      <div class="text-center mb-3">
        <h4>Fechas importantes</h4>
        <h3>Mayo 2024</h3>
      </div>
    </header>
  </section>
  <section>
    <div class="container">
      <div class="card shadow p-3 mb-5">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> <i class='bx bx-check me-3'></i><b> 1 al 31 </b>- Inscripción al 1º Movimiento de
            Reincorporación,
            Traslados, Acrecentamiento y Acumulación. Todos los
            niveles y modalidades.</li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i><b> Jueves 2</b> - Encuentro “Escuela+Familia”en
            coincidencia con el
            día de la No Violencia Escolar. </li>
          <li class="list-group-item"><i class='bx bx-check me-3'></i><b> Jueves 2</b> - Inicio del Relevamiento Anual
            (RA) de
            estadísticas
            educativas, a través del sistema Web, en las instituciones escolares. Todos los niveles y modalidades
            incluidas las Residencias Escolares.
            Consultas: estadisticas.rn@gmail.com </li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i><b> 2 al 8</b> - Promesa de lealtad a la
            Constitución
            Nacional. Estudiantes de los agrupamientos/cursos/divisiones de 3er
            año, 1° Año del Ciclo Superior de Escuelas Técnicas y
            del ciclo orientado de CEPJA de todas las instituciones educativas de Educación Secundaria. </li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i><b>6 al 10</b> - Constitución de Centros de
            Estudiantes.
            Educación
            Secundaria (todas las modalidades) Ley Nº 2812 y su
            modificatoria Nº 4983.</li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i> <b>10 al 25</b> - Apertura de legajo virtual y/o
            envío
            de nuevas titulaciones. Juntas de Clasificación para la Enseñanza
            Inicial, Primaria y Secundaria.</li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i><b> 13 al 17</b> - Entrega de informe
            cualitativo. ESRN.
          </li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i><b> 15</b> - Elevación de Acuerdos Escolares de
            Convivencia
            (AEC) a los/as supervisores/as de todos los niveles y
            modalidades.</li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i><b> 16</b> - Presentación del PEI - PCI a las
            Supervisiones.
            EEBAs.</li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i><b> 20 </b>- Fecha límite de presentación de
            Planillas
            de inscripción al registro federal de instituciones de Educación
            Técnica Profesional a la Unidad ejecutora jurisdiccional (Ed. Técnica, Formación Profesional y Superior).
          </li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i><b> 27 al 31</b> - Semana de Acreditación
            Previos,
            Libres y Equivalencias. Finalización de estudios en la Educación Secundaria, todas las modalidades. Excepto
            ESRN. <br> Instancia de acreditación de saberes para estudiantes de 5to Año. Finalización de trayectorias ESRN.</li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i> <b>31 </b>- Fecha límite para el envío de las
            reubicaciones de
            los/as docentes, realizadas ad referéndum, por los/as
            Supervisores/as de Educación Secundaria (todas las
            modalidades). <br>Presentación del Proyecto Educativo Supervisivo en
            las Direcciones de Educación y modalidades. <br> Fecha límite para la emisión de títulos y certificados
            a egresadas/os del período lectivo 2023. Educación
            Secundaria.</li>
        </ul>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>