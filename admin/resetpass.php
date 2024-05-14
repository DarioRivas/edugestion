<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
$idUser = $_GET['id'];
if (isset($_POST['resetpass'])) {
    $passnew = hash('sha256', '1234');
    $sql = "UPDATE usuarios SET clave = '$passnew' WHERE id = $idUser;";
    $conexion = conectar();
    mysqli_query($conexion, $sql);
    header("Location: admin_usuarios.php?ok=1");
    exit;
}
include (ROOT_DIR . "_functions/admin.php");
include (ROOT_DIR . "_functions/usuarios.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");

?>

<main label="usuariosadmin">
    <header>
        <i class='bx bx-bug'></i> Admin
    </header>
    <section class="container">
        <header>
            <div class="text-center">
                <h4>Pass reset</h4>
            </div>          
        </header>
    </section>
    <section class="container">
        <div class="card rounded shadow p-3 text-center bg-danger bg-opacity-25">
        <p>¿Esta seguro que desea resetear el password?</p>
        <form action="resetpass.php?id=<?= $idUser ?>" method="post">
            <button class="btn btn-danger mt-3" type="submit" name="resetpass">Reseter pass a 1234</button>
        </form>
        </div>        
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>