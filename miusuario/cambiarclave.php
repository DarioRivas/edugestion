<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/usuarios.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$conexion = conectar();
$userId = $_SESSION['user-id'];
$userRango = $_SESSION['user-rango'];
$ok = 3;
if (isset ($_POST['actualizar'])) {
    $passold = hash('sha256', $_POST['passold']);
    $queryU = "SELECT id FROM usuarios WHERE id = '$userId' AND clave = '$passold';";
    $validado = mysqli_query($conexion, $queryU);
    if (mysqli_num_rows($validado) != 0) {
        $passnew = hash('sha256', $_POST['pass1']);
        $queryP = "UPDATE usuarios SET clave = '$passnew' WHERE id = '$userId';";
        mysqli_query($conexion, $queryP);
        $ok = 1;
    } else {
        $ok = 0;
    }
}
?>

<main label="cambiarclave">
    <header>
        <i class='bx bx-user-circle'></i>
        Mi usuario
    </header>
    <section>
        <header>
            <div class="text-center mb-3">
                <h3>
                    Cambiar mi contraseña de usuario
                </h3>
            </div>
        </header>
    </section>
    <section class="px-5">
        <div class="card container shadow">
            <form action="cambiarclave.php" method="post" enctype="multipart/form-data" class="">
                <div class="row align-items-center text-center px-5 justify-content-center">
                    <div class="col-xl-6 col-12 mt-5">
                        Contraseña anterior
                        <input type="password" class="form-control" id="passold" name="passold"
                            aria-describedby="passoldHelp" required oninput="validarInput(this)">
                    </div>
                    <?php if($ok == 0){ ?>
                        <div class="alert alert-danger mt-3">La contraseña ingresada es incorrecta</div>
                    <?php } ?>
                    <div id="passHelp" class="text-muted small pt-5">(Sólo se permiten números y letras)</div>
                    <div class="col-xl-6 col-12 my-3">
                        Nueva contraseña
                        <input type="password" class="form-control" id="pass1" name="pass1" aria-describedby="pass1Help"
                            required oninput="validarInput(this)">
                    </div>
                    <div class="col-xl-6 col-12 mb-3 my-3">
                        Repita su nueva contraseña
                        <input type="password" class="form-control" id="pass2" name="pass2" aria-describedby="pass2Help"
                            required oninput="validarInput(this)">
                    </div>
                    <div id="resultadoOk" class="text-success"></div>
                    <div id="resultadoNo" class="text-danger"></div>
                    <div class="row p-3">
                        <div class="col text-center"><button class="btn btn-success" type="submit" id="btnCrear"
                                name="actualizar" disabled>Cambiar mi clave</button>
                        </div>
                    </div>
                    <?php if($ok == 1){ ?>
                        <div class="alert alert-success">La contraseña se actualizó correctamente</div>
                    <?php } ?>
                </div>
            </form>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
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