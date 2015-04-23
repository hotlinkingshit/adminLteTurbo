<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../../vendor/autoload.php";

$admin = new Admin\AdminLte2();
$admin->title("Timeline");

echo $admin->html();//

?>
<section class="content-header">
  <h1>
    <i class="fa fa-clock-o"></i> Timeline
  </h1>
</section>


<section class="content">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12" >
    <!-- Font awesome -->
    <?php
    $tl=new Admin\Timeline;
    echo $tl;
    ?>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12" >
    <!-- Ionis Icons -->
    <?php
    $box=new Admin\Box;
    $box->icon("fa fa-clock-o");
    $box->title("Timeline");
    $htm=[];
    $htm[]="<pre>";
    $htm[]="&lt;?php\n";
    $htm[]="\$tl=new Admin\Timeline;\n";
    $htm[]="echo \$tl;\n";
    $htm[]="</pre>";

    $box->html($htm);
    echo $box;
    ?>
    </div>

  </div>
</div>


</section>