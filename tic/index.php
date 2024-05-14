<?php
session_start();
define('ROOT_DIR', '../');
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/recursos.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

?>
<main>
  <header>
  <i class='bx bx-book'></i> TIC
  </header>
  <section>
    <header>
      <div class="text-center my-5">
        <h4>(Espacio en construcción)</h4>        
      </div>
    </header>    
  </section>
</main>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>