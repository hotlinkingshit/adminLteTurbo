<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../vendor/autoload.php";

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
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12" >
    <?php
    $box= new LTE\Box;
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
    
    <div class="col-md-6 col-sm-6 col-xs-12">
    <?php

    $box= new LTE\Box;
    $box->title("GIT Install");
    
    $htm=[];
    $htm[]="<pre>";
    $htm[]="git clone https://github.com/jambonbill/adminLteTurbo.git\n";
    $htm[]="composer update\n";
    $htm[]="</pre>";

    $box->body($htm);
    echo $box;
    

    $box= new LTE\Box;
    $box->title("Get started");
    $htm=[];
    $htm[]="<pre>\n";
    $htm[]="&lt;?php\n";
    $htm[]="header('Content-Type: text/html; charset=utf-8');\n";
    $htm[]="require __DIR__.'/../vendor/autoload.php';\n";
    $htm[]="\n";
    $htm[]="\$admin = new LTE\AdminLte2();\n";
    $htm[]="\$admin->title('My title');\n";
    $htm[]="\n";
    $htm[]="echo \$admin;\n";
    $htm[]="</pre>";
    $box->body($htm);
    echo $box;
    
    ?>

    </div><!-- /.col -->
    
  </div><!-- /.row -->                    
</section>

<script>
$(function(){
  console.log('ready');
});
</script>