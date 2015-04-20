<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../vendor/autoload.php";

$admin = new Admin\AdminLte2();
$admin->menu("Config");
//$admin->config()->menusearch=false;
$admin->config()->menu=false;
echo $admin->html();//

//echo new Admin\Contentheader('title','icon','small');
?>
<section class="content-header">
  <h1><i class='fa fa-list'></i> Config <small>Configuration</small></h1>
</section>


<section class="content">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12" >
     
      <?php
      $box=new Admin\Box;
      $box->title("\$admin->config()");
      $box->icon("fa fa-wrench");
      $html=[];
      $html[]="You can get/set the admin config width \$admin->config()";
      $html[]="<pre>\$admin->config()".print_r($admin->config(),true)."</pre>";
      echo $box->html($html,"<button class='btn btn-default'>Button</button>");
      // Menu config
      //$admin->config();<hr />
      //var_dump($admin->config());
      
      ?>

    </div>   <!-- /.row -->

  <div class="col-md-6 col-sm-6 col-xs-12" >
  <?php
  /*
  $box=new Admin\Box;
  $box->title("Javascript");
  $box->icon("fa fa-bolt");
  $html=[];
  $html[]="Of course you can manipulate the menu with javascript too:";
  $html[]="<pre>$('ul.sidebar-menu li')</pre>";
  echo $box->html($html,"<button class='btn btn-default'>Button</button>");
  */
  ?>
  </div>

  </div>   <!-- /.row -->
</section>

<script>
$(function(){
});
</script>