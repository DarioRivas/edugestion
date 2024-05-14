<?php
$menuJson = file_get_contents(ROOT_DIR . '_conf/menu.json');
// DECODIFICAR
$menu_data = json_decode($menuJson, true);
$menu_usuario = null;

$rol = $_SESSION['user-rol'];
?>

<body class="d-flex flex-column min-vh-100">
    <nav class="offcanvas offcanvas-start show" tabindex="-1" id="offcanvas" data-bs-keyboard="false"
        data-bs-backdrop="true" data-bs-scroll="true">
        <div class="offcanvas-header border-bottom justify-content-center">
            <a href="/" class="d-flex text-decoration-none offcanvas-title d-sm-block">
                <img src="<?= ROOT_DIR ?>_assets/images/logo.png" alt="" class="img-fluid">
            </a>
        </div>
        <div class="my-3">
            <div class="row justify-content-center "><img
                    src="<?= ROOT_DIR . 'miusuario/imagenes/' . $_SESSION['user-imagen'] ?>" alt=""
                    style="border-radius: 50%; max-width:150px; max-height:150px"> </div>
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
                    <button id="home" class="btn btn-toggle align-items-center rounded btn-sm"><a
                            href="<?= ROOT_DIR ?>home.php">Inicio</a>
                    </button>
                </li>
                <?php foreach ($menu_data as $item) {
                    if (isset($item['roles']) && $item['activo'] == 1) {
                        // Convertir el rol del elemento del menú en un array
                        $roles = explode(', ', $item['roles']);
                        if (in_array($rol, $roles)) { ?>
                            <li class="my-1">
                                <button class="btn btn-toggle align-items-center rounded collapsed  btn-sm"
                                    data-bs-toggle="collapse" data-bs-target="#<?= $item['menu'] ?>" aria-expanded="false">
                                    <?= $item['name'] ?>
                                </button>
                                <div class="collapse" id="<?= $item['menu'] ?>">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal py-1 small">
                                        <?php foreach ($item['submenu'] as $subitem) {
                                            $subroles = explode(', ', $subitem['roles']);
                                            if (in_array($rol, $subroles)) { ?>
                                                <li>
                                                    <a label="<?= $subitem['label'] ?>" href="<?= ROOT_DIR . $subitem['url'] ?>"
                                                        class="rounded submenu">
                                                        <?= $subitem['subname'] ?>
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
                <li class="border-top my-2"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed btn-sm" data-bs-toggle="collapse"
                        data-bs-target="#miusuario" aria-expanded="false">
                        Mi usuario
                    </button>
                    <div class="collapse" id="miusuario">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a label="ficha" href="<?= ROOT_DIR ?>miusuario/ficha.php" class="rounded submenu">Ficha
                                    personal</a>
                            </li>
                            <li><a label="miscursos" href="<?= ROOT_DIR ?>miusuario/materias.php"
                                    class="rounded submenu">Mis cursos</a>
                            </li>
                            <li><a label="cambiarclave" href="<?= ROOT_DIR ?>miusuario/cambiarclave.php"
                                    class="rounded submenu">Cambiar
                                    clave</a>
                            </li>
                            <li><a label="miimagen" href="<?= ROOT_DIR ?>miusuario/mifoto.php"
                                    class="rounded submenu">Imagen de perfil</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div class="px-3 pt-3 text-center">
            <a type="button" href="<?= ROOT_DIR ?>miusuario/logout.php" class="btn btn-danger mb-2 btn-sm"><i
                    class='bx bx-log-out me-2'></i>Cerrar sesión</a>
        </div>
    </nav>
    <button id="sidebarCollapse" class="float-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button"
        aria-label="Toggle menu"><span>menu</span>
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
        const currentURL = window.location.href;
        function expandMenu() {
            const divs = document.querySelectorAll('.collapse');
            divs.forEach(div => {
                if (currentURL.includes(div.id)) {
                    const button = div.parentElement.querySelector('button');
                    if (button) {
                        button.classList.remove('collapsed');
                        div.classList.add('show');
                        button.classList.add('text-success');
                    }
                }
            });
        }
        window.onload = function () {
            expandMenu();
        };
    </script>
    <script>
        var currentFilename = window.location.pathname.split('/').pop();
        var desiredFilename = 'home.php';

        if (currentFilename === desiredFilename) {
            document.getElementById('home').classList.add('text-success');
        }
    </script>