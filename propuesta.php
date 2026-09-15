<?php
define('ROOT_DIR', "")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CET 5 Técnicos Químicos</title>
    <link rel="icon" type="image/x-icon" href="<?= ROOT_DIR ?>_assets/images/icon.png">
    <link rel="stylesheet" href="<?= ROOT_DIR ?>_assets/css/bootstrap.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="<?= ROOT_DIR ?>_assets/css/main.scss" rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3GW91DB7CE"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-3GW91DB7CE');
</script>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0 text-center">
        <div class="p-3 bg-dark">
            <img src="<?= ROOT_DIR ?>_assets/images/logofinal.jpg" style="max-width:300px" alt="">
        </div>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success py-0">
            <div class="container px-5 fw-normal my-0 py-0 ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse  my-0 py-0 " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-auto mb-lg-0">
                        <li class="nav-item px-2"><a class="nav-link" href="index.php">INICIO</a></li>
                        <li class="nav-item px-2"><a class="nav-link" href="institucional.php">INSTITUCIONAL</a></li>
                        <li class="nav-item px-2"><a class="nav-link" href="#contactenos">CONTACTENOS</a></li>
                        <li class="nav-item px-2"><a class="nav-link active" href="propuesta.php">PROPUESTA EDUCATIVA</a></li>
                        <li class="nav-item px-3  bg-dark"><a class="nav-link  text-white" href="./miusuario/index.php">PLATAFORMA ESCOLAR</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Features section-->
        <section>
            <div class="row d-flex ">
                <div class="col">
                    <div class=" mt-lg-4 mt-xl-5 mt-5 px-lg-4 px-xl-5 px-5 text-start">
                        <h2 class="fw-bolder ps-xl-5 text-center mb-3">PROPUESTA EDUCATIVA</h2>
                        <p class="ps-xl-4  justify">
                            En el área de la QUIMICA, nuestra provincia y las vecinas cuentan con: Un sector socio productivo integrado
                            por gran una gran variedad de industrias, tales como petroquímicas, alimenticias, mineras, entre otras Instituciones de
                            investigación y desarrollo en ciencia y tecnología, tales como INTA, INTI entre otras. Planta piloto de la Universidad
                            Nacional del Comahue Laboratorios de análisis químico de Instituciones de la Salud públicos y privados. Instituciones
                            Públicas en las áreas de control bromatológico de alimentos (Municipios). Empresas de servicios tercerizadas, los
                            emprendimientos generados por el mismo técnico o bien integrar equipos de profesionales.
                        </p>
                        <p class="ps-xl-4  justify">
                            Ante tan amplio campo laboral justifica la necesidad de formar Técnicos Químicos, capaces de
                            desempeñarse con solvencia en los distintos ámbitos de trabajo mencionados. Su formación académica será
                            tal, que le permita adquirir habilidades y saberes que garanticen un buen desenvolvimiento en:
                        </p>
                        <p class="ps-xl-4">
                        <ul class="text-start ps-xl-5">
                            <li class="justify"> Empresas de distintos tamaños con tecnología de punta, intermedia o elemental .</li>
                            <li class="justify"> Laboratorios de análisis químicos, fisicoquímicos y microbiológicos asumiendo responsabilidades en la
                                realización e interpretación: de ensayos y análisis de materias primas, insumos, materiales de proceso, productos,
                                emisiones, efluentes y medio ambiente, así como en la implementación de sistemas de aseguramiento de la calidad y de las adecuadas condiciones de trabajo de acuerdo a normas.</li>
                            <li class="justify"> En departamentos de abastecimiento, cumpliendo un importante rol tanto en la selección y compra como
                                en el asesoramiento técnico y venta de insumos, materias primas, productos, equipamiento e
                                instrumental de laboratorio específico.</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="col-auto col-lg-5 col-xl-3">
                    <div class="slideshow-container">
                        <div class="slide2 fade">
                            <img class="img-fluid" src="<?= ROOT_DIR ?>imagenes/propuesta/1.png" alt="..." />
                        </div>
                        <div class="slide2 fade">
                            <img class="img-fluid" src="<?= ROOT_DIR ?>imagenes/propuesta/2.png" alt="..." />
                        </div>
                        <div class="slide2 fade">
                            <img class="img-fluid" src="<?= ROOT_DIR ?>imagenes/propuesta/3.png" alt="..." />
                        </div>
                        <div class="slide2 fade">
                            <img class="img-fluid" src="<?= ROOT_DIR ?>imagenes/propuesta/4.png" alt="..." />
                        </div>
                    </div>
                </div>
                <div class="col-12 bg-light">
                    <div class="container my-5 px-5 text-center">
                        <h2 class="fw-bolder mt-4  mb-3">PERFIL DEL TÉCNICO QUÍMICO</h2>
                        <p class=" justify">El Técnico del sector químico está capacitado para manifestar conocimientos, habilidades, destrezas,
                            valores y actitudes en situaciones reales de trabajo, conforme a criterios de profesionalidad propios de su
                            área y de responsabilidad social al:</p>
                        <ul class="text-start">
                            <p class=" justify"><i class='bx bxl-react me-3'></i>“Evaluar las demandas de los análisis planteados, interpretar adecuadamente el tipo de requerimiento y
                                planificar las acciones correspondientes que permitan su resolución”</p>
                            <p class=" justify"><i class='bx bxl-react me-3'></i>“Elaborar los cursos de acción adecuados para encarar la ejecución de las tareas planificadas .”</p>
                            <p class=" justify"><i class='bx bxl-react me-3'></i>“Gestionar y administrar el funcionamiento del ámbito de trabajo, las relaciones interpersonales y la
                                provisión de los recursos”</p>
                            <p class=" justify"><i class='bx bxl-react me-3'></i>“Realizar análisis de ensayos e interpretar sus resultados”</p>
                            <p class=" justify"><i class='bx bxl-react me-3'></i>“Supervisar la ejecución de ensayos y análisis y la adecuación de los procedimientos a normas de calidad,
                                seguridad y manejo adecuado de residuos.”</p>
                            <p class=" justify"><i class='bx bxl-react me-3'></i>“Generar y/o participar de emprendimientos vinculados con áreas de su profesionalidad” </p>
                            <p class=" justify"><i class='bx bxl-react me-3'></i>“Operar y plantear
                                mejoras en procesos químicos, físicos, fisicoquímicos y microbiológicos”</p>
                            <p class=" justify"><i class='bx bxl-react me-3'></i>Valorar el impacto social, económico y ambiental como resultado de su intervención en el ámbito laboral.</p>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-success py-5">
            <div class="container px-5">
                <div class="row">
                    <div class="col-xl-6 col-12 h-100 my-3">
                        <h3 class="fw-semibold">CICLO BÁSICO</h3>
                        <p class="mb-0">Duración del cursado: 2 años</p>
                        <p>Durante los dos primeros años del cursado, los estudiantes transitan materias que son comunes para todas las modalidades de los colegios secundarios de la provincia (ESRN y Técnicas). Y además cursan dos materías específicas de escuelas técnicas: Dibujo Técnico y Taller. Esta última, a su vez está dividida en secciones.</p>
                    </div>
                    <div class="col-xl-6 col-12 h-100 my-3">
                        <h3 class="fw-normal">TALLER</h3>
                        <p class="mb-0">Durante el ciclo básico se cursan diversas secciones que se nuclean en una materia llamada Taller.</p>
                        <p class="mb-0">Estos talleres son una oportunidad para que los estudiantes amplíen sus conocimientos y desarrollen habilidades relevantes para el mundo laboral.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-4" id="features">
            <div class="container px-5">
                <h2 class="mt-5">Estructura curricular del Ciclo Básico</h2>
                <div class="row text-start">
                    <div class="col-xl-3 col-12 h-100 mt-5">
                        <div class="card shadow p-3 appear2">
                            <h4 class="text-center mb-4">1er Año</h4>
                            <ul>
                                <li>Lengua</li>
                                <li>Biología</li>
                                <li>Matemática</li>
                                <li> Dibujo Técnico</li>
                                <li>Geografía</li>
                                <li> Educación para la Ciudadanía</li>
                                <li>Físico Química</li>
                                <li>Inglés</li>
                                <li>Historia</li>
                                <li>Educación Artística</li>
                                <li>Educación Física*</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12 h-100 mt-5">
                        <div class="card shadow p-3 appear2">
                            <h4 class="text-center mb-4">Taller de 1er Año</h4>
                            <ul>
                                <li>Ajuste*</li>
                                <li>Hojalatería*</li>
                                <li>Electricidad*</li>
                                <li>Carpintería*</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12 h-100 mt-5">
                        <div class="card shadow p-3 appear2">
                            <h4 class="text-center mb-4">2do Año</h4>
                            <ul>
                                <li>Lengua</li>
                                <li>Biología</li>
                                <li>Matemática</li>
                                <li>Dibujo Técnico</li>
                                <li>Geografía</li>
                                <li>Educación para la Ciudadanía</li>
                                <li>Física</li>
                                <li>Inglés</li>
                                <li>Historia</li>
                                <li>Química</li>
                                <li>Educación Física*</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12 h-100 mt-5">
                        <div class="card shadow p-3 appear2">
                            <h4 class="text-center mb-4">Taller de 2do Año</h4>
                            <ul>
                                <li>Ajuste*</li>
                                <li>Ajuste Mecanizado*</li>
                                <li>Electricidad*</li>
                                <li>Herrería y Soldadura*</li>
                                <li>Informática*</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="fst-italic mt-5">* Estas materias se cursan en contraturno. </p>
            </div>
        </section>
        <section class="py-5  bg-success">
            <div class="container px-5">
                <div class="row">
                    <div class="col-xl-4 col-12 h-100 my-3">
                        <h3 class="fw-semibold">CICLO SUPERIOR</h3>
                        <p class="mb-0">Duración del cursado: 4 años</p>
                        <p class="mb-0">A partir del tercer año de cursado (primer año del ciclo superior) los estudiantes se adentran en las materias generales de una escuela técnica y algunas
                            materias específicas de la especialidad Química, las cuales son llevadas a cabo en el sector de laboratorios.</p>
                    </div>
                    <div class="col-xl-4 col-12 h-100 my-3">
                        <h3 class="fw-normal">PRÁCTICAS PROFESIONALIZANTES</h3>
                        <p class="mb-0">Las prácticas profesionalizantes aportan una formación que integra los conocimientos científicos y tecnológicos de base y relacionan los conocimientos con las habilidades, lo intelectual con lo instrumental y los saberes teóricos con los saberes de la acción.</p>
                    </div>
                    <div class="col-xl-4 col-12 h-100 my-3">
                        <h3 class="fw-normal">PASANTÍAS</h3>
                        <p class="mb-0">Las pasantías ocupan un lugar sustancial en el curriculum de la escuela técnica como estrategia de formación para los alumnos y como posibilidad de acercamiento al mundo del trabajo. Los estudiantes deben cumplir con las 216hs reloj de pasantias requeridas para el perfil de Técnico Químico.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-4 bg-light" id="features">
            <div class="container px-5">
                <h2 class="mt-5">Estructura curricular del Ciclo Superior</h2>
                <div class="row text-start">
                    <div class="col-xl-3 col-12 h-100 mt-5">
                        <div class="card shadow p-3 appear2">
                            <h4 class="text-center mb-4">1er Año CS</h4>
                            <ul>
                                <li>Lengua</li>
                                <li>Biología Aplicada</li>
                                <li>Matemática</li>
                                <li>Química II</li>
                                <li>Geografía</li>
                                <li>Educación para la Ciudadanía</li>
                                <li>Física</li>
                                <li>Inglés</li>
                                <li>Historia</li>
                                <li>Química General</li>
                                <li>Educación Física*</li>
                                <li>TP Física*</li>
                                <li>TP Química General*</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12 h-100 mt-5">
                        <div class="card shadow p-3 appear2">
                            <h4 class="text-center mb-4">2do Año CS</h4>
                            <ul>
                                <li>Literatura</li>
                                <li>Química Inorgánica</li>
                                <li>Análisis Matemático</li>
                                <li>Procesos Químicos</li>
                                <li>Educación para la Ciudadanía</li>
                                <li>Física Aplicada</li>
                                <li>Inglés Técnico</li>
                                <li>Química Orgánica I</li>
                                <li>Educación Física*</li>
                                <li>TP Física Aplicada*</li>
                                <li>TP Procesos Químicos*</li>
                                <li>TP Química Orgánica I*</li>
                                <li>TP Química Inorgánica I*</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12 h-100 mt-5">
                        <div class="card shadow p-3 appear2">
                            <h4 class="text-center mb-4">3er Año CS</h4>
                            <ul>
                                <li>Organización, Gestión y Producción</li>
                                <li>Comunicación Oral y Escrita</li>
                                <li>Química Analítica Cualitativa</li>
                                <li>Matemática Aplicada</li>
                                <li>Trabajo y Pensamiento Crítico</li>
                                <li>Inglés Técnico</li>
                                <li>Química Orgánica II</li>
                                <li>Química Industrial I</li>
                                <li>Educación Física*</li>
                                <li>TP Química Orgánica II*</li>
                                <li>TP Química Industrial I*</li>
                                <li>TP Química Analítica Cualitativa*</li>
                                <li>TP Microbiología y Bromatología*</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12 h-100 mt-5">
                        <div class="card shadow p-3 appear2">
                            <h4 class="text-center mb-4">4to Año CS</h4>
                            <ul>
                                <li>Química Industrial Aplicada</li>
                                <li>Química Industrial II</li>
                                <li>Inglés Técnico</li>
                                <li>Química Ambiental</li>
                                <li>Química Analítica Cuantitativa</li>
                                <li>Comunicación Oral y Escrita</li>
                                <li>Matemática Aplicada</li>
                                <li>Educación Física*</li>
                                <li>TP Química Industrial II*</li>
                                <li>TP Química Analítica Cuantitativa*</li>
                                <li>TP Química Industrial Aplicada*</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="fst-italic mt-5">* Estas materias se cursan en contraturno. </p>
            </div>
        </section>
        <section>
            <div class="p-0">
                <div class="row text-start text-center">
                    <div class="col-lg-5 col-12">
                        <img class="img-fluid" src="<?= ROOT_DIR ?>imagenes/propuesta/horario.png" alt="..." />
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="row mt-3 pe-lg-5">
                            <h2 class="text-success">Horarios de cursado</h2><br>
                            <p>Este colegio cuenta con una modalidad de
                                cursado de doble jornada. <br>
                                Existe una rotación de los
                                cursos a lo largo de toda la
                                carrera por diagramación
                                escolar.</p>
                            <div class="col-xl-6 col-12 bg-white h-100 py-4">
                                <div class="card  appear2">
                                    <div class="card-header">Turno Mañana</div>
                                    <div class="card-body">
                                        <h5>Lunes a Viernes<br>
                                            de 8:00 a
                                            13:00hs </h5>
                                        <p>Contraturno de
                                            14:00 a 17:30hs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12 bg-white h-100 py-4">
                                <div class="card  appear2">
                                    <div class="card-header">Turno Tarde</div>
                                    <div class="card-body">
                                        <h5>Lunes a Viernes <br>
                                            de 13:30 a
                                            18:30hs</h5>
                                        <p>Contraturno de
                                            8:00 a 11:30hs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 bg-light" id="features">
            <div class="container px-5 my-5">
            </div>
        </section>
    </main>
    <?php include_once('footer.php') ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const items = document.querySelectorAll('.appear2');

        const active = function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('inview2');
                } else {
                    entry.target.classList.remove('inview2');
                }
            });
        }
        const io2 = new IntersectionObserver(active);
        for (let i = 0; i < items.length; i++) {
            io2.observe(items[i]);
        }
    </script>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.getElementsByClassName("slide2");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 5000); // Cambia la imagen cada 5 segundos
        }
    </script>

</body>

</html>