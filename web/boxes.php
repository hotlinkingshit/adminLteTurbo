<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../vendor/autoload.php";

//use Admin\AdminLte;

$admin = new Admin\AdminLte2();
$admin->title("AdminLte2Turbo");
echo $admin->printPublic();//
?>
<section class="content-header">
  <h1><i class='fa fa-list-alt'></i> Boxes<small>Little boxes</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>


<section class="content">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12" >
      <?php
      
      $types=['default','warning','danger','info','success'];
      
      foreach($types as $type)
      {
        $box=new Admin\Box;
        $box->title("Box type '$type'");
        //$box->icon("fa fa-user");
        $box->type($type);
        $box->id("box-$type");
        $box->removable(true);
        
        //$box->loading(true);
        echo $box->html("Box body","<button class='btn btn-default'>Ok</button>");  
      }
      
      ?>
    </div>   <!-- /.row -->
    
    <div class="col-md-6 col-sm-6 col-xs-12" >
    <?php
    $box=new Admin\Box;
    $box->icon("fa fa-code");
    $box->title("Php");
    $box->collapsable(true);
    $htm=[];
    $htm[]='<pre>'."\n";
    $htm[]='&lt;?php'."\n";
    $htm[]='$box=new Admin\Box;'."\n";
    $htm[]='$box->title("box title");'."\n";
    $htm[]='$box->type("default");'."\n";
    $htm[]='$box->id("mybox");'."\n";
    $htm[]='$box->collapsabe(true);'."\n";
    $htm[]='$box->removable(false);'."\n";
    $htm[]='echo $box'."\n";
    $htm[]='</pre>';
    echo $box->html($htm,"<button class='btn btn-default'>Ok</button>");  
    ?>

    </div>   <!-- /.row -->

  </div>   <!-- /.row -->
</section>
