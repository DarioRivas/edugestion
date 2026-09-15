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
                        <li class="nav-item px-2"><a class="nav-link active" href="index.php">INICIO</a></li>
                        <li class="nav-item px-2"><a class="nav-link" href="institucional.php">INSTITUCIONAL</a></li>
                        <li class="nav-item px-2"><a class="nav-link" href="#contactenos">CONTACTENOS</a></li>
                        <li class="nav-item px-2"><a class="nav-link" href="propuesta.php">PROPUESTA EDUCATIVA</a></li>
                        <li class="nav-item px-3  bg-dark"><a class="nav-link  text-white" href="./miusuario/index.php">PLATAFORMA ESCOLAR</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header-->
        <section class="bg-light bg-gradient">
            <div class=" px-xl-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-5 col-xxl-6">
                        <div class="my-5 text-center">
                            <div class="d-block d-md-none">
                                <img class="img-fluid p-3 my-5" src="<?= ROOT_DIR ?>imagenes/index/logo_main.png" alt="..." />
                            </div>
                            <!-- <h2 class="fw-bold mb-2">Centro de Eduación Técnica N°5</h2> -->
                            <h1 class="fw-bold mb-2 ">CENTRO DE EDUCACIÓN <br> TÉCNICA N°5</h1>
                            <h3 class="fw-semibold mb-2 fst-italic text-success ">Jaime Felipe Morant</h3><br>
                            <p>ex Industrial N°1 Dr. Armando Novelli</p>
                        </div>
                        <div class="my-5 text-center">
                            <p class="lead fw-normal text mb-2 fst-italic fs-5">formando Técnicos Químicos desde 1966</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-xxl-6 d-none d-md-block text-end">
                        <div id="slideshow">
                            <div class="slide-wrapper">
                                <div class="slide">
                                    <img class="img-fluid p-3 my-5" src="<?= ROOT_DIR ?>imagenes/index/logo_main.png" alt="..." />
                                </div>
                                <div class="slide">
                                    <img class="img-fluid" src="<?= ROOT_DIR ?>imagenes/index/main4.png" alt="..." />
                                </div>
                                <div class="slide">
                                    <img class="img-fluid" src="<?= ROOT_DIR ?>imagenes/index/main3.png" alt="..." />
                                </div>
                                <div class="slide">
                                    <img class="img-fluid" src="<?= ROOT_DIR ?>imagenes/index/main1.png" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features section-->
        <div class="pb-5 appear2" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5 d-flex align-items-center">
                    <div class="col-xl-3 col-6 mt-5 fadeInUp-animation">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <p><i class='bx bx-book-open bx-lg text-info'></i></p>
                        <h3 class="fw-normal">CICLO BÁSICO</h3>
                        <p class="mb-0"> 2 años</p>
                    </div>
                    <div class="col-xl-3 col-6 mt-5">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <p><i class='bx bx-hard-hat bx-lg text-success'></i></p>
                        <h3 class="fw-normal">TALLERES</h3>
                        <p class="mb-0"> <i class='bx bx-plug'></i> <i class='bx bx-bulb'></i> <i class='bx bx-desktop'></i> <i class='bx bx-wrench'></i></p>
                    </div>
                    <div class="col-xl-3 col-6 mt-5">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <p><i class='bx bxs-vial bx-lg text-danger'></i></p>
                        <h3 class="fw-normal">CICLO SUPERIOR</h3>
                        <p class="mb-0">4 años</p>
                    </div>
                    <div class="col-xl-3 col-6 mt-5">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <p><i class='bx bx-briefcase-alt-2 bx-lg text-warning'></i></p>
                        <h3 class="fw-normal">PASANTÍAS</h3>
                        <p class="mb-0"> 216hs</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial section-->

        <div class="row g-0 d-flex align-items-center justify-content-center bg-light">
            <div class="col-xl-6 col-12">
                <img class="img-fluid" src="<?= ROOT_DIR ?>imagenes/index/inet.png" alt="..." />
            </div>
            <div class="col-xl-6 col-lg-12 ">
                <div class="text-center p-5 py-xl-0">
                    <p class="fs-4 fst-italic appear2">"La propuesta institucional y curricular de este nivel busca lograr una formación integral de los jóvenes, como estudiantes y ciudadanos, que requiere una estrecha vinculación con el mundo laboral y con el ejercicio responsable de su quehacer profesional futuro."</p>
                    <div class="mt-5">
                        <div class="fw-bold"> <i class='bx bxs-quote-right me-2'></i>
                            inet
                            <span class="fw-bold text-primary mx-1">/</span>
                            sobre la "Educación Técnica de Nivel Secundario"
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder">Actividades</h2>
                            <p class="lead fw-normal text-muted mb-5">Algunas actividades que realizan nuestros estudiantes</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 appear2">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0  ">
                            <img class="card-img-top" src="<?= ROOT_DIR ?>imagenes/index/taller.png" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Taller</h5>
                                </a>
                                <p class="card-text mb-0">Durante los dos años del ciclo básico se cursan materias prácticas de taller, como electricidad, soldadura, carpintería, etc.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="<?= ROOT_DIR ?>_assets/images/logo_round.png" style="max-height: 30px" />
                                        <div class="small">
                                            <div class="fw-bold">Taller CET5 | <span class="text-muted">2024</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0  ">
                            <img class="card-img-top" src="<?= ROOT_DIR ?>imagenes/index/labo1.png" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Laboratorio</h5>
                                </a>
                                <p class="card-text mb-0">En el ciclo superior se realizan prácticas en los laboratorios del colegio.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="<?= ROOT_DIR ?>_assets/images/logo_round.png" style="max-height: 30px" />
                                        <div class="small">
                                            <div class="fw-bold">Laboratorios CET5 | <span class="text-muted">2024</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0  ">
                            <img class="card-img-top" src="<?= ROOT_DIR ?>imagenes/index/pasantias.png" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Pasantías</h5>
                                </a>
                                <p class="card-text mb-0">En 4to año del ciclo superior (ex 6to) nuestros estudiantes realizan pasantías no rentadas.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="<?= ROOT_DIR ?>_assets/images/logo_round.png" style="max-height: 30px" />
                                        <div class="small">
                                            <div class="fw-bold">UNCo | <span class="text-muted">Agosto 2024</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 appear2">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0  ">
                            <img class="card-img-top" src="<?= ROOT_DIR ?>imagenes/index/labo3.png" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Laboratorio</h5>
                                </a>
                                <p class="card-text mb-0">Prácticas en laboratorio</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="<?= ROOT_DIR ?>_assets/images/logo_round.png" style="max-height: 30px" />
                                        <div class="small">
                                            <div class="fw-bold">Laboratorios CET5 | <span class="text-muted">2024</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0  ">
                            <img class="card-img-top" src="<?= ROOT_DIR ?>imagenes/index/expo.png" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Expo Vocacional</h5>
                                </a>
                                <p class="card-text mb-0">Asistencia a la expo vocacional NQN 2024</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="<?= ROOT_DIR ?>_assets/images/logo_round.png" style="max-height: 30px" />
                                        <div class="small">
                                            <div class="fw-bold">Nqn Capital | <span class="text-muted">2024</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0  ">
                            <img class="card-img-top" src="<?= ROOT_DIR ?>imagenes/labo2.png" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Prácticas Profesionalizantes</h5>
                                </a>
                                <p class="card-text mb-0">Proyecto de realización de sidra de manzana por alumnos de 3er año CS</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="<?= ROOT_DIR ?>_assets/images/logo_round.png" style="max-height: 30px" />
                                        <div class="small">
                                            <div class="fw-bold">Laboratorios CET5 | <span class="text-muted">Agosto 2024</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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