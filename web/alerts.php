<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../vendor/autoload.php";

//use Admin\AdminLte;

$admin = new Admin\AdminLte2();
$admin->title("AdminLte2Turbo");
echo $admin->printPublic();//
?>
<section class="content-header">
  <h1><i class='fa fa-warning'></i> Alerts</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>


<section class="content">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12" >
      <?php
      $box=new Admin\Box;
      $box->title("Alerts");
      $box->icon("fa fa-warning");
      //$box->type("default");
      $box->id("box");
      echo $box->html("Box body","<button class='btn btn-default'>Button</button>");
      ?>
<pre>
$box=new Admin\Box;
$box->title("box title");
$box->id("box");
echo $box->html("Box body","&lt;button class='btn btn-default'>Button&lt;/button>");
</pre>

    </div>   <!-- /.row -->
  </div>   <!-- /.row -->
</section>
