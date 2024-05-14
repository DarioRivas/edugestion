<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
$conexion = conectar();
include (ROOT_DIR . "_functions/biblioteca.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$libro = get_fichaLibro($_GET['id']);
$ejemplares = get_ejemplares($_GET['id']);
$cantidadEjemplares = mysqli_num_rows($ejemplares);

?>
<main label="buscarlibros">
    <header>
        <i class='bx bx-book'></i> Biblioteca
    </header>
    <section>
        <header>
            <div class="text-center">
                <h4>Ficha del Libro</h4>
            </div>
        </header>
        <div class="card shadow px-3 rounded">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-12 my-3">
                    <img src="portadas/<?= $libro['portada'] ?>" alt="" class="img-fluid">
                </div>
                <div class="col-xl-9 col-lg-8 col-12 my-3">
                    <div class="row mt-3">
                        <h3 class="text-success">
                            <?= $libro['titulo'] ?>
                        </h3>
                        <div class="col-12 my-1"><span class="fw-semibold">ID:</span>
                            <?= $libro['id'] ?>
                        </div>
                        <div class="col-12 my-1"><span class="fw-semibold">ISBN:</span>
                            <?= $libro['isbn'] ?>
                        </div>
                        <div class="col-12 my-1"><span class="fw-semibold">Edición:</span>
                            <?= $libro['edicion'] ?>°
                        </div>
                        <div class="col-12 my-1"><span class="fw-semibold">Autor:</span>
                            <?= $libro['autor'] ?>
                        </div>
                        <div class="col-12 my-1"><span class="fw-semibold">Editorial:</span>
                            <?= $libro['editorial'] ?>
                        </div>
                        <div class="col-12 my-1"><span class="fw-semibold">Lugar:</span>
                            <?= $libro['lugar'] ?>
                        </div>
                        <div class="col-12 my-1"><span class="fw-semibold">Año:</span>
                            <?= $libro['anio'] ?>
                        </div>
                        <div class="col-12 my-1"><span class="fw-semibold">Ciclo:</span>
                            <?= get_ciclos($libro['ciclo']) ?>
                        </div>
                        <div class="col-12 my-1"><span class="fw-semibold">Cantidad de ejemplares:</span>
                            <?= $cantidadEjemplares ?>
                        </div>
                        <div class="col-12 my-1"><span class="fw-semibold">Etiquetas:</span>
                            <?= $libro['tags'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="text-center mb-3 mt-4 d-flex align-items-center justify-content-center">
            <h4>Ejemplares <span class="badge text-bg-dark rounded-pill ms-2"><?= $cantidadEjemplares ?></span></h4>
        </section>
        <div class="card shadow p-3 mb-3 mt-2 rounded">
            <?php if ($ejemplares == '') { ?>
                <div class="alert alert-warning">No se registran ejemplares cargados de este libro.</div>
            <?php } else {
                while ($ej = mysqli_fetch_array($ejemplares)) { ?>
                    <div class="row my-2">
                        <div class="col-xl-4 col-6"><span class="fw-semibold small">N° Inventario:</span>
                            <?= $ej['inventario'] ?>
                        </div>
                        <div class="col-xl-2 col-6"><span class="fw-semibold small">Estado:</span>
                            <?= $ej['estado'] ?>
                        </div>
                        <div class="col-xl-3 col-12"><span class="fw-semibold small">Fecha de alta:</span>
                            <?= date('d-m-Y', strtotime($ej['fechaalta'])) ?>
                        </div>
                        <div class="col-xl-3 col-12"><span class="fw-semibold small">Fecha de baja:</span>
                            <?php if ($ej['fechabaja'] != 'NULL') {
                                echo 'Activo';
                            } else {
                                echo (date('d-m-Y', strtotime($ej['fechabaja'])));
                            } ?>
                        </div>
                        <div class="col-12"><span class="fw-semibold small">Observaciones:</span>
                            <?= $ej['observaciones'] ?>
                        </div>
                    </div>
                    <hr>
                <?php }
            } ?>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>