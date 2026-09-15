<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/admin.php");
include(ROOT_DIR . "_functions/trabajos.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
?>

<main label="estadisticasmesas">
    <header>
        <i class='bx bx-briefcase'></i> Dirección
    </header>
    <section>
        <div class="card shadow rounded border border-dark">
            <div class="card-header text-bg-dark">
                Estadísticas de Mesas de Acreditación
            </div>
            <div class="card-body p-0">
                <table class="table mb-0" id="tablaMesas">
                    <thead>
                        <tr class="encabezado">
                            <th>Mesa</th>
                            <th>Inscriptos</th>
                            <th>Permisos</th>
                            <th>Aprobados</th>
                            <th>% Aprobados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Febrero</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Marzo</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Abril</td>
                            <td>68</td>
                            <td>35</td>
                            <td>11</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Mayo</td>
                            <td>72</td>
                            <td>41</td>
                            <td>18</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Junio</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Julio</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Agosto</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Septiembre</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Octubre</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Noviembre</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Diciembre</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="total">
                            <th>Total</th>
                            <th>68</th>
                            <th>35</th>
                            <th>11</th>
                            <th>-</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        calcularTablaMesas();
    });

    function calcularTablaMesas() {
        const tabla = document.getElementById("tablaMesas");
        const tbody = tabla.querySelector("tbody");
        const filas = tbody.querySelectorAll("tr");
        const tfoot = tabla.querySelector("tfoot tr");

        // Variables para los totales
        let totalInscriptos = 0;
        let totalPermisos = 0;
        let totalAprobados = 0;

        // Función auxiliar para convertir el texto a número (convierte "-" en 0)
        const obtenerNumero = (texto) => {
            let valor = parseFloat(texto);
            return isNaN(valor) ? 0 : valor;
        };

        // Recorremos cada fila del cuerpo de la tabla
        filas.forEach(fila => {
            const celdas = fila.querySelectorAll("td");

            // Obtenemos los valores de las columnas
            let inscriptos = obtenerNumero(celdas[1].innerText);
            let permisos = obtenerNumero(celdas[2].innerText);
            let aprobados = obtenerNumero(celdas[3].innerText);

            // Sumamos a los totales generales
            totalInscriptos += inscriptos;
            totalPermisos += permisos;
            totalAprobados += aprobados;

            // Requerimiento 1: Calcular porcentaje de Aprobados por fila [(Permisos + Aprobados) / 2]
            if (celdas[1].innerText.trim() !== '-' || celdas[2].innerText.trim() !== '-' || celdas[3].innerText.trim() !== '-') {
                let porcentajeFila = (aprobados / permisos) * 100 || 0; // Evitar división por cero
                celdas[4].innerText = porcentajeFila.toFixed(2) + '%';
            } else {
                celdas[4].innerText = '-';
            }
        });

        // Requerimiento 2: Mostrar los valores totales en el tfoot
        const celdasFoot = tfoot.querySelectorAll("th");
        celdasFoot[1].innerText = totalInscriptos;
        celdasFoot[2].innerText = totalPermisos;
        celdasFoot[3].innerText = totalAprobados;

        // Requerimiento 3 (Actualizado): Calcular el porcentaje final usando los totales del tfoot divido 11
        let porcentajeFinal = ((totalAprobados / totalPermisos) * 100);
        celdasFoot[4].innerText = porcentajeFinal.toFixed(2) + '%';
    }
</script>


<?php require_once(ROOT_DIR . '_includes/footer.php') ?>