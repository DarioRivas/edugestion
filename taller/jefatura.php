<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/taller.php");
include (ROOT_DIR . "_functions/usuarios.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$fechainicio = date('Y-m-d');
$fechafin = date('Y-m-d');
$alert = '';
$alertW = '';
$conexion = conectar();
if (isset($_POST['publicar']) && $_POST['seccion'] != 0) {
    list($seccion, $docente) = explode('|', $_POST['seccion']);
    $fechainicio = date('Y-m-d', strtotime($_POST['fechainicio']));
    $fechafin = date('Y-m-d', strtotime($_POST['fechafin']));
    $sql = "INSERT INTO taller_inasistencias (idsecciones, docente, fechainicio, fechafin) VALUES ('$seccion', '$docente', '$fechainicio', '$fechafin');";
    mysqli_query($conexion, $sql);
    if (mysqli_affected_rows($conexion) != 0) {
        $desde = date('d/m/Y', strtotime($fechainicio));
        $hasta = date('d/m/Y', strtotime($fechafin));
        $alert = "<i class='bx bx-happy bx-sm me-2'></i> La inasistencia de $docente desde el $desde hasta el $hasta se publicó correctamente ";
        $alertW = ' alert-success ';
    } else {
        $alert = "<i class='bx bx-confused bx-sm me-2'></i> Error al publicar la inasistencia";
        $alertW = ' alert-danger ';
    }
}

if (isset($_POST['asignar']) && $_POST['seccion'] != 0 && $_POST['docente'] != 0) {  
    $seccion = $_POST['seccion'];
    $docente = $_POST['docente'];
    $sql = "UPDATE taller_secciones SET docente = '$docente' WHERE id = '$seccion'";
    mysqli_query($conexion, $sql);
    if (mysqli_affected_rows($conexion) != 0) {
        $alert = "<i class='bx bx-happy bx-sm me-2'></i> El docente se ha asignado correctamente";
        $alertW = ' alert-success ';
    } else {
        $alert = "<i class='bx bx-confused bx-sm me-2'></i> Error al asignar el docente";
        $alertW = ' alert-danger ';
    }
}

?>
<main label="jefatura">
    <header>
        <i class='bx bx-wrench'></i> Jefatura de Taller
    </header>
    <section>
        <?php if ($alert != '') { ?>
            <div class="alert <?= $alertW ?> pt-3"><?= $alert ?>
            </div>
        <?php } ?>

        <div class="card rounded shadow mt-3">
            <div class="card-header bg-danger bg-opacity-50">Publicación de inasistencias</div>
            <div class="card-body pt-0">
                <form action="jefatura.php" method="post">
                    <div class="row justify-content-center align-items-end">
                        <div class="col-xl-6 col-12 mt-3">
                            <label for="tipo" class="form-label small">Sección</label>
                            <select class="form-select" name="seccion" id="seccion" required>
                                <option value="0" selected>Sección</option>
                                <?php $get_seccionesTaller = get_seccionesTaller();
                                while ($seccion = mysqli_fetch_array($get_seccionesTaller)) { ?>
                                    <option value="<?= $seccion['id'] ?>|<?= $seccion['docente'] ?>">
                                        <?= $seccion['anio'] . 'º - ' . $seccion['seccion'] . ' - ' . $seccion['docente'] . ' - T' . $seccion['turno'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-xl-2 col-6 mt-3">
                            <label for="fechainicio" class="form-label small">Fecha
                                Inicio</label>
                            <input type="date" class="form-control small" id="fechainicio" name="fechainicio"
                                value="<?= $fechainicio ?>" required>
                        </div>
                        <div class="col-xl-2 col-6 mt-3">
                            <label for="fechafin" class="form-label small">Fecha
                                Fin</label>
                            <input type="date" class="form-control" id="fechafin" name="fechafin"
                                value="<?= $fechafin ?>" required>
                        </div>
                        <div class="col-xl-2 col-6 mt-3 text-center">
                            <button type="submit" class="btn btn-success w-100" name="publicar">Publicar
                                inasistencia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section>
        <div class="card rounded shadow mt-5">
            <div class="card-header">Asignación de docentes</div>
            <div class="card-body pt-0">
                <form action="jefatura.php" method="post">
                    <div class="row align-items-end justify-content-center">
                        <div class="col-xl-6 col-12 mt-3">
                            <label for="tipo" class="form-label small">Sección / Docente Actual</label>
                            <select class="form-select" name="seccion" id="seccion" required>
                                <option value="0" selected>Sección</option>
                                <?php $get_seccionesTaller = get_seccionesTaller();
                                while ($seccion = mysqli_fetch_array($get_seccionesTaller)) { ?>
                                    <option value="<?= $seccion['id'] ?>">
                                        <?= $seccion['anio'] . 'º - ' . $seccion['seccion'] . ' - ' . $seccion['docente'] . ' - T' . $seccion['turno'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-xl-4 col-12 mt-3">
                            <label for="docente" class="form-label small">Docente a asignar</label>
                            <select class="form-select" name="docente" id="docente" required>
                                <option value="0" selected disabled>Docente</option>
                                <?php $get_usuarios = get_docentes();
                                while ($usuario = mysqli_fetch_array($get_usuarios)) { ?>
                                    <option value="<?= $usuario['id'] ?>">
                                        <?= $usuario['apellido'] . ', ' . $usuario['nombre'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-xl-2 col-6 mt-3 text-center">
                            <button type="submit" class="btn btn-success w-100" name="asignar">Asignar docente</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>