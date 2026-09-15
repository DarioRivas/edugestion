<?php
$menuJson = file_get_contents(ROOT_DIR . '_conf/menu.json');
// DECODIFICAR
$menu_data = json_decode($menuJson, true);
$menu_usuario = null;

$rol = $_SESSION['user-rol'];
?>

<body class="d-flex flex-column min-vh-100">
    <nav class="offcanvas offcanvas-start show" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="true" data-bs-scroll="true">
        <div class="offcanvas-header border-bottom justify-content-center">
            <a href="/" class="d-flex text-decoration-none offcanvas-title d-sm-block">
                <i class='bx bxs-vial bx-sm'></i><span class="fs-3 fw-bold">CET 5</span><span class="fs-3 fw-bold text-dark"></span>
            </a>
        </div>
        <div class="py-2 border-bottom">
            <div class="row justify-content-center "><img src="<?= ROOT_DIR . 'miusuario/imagenes/' . $_SESSION['user-imagen'] ?>" alt="" style="border-radius: 50%; max-width:150px; max-height:150px"></div>
            <div class="row text-center mt-2">
                <h5>
                    <?= $_SESSION['user-nombre'] . ' ' . $_SESSION['user-apellido'] ?>
                </h5>
                <span class="text-success fw-bold">
                    <?= $_SESSION['user-rol'] ?>
                </span>
            </div>
        </div>
        <div class="offcanvas-body px-0">
            <ul class="list-unstyled ps-0" id="listadoMenu">
                <li class="my-1">
                    <button id="home" class="btn btn-toggle align-items-center rounded btn-sm"><a href="<?= ROOT_DIR ?>home.php">Inicio</a>
                    </button>
                </li>
                <?php foreach ($menu_data as $item) {
                    if (isset($item['roles']) && $item['activo'] == 1) {
                        // Convertir el rol del elemento del menú en un array
                        $roles = explode(', ', $item['roles']);
                        if (in_array($rol, $roles)) { ?>
                            <li class="my-1">
                                <button class="btn btn-toggle align-items-center rounded collapsed  btn-sm" data-bs-toggle="collapse" data-bs-target="#<?= $item['menu'] ?>" aria-expanded="false">
                                    <?= $item['name'] ?>
                                </button>
                                <div class="collapse" id="<?= $item['menu'] ?>">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal small">
                                        <?php foreach ($item['submenu'] as $subitem) {
                                            $subroles = explode(', ', $subitem['roles']);
                                            if (in_array($rol, $subroles)) { ?>
                                                <li>
                                                    <a label="<?= $subitem['label'] ?>" href="<?= ROOT_DIR . $subitem['url'] ?>" class="rounded submenu d-flex align-items-center">
                                                        <?= $subitem['icon'] . $subitem['subname'] ?>
                                                    </a>
                                                </li>
                                        <?php }
                                        } ?>
                                    </ul>
                                </div>
                            </li>
                <?php }
                    }
                } ?>
            </ul>
        </div>
        <div class="px-3 pt-2 text-center bg-danger border-top">
            <a type="button" href="<?= ROOT_DIR ?>miusuario/logout.php" class="btn btn-danger mb-2 btn-sm d-flex justify-content-center align-items-center"><i class='bx bx-log-out me-1 bx-sm'></i>Cerrar sesión</a>
        </div>
    </nav>
    <button id="sidebarCollapse" class="float-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button" aria-label="Toggle menu"><span>menu</span>
    </button>
    <script>
        const screenWidth = window.innerWidth;
        const offcanvasNav = document.getElementById('offcanvas');
        if (screenWidth > 600) {
            offcanvasNav.setAttribute('data-bs-backdrop', 'false');
        } else {
            offcanvasNav.setAttribute('data-bs-backdrop', 'true');
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Normalizamos la URL actual eliminando parámetros, barras finales y 'index.php'
            let currentUrl = window.location.href.split('?')[0];
            if (currentUrl.endsWith('/')) {
                currentUrl = currentUrl.slice(0, -1);
            }
            currentUrl = currentUrl.replace(/\/index\.php$/, '');

            const submenuLinks = document.querySelectorAll('#listadoMenu .btn-toggle-nav a');
            submenuLinks.forEach(link => {
                // link.href resuelve automáticamente la ruta relativa (../) a absoluta
                let linkUrl = link.href.split('?')[0];
                if (linkUrl.endsWith('/')) {
                    linkUrl = linkUrl.slice(0, -1);
                }
                linkUrl = linkUrl.replace(/\/index\.php$/, '');

                // Comparamos las URLs normalizadas
                if (currentUrl === linkUrl) {
                    link.classList.add('text-success', 'fw-bold');

                    // Expande automáticamente el acordeón padre correspondiente
                    const collapseDiv = link.closest('.collapse');
                    if (collapseDiv) {
                        collapseDiv.classList.add('show');
                        const button = collapseDiv.parentElement.querySelector('button');
                        if (button) {
                            button.classList.remove('collapsed');
                            button.classList.add('text-success');
                        }
                    }
                }
            });
        });
    </script>
    <script>
        var currentFilename = window.location.pathname.split('/').pop();
        var desiredFilename = 'home.php';

        if (currentFilename === desiredFilename) {
            document.getElementById('home').classList.add('text-success');
        }
    </script>