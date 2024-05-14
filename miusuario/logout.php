<?PHP
session_start();
session_destroy();
define('ROOT_DIR', '../');
$_SESSION['user_id'] = "";
$_SESSION['user-email'] = "";
$_SESSION['user-nombre'] = "";
$_SESSION['user-apellido'] = "";
$_SESSION['user-rango'] = "";
$_SESSION['user-rol'] = "";
require_once(ROOT_DIR . "_includes/header.php");
?>
<style>
    footer {
        padding-left: 0;
    }
</style>
<body>
    <main class="container">
        <section class="pt-5">
            <div class="container py-2 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow p-3 mb-3 bg-body rounded text-center">
                            <div>
                                edugestion CET5
                            </div>
                            <div class="card-body"><br>
                                <h3 class="is-full-width"><b>SESION CERRADA CORRECTAMENTE</b></h3><br>
                                <div>
                                    <form method="get" action="./">
                                        <button class="btn btn-success cerrar-sesion is-full-width" type="submit">VOLVER
                                            AL
                                            LOGIN</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once(ROOT_DIR . '_includes/footer.php') ?>