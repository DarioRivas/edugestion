<?php
session_start();
define('ROOT_DIR', '../');
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/recursos.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");

?>
<main>
    <header>
        <i class='bx bx-book'></i> TIC
    </header>
    <section>
        <header>
            <div class="text-center">
                <h4>Listado recursos Sala TIC</h4>
            </div>
        </header>
        <div class="card shadow p-3">
        <div class="row fw-bold">
            <div class="col">Tipo
            </div>
            <div class="col">Nombre
            </div>
            <div class="col">Descripción
            </div>
            <div class="col">Observaciones
            </div>
        </div>
        <?php $get_recursos = get_recursos('salatic');
        while ($recurso = mysqli_fetch_array($get_recursos)) { ?>
            <div class="row">
                <div class="col">
                    <?= $recurso['tipo'] ?>
                </div>
                <div class="col">
                    <?= $recurso['nombre'] ?>
                </div>
                <div class="col">
                    <?= $recurso['descripcion'] ?>
                </div>
                <div class="col">
                    <?= $recurso['observaciones'] ?>
                </div>
            </div>
        <?php } ?>
        </div>
    </section>
</main>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>