<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../../vendor/autoload.php";

//use Admin\AdminLte;

$admin = new Admin\AdminLte2();
$admin->title("index.php");
echo $admin->html();//
?>
<section class="content-header">
  <h1>
    AdminLTE Turbo
    <small>Injection</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-4 col-sm-6 col-xs-12" >
    <?php
    $box= new Admin\Box;
    $box->icon("fa fa-question");
    $box->title("About");
    $box->body("body");
    echo $box;
    ?>
    AdminLteTurbo is a php classed, striped down version of Almaseed AdminLTE2.<br />
    The goal is to help develop web apps super quickly, without too many dependencies.<br />
    The plugins have been removed and only the required dependencies (Bootstap and jQuery) are left.<br />
    </div><!-- /.col -->
    <div class="col-md-4 col-sm-6 col-xs-12">
    <?php
    $box= new Admin\Box;
    $box->title("Examples");
    $box->body("The php classes provide helpers to build widgets very easily.<br />Examples :<pre></pre>");
    echo $box;
    ?>

    </div><!-- /.col -->
    
    <div class="col-md-4 col-sm-6 col-xs-12">
    <?php
    $box= new Admin\Box;
    $box->title("Configuration");
    echo $box;
    ?>

    The menu is configured within the main configuration file, in src/Admin/config.json
    
    <pre>
      "header":{
        "text":"Header",
        "class":"header"
      },
      "home":{
        "text":"Home",
        "icon":"fa fa-home",
        "url":"index.php"
      },
      "separator":{
        "text":"Separator",
        "class":"header"
      },
      "logout":{       
        "text":"Logout",
        "id":"btn_logout",
        "icon":"fa fa-sign-out",
        "url":"logout.php"
      }
    </pre>
    
    </div><!-- /.col -->
  </div><!-- /.row -->                    
</section>

<script>

</script>