<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
?>
<main label="horarioslabo">
  <header>
    <i class='bx bx-paper-plane'></i> Alumnos
  </header>
  <section>
    <!-- TURNO MAÑANA -->
    <div class="row my-2 text-center">
      <!-- LUNES -->
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-success text-white">LUNES TM</div>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 1</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 12hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>SEPULVEDA Mayra</div>
            <div class="fs-3">6to 1ra TT</div>
            <div class="fw-semibold">TP Qca Industrial I</div>
            <div>(ID 886)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 2</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 10:40hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>CALQUIN Gloria</div>
            <div class="fs-3">4to 1ra TT</div>
            <div class="fw-semibold">TP Qca Orgánica I</div>
            <div>(ID 863)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 3</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 10:40hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>COFRE Sol</div>
            <div class="fs-3">6to 1ra TT</div>
            <div class="fw-semibold">TP Qca Ind Aplicada </div>
            <div>(ID 937)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 11:20hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>CAMUZZI Stefanía</div>
            <div class="fs-3">4to 2da TT</div>
            <div class="fw-semibold">TP Qca Inorgánica</div>
            <div>(ID 1076)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 11:20hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>ORTIZ Paola</div>
            <div class="fs-3">3to 1ra TT</div>
            <div class="fw-semibold">TP Física</div>
            <div>(ID 790)</div>
          </div>
          <br>
        </div>
      </div>
      <!-- MARTES -->
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-success text-white">MARTES TM</div>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 1</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 10:40hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>SEPULVEDA Mayra</div>
            <div class="fs-3">6to 1ra TT</div>
            <div class="fw-semibold">Qca Analítica Cuantitativa</div>
            <div>(ID 939)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 2</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 10:40hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>CALQUÍN GLoria</div>
            <div class="fs-3">6to 1ra TT</div>
            <div class="fw-semibold">TP Qca Orgánica I</div>
            <div>(ID 1078)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 3</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 10:40hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>COFRE Sol</div>
            <div class="fs-3">6to 3ra TT</div>
            <div class="fw-semibold">TP Qca Industrial Aplicada</div>
            <div> (ID 1113)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 12hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>CHINO Ana</div>
            <div class="fs-3">6to 2da TT</div>
            <div class="fw-semibold">TP Qca Industrial II</div>
            <div> (ID 1048)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 10:40hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>LANDEROS Víctor</div>
            <div class="fs-3">4to 1ra TT</div>
            <div class="fw-semibold">TP Procesos Químicos</div>
            <div> (ID 860)</div>
          </div>
          <br>
        </div>
      </div>
      <!-- MIERCOLES -->
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-success text-white">MIERCOLES TM</div>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 1</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 10:40hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>CHINO Ana</div>
            <div class="fs-3">5to 1ra TT</div>
            <div class="fw-semibold">TP Microbiología y Bromatología</div>
            <div>(ID 914)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 2</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 11:20hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>VAZQUEZ Hernán</div>
            <div class="fs-3">5to 1ra TT</div>
            <div class="fw-semibold">TP Qca Inorgánica</div>
            <div>(ID 861)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 3/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 12hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>SEPULVEDA Mayra</div>
            <div class="fs-3">5to 3ra TT</div>
            <div class="fw-semibold">TP Qca Analítica Cuantitativa</div>
            <div>(ID 1075)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 3/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 10:40hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>COFRE Sol</div>
            <div class="fs-3">5to 3ra TT</div>
            <div class="fw-semibold">TP Procesos Químicos</div>
            <div>(ID 1075)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 120hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>CALQUÍN Gloria</div>
            <div class="fs-3">4to 1ra TT</div>
            <div class="fw-semibold">TP Qca Industrial</div>
            <div>(ID 936)</div>
          </div>
          <br>
        </div>
      </div>
      <!-- JUEVES -->
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-success text-white">JUEVES TM</div>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 1</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 12hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>GUEVARA Noelia</div>
            <div class="fs-3">3ro 1ra TT</div>
            <div class="fw-semibold">TP Qca General</div>
            <div>(ID 1065)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 2</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 12hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>SEPULVEDA Mayra</div>
            <div class="fs-3">5to 1ra TT</div>
            <div class="fw-semibold">TP Qca Analítica Cualitativa</div>
            <div>(ID 913)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 3</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 10:40hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>COFREO Sol</div>
            <div class="fs-3">6to 2da TT</div>
            <div class="fw-semibold">TP Qca Industrial Aplicada</div>
            <div>(ID 1049)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 12hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>CALQUIN Gloria</div>
            <div class="fs-3">6to 3ra TT</div>
            <div class="fw-semibold">TP Qca Industrial II</div>
            <div>(ID 1112)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 10:40hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>VAZQUEZ Hernán</div>
            <div class="fs-3">4to 2da TT</div>
            <div class="fw-semibold">TP Física Aplicada</div>
            <div>(ID 1077)</div>
          </div>
          <br>
        </div>
      </div>
      <!-- VIERNES -->
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-success text-white">VIERNES TM</div>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 1</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 12hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>SEPULVEDA Mayra</div>
            <div class="fs-3">6to 3ra TT</div>
            <div class="fw-semibold">TP Qca Analítica Cuantitativa</div>
            <div>(ID 1115)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 2</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 11:20hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>CALQUÍN GLoria</div>
            <div class="fs-3">4to 1ra TT</div>
            <div class="fw-semibold">TP Física Aplicada</div>
            <div>(ID 911)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 3</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 12hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>OCKIER Macarena</div>
            <div class="fs-3">3ro 1ra TT</div>
            <div class="fw-semibold">TP Qca General</div>
            <div>(ID 791)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 11:20hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>VAZQUEZ Hernan</div>
            <div class="fs-3">3ro 1ra TT</div>
            <div class="fw-semibold">TP Física</div>
            <div>(ID 1064)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 10:40hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>LANDEROS Carlos</div>
            <div class="fs-3">4to 1ra TT</div>
            <div class="fw-semibold">TP Qca General</div>
            <div>(ID 862)</div>
          </div>
          <br>
        </div>
      </div>
    </div>
  </section>
  <hr><br>
  <section>
    <!-- TURNO TARDE -->
    <div class="row my-2 text-center">
      <!-- LUNES -->
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-info text-white">LUNES TT</div>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 1</div>
            <div><i class='bx bx-time-five me-2'></i>13:30 a 17:30hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>GOMEZ SBROLLA Nadia</div>
            <div class="fs-3">5to 2da TM</div>
            <div class="fw-semibold">TP Qca Cualitativa</div>
            <div>(ID 1102)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 2</div>
            <div><i class='bx bx-time-five me-2'></i>14 a 16:40</div>
            <div><i class='bx bxs-user me-2 text-info'></i>CALQUIN Gloria</div>
            <div class="fs-3">4to 2da TM</div>
            <div class="fw-semibold">TP Qca Orgánica I</div>
            <div>(ID 850)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 3</div>
            <div><i class='bx bx-time-five me-2'></i>13:30 a 17:30hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>SEPULVEDA Mayra</div>
            <div class="fs-3">5to 1ra TM</div>
            <div class="fw-semibold">TP Qca Idustrial I </div>
            <div>(ID 886)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4</div>
            <div><i class='bx bx-time-five me-2'></i>14 a 17:20hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>VAZQUEZ Hernán</div>
            <div class="fs-3">4to 1ra TM</div>
            <div class="fw-semibold">TP Qca Inorgánica</div>
            <div>(ID 835)</div>
          </div>
        </div>
      </div>
      <!-- MARTES -->
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-info text-white">MARTES TT</div>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 1</div>
            <div><i class='bx bx-time-five me-2'></i>13:30 a 16:10hs </div>
            <div><i class='bx bxs-user me-2 text-info'></i>FERNANDEZ Florencia</div>
            <div class="fs-3">5to 1ra TM</div>
            <div class="fw-semibold">TP Microbiología y Bromatología</div>
            <div>(ID 888)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 2</div>
            <div><i class='bx bx-time-five me-2'></i>14 a 16:40hs </div>
            <div><i class='bx bxs-user me-2 text-info'></i>CALQUÍN GLoria</div>
            <div class="fs-3">4to 1ra TM</div>
            <div class="fw-semibold">TP Qca Orgánica I</div>
            <div>(ID 837)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 3</div>
            <div><i class='bx bx-time-five me-2'></i>13:30 a 17:30hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>SEPULVEDA Mayra</div>
            <div class="fs-3">6to 3ra TM</div>
            <div class="fw-semibold">TP Qca Analítica Cuantitativa</div>
            <div> (ID 1015)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>13:30 a 16:10hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>COFRE Sol</div>
            <div class="fs-3">4to 2da TM</div>
            <div class="fw-semibold">TP Procesos Químicos</div>
            <div> (ID 847)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>13:30 a 16:50hs </div>
            <div><i class='bx bxs-user me-2 text-info'></i>VAZQUEZ Hernán</div>
            <div class="fs-3">3ro 1ra TM</div>
            <div class="fw-semibold">TP Física</div>
            <div> (ID 773)</div>
          </div>
          <br>
        </div>
      </div>
      <!-- MIERCOLES -->
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-info text-white">MIERCOLES TT</div>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 1</div>
            <div><i class='bx bx-time-five me-2'></i>13:30 a 16:10hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>COFRE Sol</div>
            <div class="fs-3">4to 1ra TM</div>
            <div class="fw-semibold">TP Procesos Químicos</div>
            <div>(ID 834)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 2</div>
            <div><i class='bx bx-time-five me-2'></i>14 a 17:20hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>CALQUÍN Gloria</div>
            <div class="fs-3">5to 2da TM</div>
            <div class="fw-semibold">TP Qca Orgánica II</div>
            <div>(ID 1100)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 3</div>
            <div><i class='bx bx-time-five me-2'></i>14:50 a 17:30hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>BERTI Patricia</div>
            <div class="fs-3">6to 3ra TM</div>
            <div class="fw-semibold">TP Qca Industrial Aplicada</div>
            <div>(ID 1013)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>13:30 a 16:10hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>LANDEROS Carlos</div>
            <div class="fs-3">6to 2da TM</div>
            <div class="fw-semibold">TP Física Aplicada</div>
            <div>(ID 840)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>14:10 a 17:30hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>VAZQUEZ Hernán</div>
            <div class="fs-3">3ro 1ra TM</div>
            <div class="fw-semibold">TP Física</div>
            <div>(ID 774)</div>
          </div>
          <br>
        </div>
      </div>
      <!-- JUEVES -->
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-info text-white">JUEVES TT</div>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 1</div>
            <div><i class='bx bx-time-five me-2'></i>13:30 a 17:30hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>BERTI Patricia</div>
            <div class="fs-3">3ro 1ra TM</div>
            <div class="fw-semibold">TP Qca General</div>
            <div>(ID 776)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 2</div>
            <div><i class='bx bx-time-five me-2'></i>13:30 a 17:30hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>LUCERO Belén</div>
            <div class="fs-3">5to 1ra TM</div>
            <div class="fw-semibold">TP Qca Analítica Cualitativa</div>
            <div>(ID 887)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 3</div>
            <div><i class='bx bx-time-five me-2'></i>13:30 a 17:30hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>VAZQUEZ Hernán</div>
            <div class="fs-3">5to 2ro TM</div>
            <div class="fw-semibold">TP Qca Industrial I</div>
            <div>(ID 1101)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>13:30 a 17:30hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>CALQUIN Gloria</div>
            <div class="fs-3">6to 3ra TM</div>
            <div class="fw-semibold">TP Qca Industrial II</div>
            <div>(ID 1012)</div>
          </div>
        </div>
      </div>
      <!-- VIERNES -->
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-info text-white">VIERNES TT</div>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 1</div>
            <div><i class='bx bx-time-five me-2'></i>13:30 a 17:30hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i></div>
            <div class="fs-3">3ro 3ra TM</div>
            <div class="fw-semibold">TP Qca General</div>
            <div>(ID 777)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 2</div>
            <div><i class='bx bx-time-five me-2'></i>13 a 17:30hs </div>
            <div><i class='bx bxs-user me-2 text-info'></i>CALQUÍN GLoria</div>
            <div class="fs-3">5to 1ra TM</div>
            <div class="fw-semibold">TP Qca Orgánica II</div>
            <div>(ID 885)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 3</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 12hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>FERNANDEZ Florencia</div>
            <div class="fs-3">3ro 1ra TM</div>
            <div class="fw-semibold">TP Microbiología y Bromatología</div>
            <div>(ID 1103)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 11:20hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>BERTI Patricia</div>
            <div class="fs-3">3ro 1ra TM</div>
            <div class="fw-semibold">TP Qca Inorgánica</div>
            <div>(ID 848)</div>
          </div>
          <hr>
          <div class="row my-2">
            <div class="fs-5 fw-semibold">Laboratorio 4/Aula</div>
            <div><i class='bx bx-time-five me-2'></i>8 a 10:40hs</div>
            <div><i class='bx bxs-user me-2 text-info'></i>LANDEROS Carlos</div>
            <div class="fs-3">4to 1ra TM</div>
            <div class="fw-semibold">TP Qca General</div>
            <div>(ID 862)</div>
          </div>
          <br>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>