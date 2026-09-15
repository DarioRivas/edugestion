<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/recursos.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

?>
<main label="recursosbiblio">
    <header>
        <i class='bx bx-book'></i> Biblioteca
    </header>
    <section>
        <div class="card shadow">
            <div class="card-header text-bg-dark">
                Listado recursos para el Aula de Biblioteca
            </div>
            <div class="card-body">
                <div class="row fw-semibold">
                    <div class="col">Tipo
                    </div>
                    <div class="col">Nombre
                    </div>
                    <div class="col">Descripción
                    </div>
                    <div class="col">Observaciones
                    </div>
                </div>
                <?php $get_recursos = get_recursos('biblioteca');
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
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>