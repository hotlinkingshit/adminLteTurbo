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
  <h1><i class='fa fa-warning'></i> Alerts</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>

https://almsaeedstudio.com/themes/AdminLTE/pages/UI/general.html
<hr />

<section class="content">
  

  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12" >

      <?php
      $types=['warning','danger','info','success'];
      $body=[];
      foreach($types as $type){
        $body[]=new Admin\Alert($type,"Alert type '$type'");
      }

      $box=new Admin\Box;
      $box->icon("fa fa-warning");
      $box->title("Alerts");
      $box->collapsable(true);
      echo $box->html($body);

      ?>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12" >
      <?php
      $box=new Admin\Box;
      $box->icon("fa fa-code");
      $box->title("PHP");
      $box->id("box");
      
      $htm=[];
      $htm[]="<pre>";
      $htm[]="&lt;?php\n";
      $htm[]="new Admin\Alert(\$type,\"Alert title'\");";
      $htm[]="</pre>";
      
      echo $box->html($htm);
      ?>     
      </div>
    
    </div>   <!-- /.row -->

  <div class="row">
    
    <div class="col-md-6 col-sm-6 col-xs-12" >
      <?php
      //Callouts
      $body=[];
      foreach($types as $type){
        $body[]= new Admin\Callout($type,"Callout type '$type'","Lorem ipsum");
      }
      
      $box=new Admin\Box;
      $box->icon("fa fa-warning");
      $box->title("Callout");
      $box->collapsable(true);
      echo $box->html($body);
      ?>
    </div>   <!-- /.row -->

    <div class="col-md-6 col-sm-6 col-xs-12" >
      <?php
      $box=new Admin\Box;
      $box->icon("fa fa-code");
      $box->title("PHP");
      $box->id("box");
      
      $htm=[];
      $htm[]="<pre>";
      $htm[]="&lt;?php\n";
      $htm[]="new Admin\Callout(\$type,\"Callout title\");";
      $htm[]="</pre>";
      
      echo $box->html($htm);
      ?>     
      </div>
  </div>   <!-- /.row -->

  </div>   <!-- /.row -->
</section>
