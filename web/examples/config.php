<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../../vendor/autoload.php";

$admin = new Admin\AdminLte2();

//config override example
$cnf=$admin->config();
//$cnf->menu->header->text="Config";
$cnf->menu->separator->text="";
//unset($cnf->menu->separator->text);
$cnf->menusearch=false;
$cnf->menu->links=[];
$cnf->menu->examples=[];

//echo "<pre>";var_dump($menu);exit;


$htm=[];
$htm[]='<ul class="nav navbar-nav">';
$htm[]='<li class="dropdown user user-menu">';
    $htm[]='<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
      //$htm[]='<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">';
      $htm[]='<span class="hidden-xs">Configurable username</span>';
    $htm[]='</a>';
    $htm[]='<ul class="dropdown-menu">';
      
      //<!-- User image -->
      
      $htm[]='<li class="user-header">';
        //$htm[]='<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">';
        $htm[]='<p>';
          $htm[]='User name - email@domain.com';
          $htm[]='<small>Member since Nov. 2012</small>';
        $htm[]='</p>';
      $htm[]='</li>';
      
      //<!-- Menu Footer-->
      $htm[]='<li class="user-footer">';
        //$htm[]='<div class="pull-left"><a href="#" class="btn btn-default btn-flat">Profile</a></div>';
        $htm[]='<div class="pull-right"><a href="#" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a></div>';
      $htm[]='</li>';
    $htm[]='</ul>';
  $htm[]='</li>';
  $htm[]='</ul>';

$admin->navbarCustomMenu($htm);


$admin->userPanel('<div class="pull-left info"><p>Configurable username</p><a href="#"><i class="fa fa-circle text-success"></i> Online</a></div>');


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
    $htm[]="Layout classes (fixed, layout-boxed, sidebar-collapse) are set in the config file,<br />";
    $htm[]="And can be changed on the fly with javascript: ";
    $htm[]="<pre>";
    $htm[]="&lt;script>\n";
    $htm[]='$("body").toggleClass(cls);'."\n";
    $htm[]="&lt;/script>\n";
    $htm[]="</pre>";
    $foot=[];
    $foot[]="<a href=#btn class='btn btn-default' onclick=$('body').toggleClass('fixed')><i class='fa fa-retweet'></i> fixed</a> ";
    $foot[]="<a href=#btn class='btn btn-default' onclick=$('body').toggleClass('layout-boxed')><i class='fa fa-retweet'></i> layout-boxed</a> ";
    $foot[]="<a href=#btn class='btn btn-default' onclick=$('body').toggleClass('sidebar-collapse')><i class='fa fa-retweet'></i> sidebar-collapse</a> ";

    echo $box->html($htm,$foot);
    
    // Skins
    $box=new Admin\Box;
    $box->type("solid");
    $box->title("Admin skins");
    $htm=[];
    $htm[]='Skins : "skin-blue", "skin-black", "skin-red", "skin-yellow", "skin-purple", "skin-green"<br />';
    $htm[]="<pre>";
    $htm[]="&lt;script>\n";
    $htm[]='$("body").removeClass(old_skin);'."\n";
    $htm[]='$("body").addClass(new_skin);'."\n";
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
      $box->collapsed(true);
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