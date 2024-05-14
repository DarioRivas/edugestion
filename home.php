<?php
define('ROOT_DIR', '');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
?>
<main>
    <header>
        <i class='bx bx-home'></i> Inicio
    </header>
    <section>
        <div class="alert alert-warning"><i class='bx bx-hard-hat bx-sm'></i>
            Hola! Te informamos que este sistema está en construcción, de a poco se van a ir añadiendo funciones y es
            MUY
            posible que encuentres errores. <br> Por favor informá los mismos al mail <a
                href="mailto:admin@cet5cs.online" class="text-danger">admin@cet5cs.online</a> o directamente al TIC así
            podemos solucionarlos a la brevedad.
        </div>
    </section>
    <section>
        <div class="card shadow p-3 my-4">
            <h4>Actualizaciones futuras</h4>
            <p>Actualmente estamos trabajando en los siguientes módulos:</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> <i class='bx bx-check'></i> <b>Directivos</b><br>Listado de guías cargadas
                    para mesas de examen. Listado de programas anuales cargados.</li>
                <li class="list-group-item"> <i class='bx bx-check'></i> <b>Usuarios</b><br>Creación de cuenta y
                    carga de datos personales. Actualizar imagen de perfil. Cambiar contraseña de la cuenta.</li>
                <li class="list-group-item"> <i class='bx bx-check'></i> <b>Alumnos</b><br>Carga de datos de
                    Tutores.</li>
                <li class="list-group-item"> <i class='bx bx-time-five'></i> <b>Docentes</b><br>Carga de datos
                    laborales. Carga de cargos/materias/horas. Documentación importante. Carga de proyectos. Carga de
                    programas anuales.</li>
                <li class="list-group-item"> <i class='bx bx-check'></i> <b>Mesas de examen</b><br>Información de mesas,
                    fechas y formularios de inscripción.
                    Módulo de carga de trabajos prácticos y guías. Publicación de trabajos prácticos y guías para
                    alumnos.</li>
                <li class="list-group-item"> <i class='bx bx-time-five'></i> <b>Biblioteca/TIC</b><br>Altas, bajas y
                    modificaciones en la base datos de libros y recursos para el aula (mapas, afiches, reglas, etc) para
                    la bibliotecaria. <br> Módulo de búsqueda y consulta de libros y recursos varios para alumnos y
                    docentes. <br> Módulo de reserva y préstamo de recursos para docentes (ej: TV, carros, cañon, etc.)
                </li>
                <li class="list-group-item"> <i class='bx bx-time-five'></i> <b>Laboratorio</b><br>Altas, bajas y
                    modificaciones de material para la Oficina de Laboratorio. <br> Sección de búsqueda y consulta de
                    material de laboratorio y
                    recursos (balanzas, centrífugas, etc) </li>
                <li class="list-group-item"> <i class='bx bx-check'></i> <b>Taller</b><br>Cartelera informativa
                    (grupos, horarios, rotación de secciones, etc). Carga de inasistencias.</li>
            </ul>
        </div>
    </section>
</main>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>