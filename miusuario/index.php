<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_includes/db.php");
require_once (ROOT_DIR . "_includes/header.php");
?>
<style>
    footer {
        padding-left: 0;
    }
</style>

<body>
    <main class="container">
        <section class="gradient-form">
            <div class="container pt-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-3 mx-md-3 text-center">
                                        <div class="text-center fw-bold">
                                            <span class="text-dark fs-1 px-2">CET</span><span
                                                class="text-success fs-1">5</span>
                                            <p>TÉCNICOS QUÍMICOS</p>
                                        </div>
                                        <form method="post" action="session.php">
                                            <div class="py-3">
                                                <h4 class="text-secondary">Ingresá a tu cuenta</h4>
                                            </div>
                                            <div class="form-outline py-2">
                                                <input type="email" id="email" name="email" class="form-control"
                                                    placeholder="email" />
                                            </div>
                                            <div class="form-outline py-2">
                                                <input type="password" id="password" name="password"
                                                    class="form-control" placeholder="contraseña" />
                                            </div>
                                            <?php if (isset ($_GET['error']) == 1) { ?>
                                                <div class="text-center pt-2 pb-2 text-danger">Error en email o contraseña
                                                </div>
                                            <?php } ?>
                                            <div class="text-center pt-3">
                                                <button type="submit"
                                                    class="btn btn-success rounded w-50 py-2">INGRESAR</button>
                                            </div>
                                            <div class="text-center pt-2">
                                                <span class="text-muted small pt-3 text-decoration-none">Si olvidaste tu
                                                    contraseña comunicate con algún Ref TIC</span>
                                            </div>
                                            <hr>
                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <p class="mb-0 me-2 fs-6">¿No tenés cuenta?</p>
                                                <a type="button" class="btn btn-outline-danger" href="nuevo.php">Crear
                                                    una
                                                    nueva
                                                    cuenta</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 bg-success" id="banner-login">
                                    <div
                                        class="row d-flex justify-content-center align-items-center h-100 text-white fs-3 text-center px-5">
                                        Sistema de Comunicación<br>y Gestión de Recursos Escolares<br>del CET N°5
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once (ROOT_DIR . '_includes/footer.php') ?>