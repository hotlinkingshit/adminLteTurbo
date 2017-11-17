<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../../vendor/autoload.php";

$admin = new LTE\AdminLte2();
$admin->title("Home");
echo $admin;//
?>
<section class="content-header">
  <h1>
    AdminLTE Turbo
  </h1>
</section>

<section class="content">
  <h1>Hi</h1>
  <div class="row">
    <div class="col-5" >
    <?php
    include "box_jambonbill.php";
    include "box_pdo.php";

    ?>
    </div><!-- /.col -->

    <div class="col-7">
    <?php
    include "box_about.php";
    //include "box_getStarted.php";
    include "box_ajax.php";
    ?>
    </div><!-- /.col -->

  </div><!-- /.row -->
</section>
<script src="js/home.js"></script>
<?php
$admin->footer("<a href='http://adminlteturbo.jambonbill.org'>AdminLteTurbo</a>");//define footer
$admin->end();
