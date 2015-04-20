<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../vendor/autoload.php";

//use Admin\AdminLte;

$admin = new Admin\AdminLte2();
$admin->title("Home");
echo $admin;//
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
    $box->type("warning");
    $box->title("About");
    $box->removable(true);
    
    $body=[];
    $body[]="AdminLteTurbo is a php classed, striped down version of <a href='https://almsaeedstudio.com/'>Almaseed AdminLTE2</a><br />";
    $body[]="The goal is to help develop web/php apps super quickly, with little dependencies.<br />";
    $body[]="Plugins have been removed and only the required dependencies (Bootstap and jQuery) are left.<br />";
    $box->body($body);
    $box->footer("<a href='config.php' class='btn btn-default'>Configuration</a>");
    
    echo $box;
    ?>
    
    
    
    </div><!-- /.col -->
    
    <div class="col-md-4 col-sm-6 col-xs-12">
    <?php
    $box= new Admin\Box;
    $box->title("Layout");
    $box->body("Admin layout can defined in the config, and/or changed with javascript.<br />See dist/js/demo.js");
    echo $box;
    

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
$(function(){
  console.log('ready');
});
</script>