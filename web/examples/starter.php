<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../vendor/autoload.php";

use LTE\AdminLte;

$admin = new AdminLte2();
$admin->title("AdminLte2Turbo");
echo $admin->printPublic();//
?>
<section class="content-header">
  <h1>
    Page Header
    <small>Optional description</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>

<div class='content'>

Hello World :)

</div>
<?php


//lets test a few boxes
echo new LTE\Callout("Test");