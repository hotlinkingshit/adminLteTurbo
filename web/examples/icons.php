<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../../vendor/autoload.php";

//use LTE\AdminLte;

$admin = new LTE\AdminLte2();
$admin->title("index.php");
echo $admin->html();//
?>
<section class="content-header">
  <h1>
    <i class="fa fa-apple"></i> Icons
    <small>Pretty icons</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>


<section class="content">
  <div class="row">
    <div class="col-md-12" >
    <h1>Font awesome</h1>
    <!-- Font awesome -->
    <?php
    $htm=[];
    foreach(file("fa.csv") as $icon){
      $icon=trim($icon);
      if(!$icon)continue;
      
      $infobox=new LTE\Infobox();
      $infobox->color("green");
      $infobox->icon("fa $icon");
      $infobox->title("Font awesome");
      $infobox->value($icon);
      $htm[]="<div class='col-md-3 col-sm-6 col-xs-12'>";
      $htm[]=$infobox;
      $htm[]="</div>";
    }
    echo implode("",$htm);
    ?>
    </div>
  </div>
  <div class="row">
  
    <div class="col-md-12" >
    <!-- Ionis Icons -->
    <?php
    $box=new LTE\Box;
    $box->icon("ion-ionic");
    $box->title("Ionis Icons");
    $box->small("... :)");
    echo $box;
    ?>
    </div>

</section>

<section class="content">
  <div class="row">
    <div class="col-md-12" >
    <h1>Font awesome</h1>
    <?php
    $icons=file("ion_icons.csv");
    foreach($icons as $icon){
        $icon=trim($icon);
        if(!$icon)continue;
        echo "<div class='col-md-3 col-sm-6 col-xs-12'>";
        $infobox=new LTE\Infobox();
        $infobox->color("aqua");
        $infobox->icon("$icon");
        $infobox->title("ION ICON");
        $infobox->value($icon);
        echo $infobox;
        echo "</div>";
    }
    ?>
    </div>
  </div><!-- /.row -->                    
</section>