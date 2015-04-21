<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../vendor/autoload.php";

$admin = new Admin\AdminLte2();
$admin->menu("Config");

$admin->config()->menusearch=false;
$menu=$admin->config()->menu->examples=[];

//echo "<pre>";var_dump($menu);exit;

$admin->navbarCustomMenu('html');


echo $admin->html();//

//$admin->bidule("html");


//echo new Admin\Contentheader('title','icon','small');
?>
<section class="content-header">
  <h1><i class='fa fa-list'></i> Config <small>Configuration</small></h1>
</section>


<section class="content">
  <div class="row">

    <div class="col-md-6 col-sm-6 col-xs-12" >
    <?php
    // Config file
    $box=new Admin\Box;
    $box->title("Global configuration file");
    $box->icon("fa fa-bolt");
    $htm=[];
    $htm[]="Admin is configured thanks to one json file in src/Admin/config.json";
    $htm[]="<ul>";
    $htm[]="<li>Title</li>";
    $htm[]="<li>Favicon</li>";
    $htm[]="<li>Layout</li>";
    $htm[]="<li>CSS</li>";
    $htm[]="<li>JS</li>";
    $htm[]="<li>Menu</li>";
    $htm[]="</ul>";
    echo $box->html($htm,"<button class='btn btn-default'>Ok</button>");
    
    // Layout
    $box=new Admin\Box;
    $box->type("solid");
    $box->title("Admin layout");
    $htm=[];
    $htm[]="<pre>";
    $htm[]="&lt;script>\n";
    $htm[]='$("body").toggleClass(cls);'."\n";
    $htm[]="&lt;/script>\n";
    $htm[]="</pre>";
    $foot=[];
    echo $box->html($htm,$foot);
    
    // Skins
    $box=new Admin\Box;
    $box->type("solid");
    $box->title("Admin skins");
    $htm=[];
    $htm[]='Skins : "skin-blue", "skin-black", "skin-red", "skin-yellow", "skin-purple", "skin-green"<br />';
    $htm[]="<pre>";
    $htm[]="&lt;script>\n";
    $htm[]='$("body").toggleClass(cls);'."\n";
    $htm[]="&lt;/script>\n";
    $htm[]="</pre>";
    $foot=[];
    
    echo $box->html($htm,$foot);
    
    ?>
    </div>


    <div class="col-md-6 col-sm-6 col-xs-12" >
     
      <?php
      $box=new Admin\Box;
      $box->title("\$admin->config()");
      $box->icon("fa fa-wrench");
      $box->collapsable(true);
      $html=[];
      $html[]="You can get/set the admin config width \$admin->config()";
      $html[]="<pre>\$admin->config()".print_r($admin->config(),true)."</pre>";
      echo $box->html($html,"<button class='btn btn-default'>Button</button>");
      // Menu config
      //$admin->config();<hr />
      //var_dump($admin->config());
      
      ?>

    </div>   <!-- /.row -->

  

  </div>   <!-- /.row -->
</section>

<script>
$(function(){
});
</script>