<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/admin.php");
include (ROOT_DIR . "_functions/usuarios.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");

$where = '';
$order = '';

if (isset($_POST['buscar']) && $_POST['txtBuscar'] != '') {
    $buscar = $_POST['txtBuscar'];
    $where = " WHERE (
        email LIKE '%$buscar%'
        OR nombre LIKE '%$buscar%'
        OR apellido LIKE '%$buscar%'
      ) ";

}

if (isset($_POST['sortId'])) {
    $where = " ORDER BY id ASC ";
}

if (isset($_POST['sortApellido'])) {
    $where = " ORDER BY apellido ASC ";
}

if (isset($_POST['soloalumnos'])) {
    $where = " WHERE rol = 'alumno' ";
}

if (isset($_POST['solodocentes'])) {
    $where = " WHERE rol = 'docente' ";
}


$usuariosA = get_UsuarioFiltrados($where);
$cantidad = mysqli_num_rows($usuariosA);
if(isset($_GET['ok'])){
    $ok = $_GET['ok'];
}else{
    $ok = 0;
}

?>

<main label="usuariosadmin">
    <header>
        <i class='bx bx-bug'></i> Admin
    </header>
    <section class="container">
        <header>
            <div class="text-center">
                <h4>usuarios del sistema</h4>
            </div>
            <?php if ($ok == 1) { ?>
                <div>
                    <div class="alert alert-success">Los datos se han actualizado correctamente</div>
                </div>
            <?php } ?>
        </header>
    </section>
    <section class="container">
        <div class="card p-3 small">
            <form action="admin_usuarios.php" method="post">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-12 mt-1">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <input class="form-control w-100 small" type="text" name="txtBuscar" id=""
                                    placeholder="Buscar...">
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-dark btn-sm w-100" name="buscar">Buscar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-5 mt-1">Ordenar por
                        <p><button class="btn btn-dark btn-sm me-1" type="submit" name="sortId"># id</button><button
                                class="btn btn-dark btn-sm" type="submit" name="sortApellido">Apellido</button></p>

                    </div>
                    <div class="col-xl-3 col-7 mt-1">Mostrar solo
                        <p> <button class="btn btn-success btn-sm mx-1" type="submit"
                                name="soloalumnos">Alumnos</button>
                            <button class="btn btn-danger btn-sm mx-1" type="submit"
                                name="solodocentes">Docentes</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="text-center">
        <p class="mt-4">mostrando <span class="fw-semibold text-danger"><?= $cantidad ?></span> resultados</p>
    </section>
    <section>
        <div class="card p-3 mt-4">
            <?php while ($usuario = mysqli_fetch_array($usuariosA)) { ?>
                <?php if ($usuario['rol'] != 'alumno') {
                    $text = ' bg-danger bg-opacity-25 ';
                } else {
                    $text = '';
                } ?>
                <div class="row small <?= $text ?> border-bottom p-2 align-items-center">
                    <div class="col-xl-1 col-12 justify-content-center text-center">
                        <img src="../miusuario/imagenes/<?= $usuario['imagen'] ?>"
                            style="height: 50px; width: 50px; border-radius: 50%;" alt="">
                    </div>
                    <div class="col-xl-1 col-3">
                        id:<span class="fw-semibold"> <?= $usuario['id'] ?> </span>
                    </div>
                    <div class="col-xl-3 col-9">
                        <?= $usuario['email'] ?>
                    </div>
                    <div class="col-xl-3 col-12">
                        <span class="fw-semibold"><?= $usuario['apellido'] ?></span>, <?= $usuario['nombre'] ?>
                    </div>
                    <div class="col-xl-2 col-12">
                        rango: <span class="fw-semibold"><?= $usuario['rango'] ?></span> / rol: <span
                            class="fw-semibold"><?= $usuario['rol'] ?></span>
                    </div>
                    <div class="col-xl-2 col-12 text-center small">
                        <a href="ficha.php?id=<?= $usuario['id'] ?>&rol=<?= $usuario['rol'] ?>"
                            class="btn btn-dark w-100 p-0 g-0" type="submit"><i class='bx bx-edit'></i> editar</a>
                        <a href="resetpass.php?id=<?= $usuario['id'] ?>" class="btn btn-danger w-100 p-0 g-0 mt-2"
                            type="submit"><i class='bx bx-edit'></i> reset</a>
                    </div>
                </div>
            <?php } ?>
            </row>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>