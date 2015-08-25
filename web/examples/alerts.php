<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../../vendor/autoload.php";

//use LTE\AdminLte;

$admin = new LTE\AdminLte2();
$admin->title("AdminLte2Turbo");
echo $admin->html();//
?>
<section class="content-header">
  <h1>
  <i class='fa fa-warning'></i> Alerts
  <small>https://almsaeedstudio.com/themes/AdminLTE/pages/UI/general.html</small>
  </h1>
</section>


<hr />

<section class="content">
  

  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12" >

      <?php
      $types=['info','success','warning','danger'];
      $body=[];
      foreach($types as $type){
        $body[]=new LTE\Alert($type,"Alert type '$type'");
      }

      $box=new LTE\Box;
      $box->icon("fa fa-warning");
      $box->title("Alerts");
      $box->collapsable(true);
      echo $box->html($body);

      ?>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12" >
      <?php
      $box=new LTE\Box;
      $box->icon("fa fa-code");
      $box->title("PHP");
      $box->id("box");
      
      $htm=[];
      $htm[]="<pre>";
      $htm[]="&lt;?php\n";
      $htm[]="new LTE\Alert(\$type,\"Alert title'\");";
      $htm[]="</pre>";
      
      $htm[]="or";
      
      $htm[]="<pre>";
      $htm[]="&lt;?php\n";
      $htm[]="\$alert=new LTE\Alert();\n";
      $htm[]="\$alert->icon('fa fa-warning');\n";
      $htm[]="echo \$alert\Alert();\n";
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
        $body[]= new LTE\Callout($type,"Callout type '$type'","Lorem ipsum");
      }
      
      $box=new LTE\Box;
      $box->icon("fa fa-warning");
      $box->title("Callout");
      $box->collapsable(true);
      echo $box->html($body);
      ?>
    </div>   <!-- /.row -->

    <div class="col-md-6 col-sm-6 col-xs-12" >
      <?php
      $box=new LTE\Box;
      $box->icon("fa fa-code");
      $box->title("PHP");
      $box->id("box");
      
      $htm=[];
      $htm[]="<pre>";
      $htm[]="&lt;?php\n";
      $htm[]="new LTE\Callout(\$type,\"Callout title\");";
      $htm[]="</pre>";
      
      echo $box->html($htm);
      ?>     
      </div>
  </div>   <!-- /.row -->

  </div>   <!-- /.row -->
</section>
<?php
$admin->footer("<a href='http://adminlteturbo.jambonbill.org'>AdminLteTurbo</a>");//define footer
$admin->end();