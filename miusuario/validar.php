<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/usuarios.php");
require_once (ROOT_DIR . "_includes/header.php");
?>

<body class="d-flex flex-column min-vh-100">
    <?php require_once (ROOT_DIR . "_includes/sidebar.php"); ?>
    <main>
        <header>
            <div class="text-center pt-5">
                <h4>Validar mi Usuario</h4>
                <hr>
            </div>
        </header>
        <section>
            <form action="altaok.php" method="post" enctype="multipart/form-data" class="">
                <div class="row align-items-center text-center px-5 justify-content-center">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <?php if (isset ($_GET['error']) == 1) { ?>
                                <div class="col-8 mb-3 ">
                                    <div class="alert alert-danger">Este email ya se encuentra en uso.</div>
                                </div>
                            <?php } ?>
                            <div class="col-8 mb-3">
                                <label for="cuil" class="form-label">CUIL</label>
                                <div id="cuilHelp" class="text-muted small">Este será su nombre de usuario para iniciar
                                    sesión</div>
                                <input type="text" class="form-control" id="cuil" name="cuil"
                                    aria-describedby="cuilHelp" required>
                            </div>
                            <div class="col-8 mb-3">
                                <label for="fechanac" class="form-label">Fecha de Nacimiento</label>
                                <input type="text" class="form-control" id="fechanac" name="fechanac"
                                    aria-describedby="fechanac" required>
                            </div>
                            <div class="col-8 mb-3">
                                <label for="localidad" class="form-label">Localidad</label>
                                <input type="text" class="form-control" id="localidad" name="localidad"
                                    aria-describedby="localidadHelp" required>
                            </div>
                            <div class="col-8 my-3">
                                <label for="pass1" class="form-label">Provincia</label>
                                <div id="provinciaHelp" class="text-muted small">La contraseña no debe contener espacios
                                    ni
                                    acentos</div>
                                <input type="text" class="form-control" id="provincia" name="provincia"
                                    aria-describedby="provinciaHelp" placeholder="Ingrese su contraseña" required>
                            </div>
                            <div class="col-8 mb-3">
                                <input type="password" class="form-control" id="pass2" name="pass2"
                                    aria-describedby="pass2Help" placeholder="Repita su contraseña" required>
                            </div>
                            <div id="resultadoOk" class="text-success"></div>
                            <div id="resultadoNo" class="text-danger"></div>
                            <div class="row p-3">
                                <div class="col text-center"><button class="btn btn-success w-50" type="submit"
                                        id="btnCrear" name="btnCrear" disabled>Crear usuario</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
    <script>
        // Obtener el segundo input
        var input2 = document.getElementById("pass2");

        // Adjuntar evento de escucha solo al segundo input
        input2.addEventListener("input", comprobarIgualdad);

        function comprobarIgualdad() {
            // Obtener el valor de los inputs
            var valorInput1 = document.getElementById("pass1").value;
            var valorInput2 = input2.value;
            var boton = document.getElementById("btnCrear");

            // Comprobar si los valores son iguales
            if (valorInput1 === valorInput2) {
                document.getElementById("resultadoNo").innerText = "";
                document.getElementById("resultadoOk").innerText = "Las contraseñas coinciden :)";
                boton.disabled = false;
            } else {
                document.getElementById("resultadoOk").innerText = "";
                document.getElementById("resultadoNo").innerText = "Las contraseñas no coinciden";
                boton.disabled = true;
            }
        }
    </script>
</body>

<?php require_once (ROOT_DIR . '_includes/footer.php') ?>