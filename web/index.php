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
  </h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12" >
    <?php
    $box= new Admin\Box;
    $box->icon("fa fa-question");
    $box->type("warning");
    $box->title("About");
    $box->removable(true);
    
    $body=[];
    $body[]="AdminLteTurbo is a php classed, striped down version of <a href='https://almsaeedstudio.com/'>Almaseed AdminLTE2</a> which is based on twitter <a href='http://getbootstrap.com/'>Bootstrap</a><br />";
    $body[]="The goal is to help develop web/php apps super quickly, with little dependencies.<br />";
    $body[]="Plugins have been removed and only the required dependencies (Bootstap and jQuery)<br />";
    $box->body($body);
    
    $foot=[];
    $foot[]="<a href='examples/config.php' class='btn btn-default'><i class='fa fa-wrench'></i> Configuration</a> ";
    $foot[]="<a href='examples/' class='btn btn-default'><i class='fa fa-list'></i> Examples</a> ";
    $box->footer($foot);
    
    echo $box;
    ?>
    
    
    
    </div><!-- /.col -->
    
    <div class="col-md-4 col-sm-6 col-xs-12">
    <?php
    /*
    $box= new Admin\Box;
    $box->title("Layout");
    $box->body("Admin layout can defined in the config, and/or changed with javascript.<br />See dist/js/demo.js");
    echo $box;
    

    $box= new Admin\Box;
    $box->title("Examples");
    $box->body("The php classes provide helpers to build widgets very easily.<br />Examples :<pre></pre>");
    echo $box;
    */
    ?>

    </div><!-- /.col -->
    
  </div><!-- /.row -->                    
</section>

<script>
$(function(){
  console.log('ready');
});
</script>