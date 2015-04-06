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

      https://almsaeedstudio.com/themes/AdminLTE/pages/UI/general.html
      
      <hr />

      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Danger alert preview. This alert is dismissable. Lorem lipsum.
      </div>


      <?php
      echo new Admin\Alert("danger","Test","Body ??");
      /*
      $box=new Admin\Box;
      $box->title("Alerts");
      $box->icon("fa fa-warning");
      $box->type("danger");
      $box->id("box");
      echo $box->html("Box body","<button class='btn btn-default'>Button</button>");

      $box=new Admin\Box;
      $box->title("Alerts");
      $box->icon("fa fa-warning");
      //$box->type("default");
      $box->id("box");
      echo $box->html("Box body","<button class='btn btn-default'>Button</button>");
      */
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
