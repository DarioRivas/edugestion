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
    <!-- Bootstrap icons-->
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
                        <li class="nav-item px-2"><a class="nav-link active" href="institucional.php">INSTITUCIONAL</a></li>
                        <li class="nav-item px-2"><a class="nav-link" href="#contactenos">CONTACTENOS</a></li>
                        <li class="nav-item px-2"><a class="nav-link" href="propuesta.php">PROPUESTA EDUCATIVA</a></li>
                        <li class="nav-item px-3  bg-dark"><a class="nav-link  text-white" href="./miusuario/index.php">PLATAFORMA ESCOLAR</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Features section-->
        <section class="py-4" id="features">
            <h2 class="fw-bolder my-5">INSTITUCIONAL</h2>
            <img class="img-fluid bg-success rounded-pill p-3 mb-5" style="max-height: 200px" src="<?= ROOT_DIR ?>_assets/images/logo350.png" alt="..." />
            <div class="container px-5 my-3  text-start">
                <p class="fs-6 mb-3 justify">
                    El actual CET N°5 Jaime Felipe Morant, fue creado en el año 1966 bajo el nombre Industrial
                    N°1 Dr. Armando Novelli, con la misión de formar técnicos con
                    especialidad en el área de química, ya que, tanto en nuestra localidad como zonas
                    vecinas, el sector socio productivo está integrado por una variedad de industrias,
                    tales como petroquímicas, alimenticias, mineras y vitivinícolas entre otras
                    instituciones de investigación y desarrollo en ciencia y tecnología, tales como INTA y
                    el INTI. Ante tan amplio campo laboral, este justifica, la necesidad de formar
                    Técnicos Químicos. </p>
                <p class="fs-6 mb-3 justify">
                    Dicha misión, implica una sólida formación que se provee a través de los campos de
                    Formación Ética, Ciudadana y Humanística General; la formación científico-tecnológica
                    y la formación técnica específica. Esta formación académica, les permite
                    a los estudiantes adquirir habilidades y saberes tanto para un buen
                    desenvolvimiento en lo laboral como para la prosecución de estudios superiores.</p>
                <p class="fs-6 mb-3 justify">
                    El edificio escolar consta de dos cuerpos. El cuerpo principal contiene, el sector
                    administrativo; biblioteca; cocina; sala de jefatura de Trabajos Prácticos, Aula de
                    informática; cuatro laboratorios; dos drogueros y dos aulas en el sector de
                    laboratorios TP del Ciclo Superior y 12 aulas.</p>
                <p class="fs-6 mb-3 justify"> El segundo cuerpo está destinado al
                    taller de formación técnica especifica en el Ciclo Básico. Este se encuentra dividido
                    en ocho secciones.
                    Primer año: electricidad, hojalatería, carpintería y ajuste. En 2do
                    año: ajuste mecanizado y composición de materiales, electricidad, soldadura y ajuste.</p>
            </div>
        </section>
        <section class="p-5 bg-light">
            <h2>Equipo Directivo</h2>
            <div class="row px-5 mt-5">
                <div class="col-lg-3 mb-3 appear2">
                    <h5 class="fw-normal">Prof. Ramón Suarez</h5>
                    <h6>Director</h6>
                </div>
                <div class="col-lg-3 mb-3 appear2">
                    <h5 class="fw-normal"> Prof. Emiliano Giuliotti</h5>
                    <h6>Jefe Gral. de Enseñanzas Prácticas</h6>
                </div>
                <div class="col-lg-3 mb-3 appear2">
                    <h5 class="fw-normal"> Prof. Patricia Berti</h5>
                    <h6>Vicedirector Turno Mañana</h6>
                </div>
                <div class="col-lg-3 mb-3 appear2">
                    <h5 class="fw-normal"> Prof. Marcela Cancelo </h5>
                    <h6>Vicedirectora Turno Tarde</h6>
                </div>
            </div>
            <h2>Jefaturas</h2>
            <div class="row px-5 my-3">
                <div class="col mb-3 appear2">
                    <h5 class="fw-normal">Prof. Belen Lucero</h5>
                    <h6>Jefa de Laboratorio TM</h6>
                </div>
                <div class="col mb-3 appear2">
                    <h5 class="fw-normal">Ing. Victor Landeros</h5>
                    <h6>Jefe de Laboratorio TT</h6>
                </div>
                <div class="col mb-3 appear2">
                    <h5 class="fw-normal">Prof. Evelin Salazar</h5>
                    <h6>Jefa de Sección TM</h6>
                </div>
                <div class="col mb-3 appear2">
                    <h5 class="fw-normal">Prof. Claudio Martín</h5>
                    <h6>Jefe de Sección TT</h6>
                </div>
                <div class="col mb-3 appear2">
                    <h5 class="fw-normal">Merlina Trabatto</h5>
                    <h6>Jefa de Preceptores</h6>
                </div>
            </div>
            <h2>Secretaría</h2>
            <div class="row px-5 my-3">
                <div class="col mb-3 appear2">
                    <h5 class="fw-normal">Prof. Bartoloni María Cecilia</h5>
                    <h6>Secretaria</h6>
                </div>
                <div class="col mb-3 appear2">
                    <h5 class="fw-normal">Prof. Pallone Carla</h5>
                    <h6>ProSecretario TM</h6>
                </div>
                <div class="col mb-3 appear2">
                    <h5 class="fw-normal">Prof. Selva Jorge</h5>
                    <h6>ProSecretario TT</h6>
                </div>
            </div>
            <h2>Coordinadoras</h2>
            <div class="row px-5 my-3">
                <div class="col mb-3 appear2">
                    <h5 class="fw-normal">Prof. Gomez Sbrolla Nadia</h5>
                    <h6>Coord. de Prácticas Profesionalizantes TM</h6>
                </div>
                <div class="col mb-3 appear2">
                    <h5 class="fw-normal">Macarena Ockier</h5>
                    <h6>Coord. de Prácticas Profesionalizantes TT</h6>
                </div>
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
</body>

</html>