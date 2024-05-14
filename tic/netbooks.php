<?php
session_start();
define('ROOT_DIR', '../');
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/tic.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

?>
<main>
  <header>
  <i class='bx bx-book'></i> TIC
  </header>
  <section>
    <header>
      <div class="text-center">
        <h4>Netbooks</h4>
        <h5>(en construcción)</h5>
      </div>
    </header>
    <div class="row">

    </div>
  </section>
</main>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>