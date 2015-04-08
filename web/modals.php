<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../vendor/autoload.php";


$admin = new Admin\AdminLte2();
$admin->title("Modals");
echo $admin->html();//
?>
<section class="content-header">
  <h1>
    Modals
    <small>Pretty modal windows</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>

<section class="content">
<?php
$modal = new Admin\Modal("Titre de la fenetre modal","Body building","Foot locker");
$modal->id("modalwindow");
$modal->icon("fa fa-user");
echo $modal;
?>
</section>

<script>
$(function(){
  $("#modalwindow").modal(true);
});
</script>