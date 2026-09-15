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

<main label="informacionsecre">
  <header>
    <i class='bx bx-pen'></i> Secretaría Online
  </header>
  <section>
    <div class="container">

    </div>
  </section>
  <section>
    <!--<header>
      <div class="text-center mb-3">
        <div class="container">
          <div class="card shadow p-3 mb-5 bg-warning bg-opacity-50  mt-4">
            <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6 col-12"><i class='bx bxs-bell-ring bx-md' ></i>
                <h5>Jornada 27 de junio</h5>
              </div>
              <div class="col-xl-6  col-lg-6 col-12">
                <a href="https://forms.gle/KEAVBrT7rSmxVgbz7" target="_blank" class="btn btn-success d-flex justify-content-center">Acceder al formulario <i class='bx bx-spreadsheet bx-sm ms-3'></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <hr>
-->
  </section>
  <section>
    <div class="container">
      <div class="card shadow mb-3 text-center">
        <div class="row">
          <div class="col d-flex align-items-center justify-content-center">
            1ra reunión de personal 2026 <i class='bx bx-right-arrow-alt'></i>
          </div>
          <div class="col align-items-center h-100">
            <a href="documentacion/reuniondepersonal_03_2026.pdf" class="btn btn-success d-flex justify-content-center">Ver pdf completo <i class='bx bxs-file-pdf bx-sm ms-3'></i></a>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col d-flex align-items-center justify-content-center">
            2da reunión de personal 2026 <i class='bx bx-right-arrow-alt'></i>
          </div>
          <div class="col align-items-center h-100">
            <a href="documentacion/reuniondepersonal_08_2026.pdf" class="btn btn-success d-flex justify-content-center">Ver pdf completo <i class='bx bxs-file-pdf bx-sm ms-3'></i></a>
          </div>
        </div>
      </div>
      <div class="card shadow p-3 mb-5">
        <ul class="list-group list-group-flush">
          <span class="py-2 fw-bold"><i class='bx bx-pen me-3'></i>SECRETARÍA </span>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i>Licencias - inasistencias - constancias de jornadas/reuniones: deberán ser
            entregadas en tiempo y forma, entre 48 a 72 horas. No debe entregarse
            documentación con tachones, ni con enmiendas.</li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i>El régimen de licencias e inasistencias, se encuentra en la Resolución N° 233/98, para su conocimiento y lectura.</li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i><b>ARTÍCULO 20°</b>: se deberán solicitar con 48 horas de anticipación,
            por escrito mediante nota presentada en secretaría para su análisis y autorización (NO ENVIAR POR MAIL).
            En los cargos de una misma área no debe superar el 20% por orden de presentación.
            Se hará una rotación en caso de ser necesario por los pedidos. Serán otorgados hasta el 30/11.
            Es decir, en DICIEMBRE no se autorizan artículos N°20 debido a que se debe garantizar que el PERÍODO COMPLEMENTARIO se lleve a cabo en forma completa y organizada.
          <li class="list-group-item fw-semibold"><i class='bx bx-check me-3'></i>Todo cambio de horario y/o acuerdos entre docentes que afecten a la
            organización escolar, deben ser informados al preceptor, jefa de preceptores,
            prosecretaria o directivos.</li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i>En caso de ausencias por parte de los docentes al Período Complementario,
            deberán justificar su ausencia con la licencia correspondiente. </li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i>En caso de ausentarse con o sin certificado médico deberá el docente avisar al
            0800-222-7436 o <a href="www.comunicarnos.educacion.rionegro.gov.ar" class="text-primary">www.comunicarnos.educacion.rionegro.gov.ar</a> o correo electrónico <span class="text-success">cet5cs@gmail.com</span> para
            dar aviso antes de su horario de entrada a trabajar.</li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i>El personal de la institución no debe concurrir en horario de clases con sus hijos
            menores de edad, debido a que el seguro escolar no lo cubre. </li>
        </ul>
      </div>
      <div class="alert alert-success shadow p-3 mb-5">
        <ul class="list-group list-group-flush">
          <span class="py-2 fw-bold"><i class='bx bx-time-five me-3'></i>HORA DE ENTRADA Y SALIDA </span>
          <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i> Aulas en turno mañana: 8:00 a 12:20 (6ta hora) o 13:00 horas (7ma) </li>
          <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i> Aulas en turno tarde: 13:30 horas a 17:50 (6ta hora) o 18:30 (7ma)</li>
          <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i> Taller en turno mañana: 8:00 a 11:12 horas</li>
          <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i> Taller en turno tarde: 14:00 horas a 17:12 horas</li>
          <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i> Laboratorio en turno mañana: 8:00 a 10:40, 11:20 y 12:00 horas según
            corresponda.</li>
          <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i> Laboratorio en turno tarde: 13:30 a 16:10, 16:40, 16:50, 17:10, 17:30 horas
            según corresponda.</li>
        </ul>
      </div>
      <div class="card shadow p-3 mb-5">
        <ul class="list-group list-group-flush">
          <span class="py-2 fw-bold"><i class='bx bx-donate-heart me-3'></i>ACUERDOS DE CONVIVENCIA </span>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i> Los y las Docentes deben conocer, respetar y hacer respetar los AEC ya que son
            de carácter institucional. Es necesario entender que los docentes somos ejemplos para nuestros estudiantes. Se encuentran subidos en nuestra plataforma, para su lectura y conocimiento.</li>
          <span class="py-2 fw-bold"><i class='bx bx-message-edit me-3'></i>ENTREGA DE PLANIFICACIONES Y PROGRAMAS</span>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i> PROGRAMAS:
            <br><span class="ps-5">_ Viernes 31/03: unificados y consensuados por año por materia de
              ambos turnos. Se entrega en formato papel en dirección y se carga en la plataforma (docentes, subir programa anual)</span>
          </li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i> PLANIFICACIONES:
            <br><span class="ps-5">_ Primera entrega 20/04</span>
            <br> Será cuatrimestral e individual por año. Se entrega en
            dirección en formato papel.
          </li>
          <span class="py-2 fw-bold"><i class='bx bx-edit-alt me-3'></i>MESAS DE ACREDITACIÓN MENSUALES</span>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i> Las mesas de acreditación de saberes se realizarán según calendario escolar, una vez por mes. Deberán acordar con los docentes que dicten la misma materia por un año un TP integrador unificado. Todos los docentes del área son responsables de la elaboración y carga del mismo en el foro.
            Luego de cada mesa se vacían las pestañas por lo que la carga de TP es mensual</li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i>
            Las mesas de acreditación de saberes tienen dos formas distintas:
            <br><span class="ps-5">_ ACREDITACIÓN DE SABERES HASTA 2024</span>
            <br><span class="ps-5">_ ACREDITACIÓN DE SABERES - FIN DE CICLO</span>
            <br>
            <div class="alert alert-danger mt-2"><i class='bx bx-info-circle me-2 bx-sm'></i>Los TP integradores deberán cargarse el día 12 de cada mes. En caso de no ser un día de la semana laborable, realizar la carga al primer día hábil posterior a la fecha.
              A partir de allí los estudiantes lo realizarán y traerán hecho el día de acreditación de saberes. Donde deberán defender su trabajo.
            </div>
          </li>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i>
            Tanto el programa como la planificación deberán cumplir la siguiente estructura: <br>
            <span class="ps-5">CARÁTULA: Materia, docentes, año 2026, ciclo lectivo. <br>
              <span class="ps-5">UNIDAD PEDAGÓGICA: Detalladas. Bibliografía usada y sugerida. Firma de los docentes. <br>
                <span class="ps-5">Observación: cuando un docente no conozca o no tenga el contacto del docente que lo acompaña en una materia en el mismo año, acercarse a dirección para facilitarle dicho contacto. <br>
          </li>
          <span class="py-2 fw-bold"><i class='bx bx-planet me-3'></i>PROYECTOS:</span>
          <li class="list-group-item"> <i class='bx bx-check me-3'></i>_ Entrega: 6 de abril, serán incorporados al PEI institucional.<br>
            <span class="ps-5">(Se sugiere que sean interdisciplinarias y viables)
          </li>

        </ul>
        <div class="alert alert-warning mt-2"><i class='bx bx-info-circle me-2 bx-sm'></i>En esta plataforma, en el menú <b>Docentes</b> hay opciones para subir <b>Proyectos, Planificaciones y Programas </b></div>
      </div>
      <div class="row">
        <div class="col-xl-6 col-12">
          <div class="alert alert-info shadow p-3 mb-5">
            <ul class="list-group list-group-flush bg-transparent">
              <span class="py-2 fw-bold"><i class='bx bx-calendar me-3'></i>FECHAS</span>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>Ciclo lectivo: 02 de Marzo al 18 de Diciembre de 2026</li>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>Inicio de clases: 03/03</li>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>Receso invernal: 13 al 24 de Julio de 2026</li>
              <span class="py-1 fw-semibold">DURACIÓN DE CUATRIMESTRE:</span>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>1er Cuatrimestre: 02/03 al 08/07 </li>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>Corte bimestral 30 de abril </li>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>2do Cuatrimestre: 27/07 al 30/11 </li>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>Corte bimestral 30 de septiembre </li>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>Periódo de complementación de saberes: del 01/12 al 15/12 de 2026</li>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>Mesa de previos, libres y terminales: del 09/12 al 15/12</li>
            </ul>
          </div>
        </div>
        <div class="col-xl-6 col-12">
          <div class="alert alert-warning shadow p-3 mb-5">
            <ul class="list-group list-group-flush">
              <span class="py-2 fw-bold"><i class='bx bx-calendar me-3'></i>JORNADAS INSTITUCIONALES</span>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>12 y 13/02 formación permanente y jornada institucional</li>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>21/04 Formación docente</li>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>14/05 Encuentro escuela+familia </li>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>13/08 Formación docente</li>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>21/09 Formación docente</li>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>22/10 encuentro escuela- familia</li>
              <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>16 al 19/11 Jornada de cambio de actividades EXPO TÉCNICA</li>
            </ul>
          </div>
        </div>
      </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>