<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../../vendor/autoload.php";

use Admin\AdminLte;

$admin = new Admin\AdminLte2();
$admin->title("Example page");
echo $admin->html();
?>
<section class="content-header">
  <h1>
    Example Header
    <small>Example description</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Exemple</a></li>
    <li class="active">Here</li>
  </ol>
</section>

<div class='content'>

<section class="content">
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
    <?php
    $box=new Admin\SolidBox();
	$box->id('box1');
	$box->icon('fa fa-users');
	$box->title("Box example 1");
	//$box->loading(1);
	echo $box->html("Box body example","box footer example");
	?>
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
    <?php
    $box=new Admin\SolidBox();
	$box->id('box2');
	$box->icon('fa fa-users');
	$box->title("Box example 1");
	//$box->loading(1);
	echo $box->html("Box body example","box footer example");
	?>
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
    <?php
    $box=new Admin\SolidBox();
	$box->id('box3');
	$box->icon('fa fa-users');
	$box->title("Box example 1");
	//$box->loading(1);
	echo $box->html("Box body example","box footer example");
	?>
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
    <?php
    $box=new Admin\SolidBox();
	$box->id('box4');
	$box->icon('fa fa-users');
	$box->title("Box example 1");
	//$box->loading(1);
	echo $box->html("Box body example","box footer example");
	?>
    </div><!-- /.col -->
  </div><!-- /.row -->                    
</section>

</div>
<?php


//lets test a few boxes
echo new Admin\Callout("Testme","Please","Testme");

//echo $admin->footer();