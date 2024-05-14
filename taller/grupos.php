<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
?>
<main label="grupos">
    <header>
        <i class='bx bx-wrench'></i> Taller
    </header>
    <section>
        <header>
            <div class="text-center">
                <h3>Grupos y Horarios</h3>
                <section class="container">
                    <div class="card shadow p-3 mb-5">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12"><a type="button" class="btn btn-warning w-100 py-3 my-3"
                                    href="primeroprimeratm.php">
                                    <h4 class="fw-semibold">1ro 1ra</h4 class="fw-semibold">
                                    <h5>Turno Mañana</h5>
                                </a></div>
                            <div class="col-xl-4 col-lg-6 col-12"><a type="button" class="btn btn-warning w-100 py-3 my-3"
                                    href="primeroprimeratt.php">
                                    <h4 class="fw-semibold">1ro 1ra</h4 class="fw-semibold">
                                    <h5>Turno Tarde</h5>
                                </a></div>
                            <div class="col-xl-4 col-lg-6 col-12"><a type="button" class="btn btn-warning w-100 py-3 my-3"
                                    href="primerosegundatm.php">
                                    <h4 class="fw-semibold">1ro 2da</h4 class="fw-semibold">
                                    <h5>Turno Mañana</h5>
                                </a></div>
                            <div class="col-xl-4 col-lg-6 col-12"><a type="button" class="btn btn-warning w-100 py-3 my-3"
                                    href="primerosegundatt.php">
                                    <h4 class="fw-semibold">1ro 2da</h4 class="fw-semibold">
                                    <h5>Turno Tarde</h5>
                                </a></div>
                            <div class="col-xl-4 col-lg-6 col-12"><a type="button" class="btn btn-info w-100 py-3 my-3"
                                    href="segundoprimeratm.php">
                                    <h4 class="fw-semibold">2do 1ra</h4 class="fw-semibold">
                                    <h5>Turno Mañana</h5>
                                </a></div>
                            <div class="col-xl-4 col-lg-6 col-12"><a type="button" class="btn btn-info w-100 py-3 my-3"
                                    href="segundoprimeratt.php">
                                    <h4 class="fw-semibold">2do 1ra</h4 class="fw-semibold">
                                    <h5>Turno Tarde</h5>
                                </a></div>
                            <div class="col-xl-4 col-lg-6 col-12"><a type="button" class="btn btn-info w-100 py-3 my-3"
                                    href="segundosegundatm.php">
                                    <h4 class="fw-semibold">2do 2da</h4 class="fw-semibold">
                                    <h5>Turno Mañana</h5>
                                </a></div>
                            <div class="col-xl-4 col-lg-6 col-12"><a type="button" class="btn btn-info w-100 py-3 my-3"
                                    href="segundosegundatt.php">
                                    <h4 class="fw-semibold">2do 2da y 2do 3ra</h4 class="fw-semibold">
                                    <h5>Turno Tarde</h5>
                                </a></div>                           
                        </div>
                    </div>
                </section>
            </div>
        </header>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>