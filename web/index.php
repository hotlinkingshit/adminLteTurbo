<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../vendor/autoload.php";

//use Admin\AdminLte;

$admin = new Admin\AdminLte2();
$admin->title("index.php");
echo $admin->html();//
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

<section class="content">
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
    A
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
    B
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
    C
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
    D
    </div><!-- /.col -->
  </div><!-- /.row -->                    
</section>