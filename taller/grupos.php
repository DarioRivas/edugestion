<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
?>
<main label="grupos">
    <header>
        <i class='bx bx-wrench'></i> Taller
    </header>
    <section class="container">
        <div class="card shadow mb-5">
            <div class="card-body">
                <p class="fw-semibold">HORARIOS</p>
                <div class="row text-center">
                    <div class="col fs-5"><i class='bx bx-time-five me-2'></i>Turno Mañana de 8:00 a 11:12hs</div>
                    <div class="col fs-5"><i class='bx bx-time-five me-2'></i>Turno Tarde de 13:30 a 17:12hs</div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <p class="fw-semibold">GRUPOS - ASISTENCIA</p>
                        <div class="row text-center align-items-center">
                            <div class="col-lg-4 col-12"><i class='bx bx-user-check bx-lg'></i></div>
                            <div class="col-lg-8 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-12 my-2">
                                        <h5 class="text-info fw-semibold">1ro 1ra TM</h5>
                                    </div>
                                    <div class="col-lg-6 col-12 my-2">
                                        <h5 class="text-warning fw-semibold">1ro 1ra TT</h5>
                                    </div>
                                    <div class="col-lg-6 col-12 my-2">
                                        <h5 class="text-info fw-semibold">2do 1ra TM</h5>
                                    </div>
                                    <div class="col-lg-6 col-12 my-2">
                                        <h5 class="text-warning fw-semibold">2do 1ra TT</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-0"> <a class="btn btn-success w-100 py-3" href="https://docs.google.com/spreadsheets/d/1Lwq7YOWpIzi9p2m_hhHEcW8yZSEIOwVmlAt7K4pGQYA/edit?usp=drive_link" target="_blank">Ver Asistencia</a></div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <p class="fw-semibold">GRUPOS - ASISTENCIA</p>
                        <div class="row text-center align-items-center">
                            <div class="col-lg-4 col-12"><i class='bx bx-user-check bx-lg'></i></div>
                            <div class="col-lg-8 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-12 my-2">
                                        <h5 class="text-info fw-semibold">1ro 2da TM</h5>
                                    </div>
                                    <div class="col-lg-6 col-12 my-2">
                                        <h5 class="text-warning fw-semibold">1ro 2da TT</h5>
                                    </div>
                                    <div class="col-lg-6 col-12 my-2">
                                        <h5 class="text-info fw-semibold">2do 2da TM</h5>
                                    </div>
                                    <div class="col-lg-6 col-12 my-2">
                                        <h5 class="text-warning fw-semibold">2do 2da TT</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-0"> <a class="btn btn-success w-100 py-3" href="https://docs.google.com/spreadsheets/d/1hhXlEbbQ7Ft6DVf1K-fRrnpReh2jibO7CN-3VqpzuLc/edit?usp=drive_link" target="_blank">Ver Asistencia</a></div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>