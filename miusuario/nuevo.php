<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/usuarios.php");
require_once (ROOT_DIR . "_includes/header.php");
?>
<style>
    footer {
        padding-left: 0;
    }
</style>

<body>
    <main class="container">
        <header>
            <div class="text-center pt-5">
                <h4>Alta de usuario</h4>
            </div>
        </header>
        <section class="px-5">
            <div class="card shadow p-3">
                <form action="altaok.php" method="post" enctype="multipart/form-data" class="">
                    <div class="row justify-content-center text-center">
                        <?php if (isset ($_GET['error']) == 1) { ?>
                            <div class="col-8 mb-3 ">
                                <div class="alert alert-danger">Este email ya se encuentra en uso.</div>
                            </div>
                        <?php } ?>
                        <div class="col-xxl-6 xol-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                            <label for="rol" class="form-label">Rol</label>
                            <div id="rolHelp" class="text-muted small">¿Sos Docente o Alumno?</div>
                            <select class="form-select" name="rol" id="rol" required>
                                <option value="alumno">Alumno</option>
                                <option value="docente">Docente</option>
                            </select>
                        </div>
                        <div class="col-xxl-6 xol-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div id="emailHelp" class="text-muted small">Este será tu nombre de usuario para
                                iniciar
                                sesión</div>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="col-xxl-6 xol-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre"
                                required>
                        </div>
                        <div class="col-xxl-6 xol-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="row justify-content-center text-center align-items-end mt-4">
                            <hr>
                            <p>Contraseña</p>
                            <p class="text-muted small">(Sólo se permiten números y letras)</p>
                            <div class="col-xxl-6 xol-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                                <input type="password" class="form-control" id="pass1" name="pass1"
                                    aria-describedby="pass1Help" placeholder="Ingrese su contraseña"   oninput="validarInput(this)" required>
                            </div>
                            <div class="col-xxl-6 xol-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-3">
                                <input type="password" class="form-control" id="pass2" name="pass2"
                                    aria-describedby="pass2Help" placeholder="Repita su contraseña"   oninput="validarInput(this)" required>
                            </div>
                        </div>
                        <div id="resultadoOk" class="text-success"></div>
                        <div id="resultadoNo" class="text-danger"></div>
                        <div class="row p-3">
                            <div class="col text-center"><button class="btn btn-success w-50" type="submit"
                                    id="btnCrear" name="btnCrear" disabled>Crear usuario</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <div class="row m-3 text-center">
            <div class="col">
                <a type="button" href="./" class="btn btn-success">Volver al Login</a>
            </div>
        </div>
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
<script>
    function validarInput(input) {        
        input.value = input.value.replace(/[^a-zA-Z0-9]/g, '');
    }
</script>
    <?php require_once (ROOT_DIR . '_includes/footer.php') ?>