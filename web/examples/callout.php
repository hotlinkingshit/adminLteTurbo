<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../../vendor/autoload.php";

$admin = new LTE\AdminLte2();
$admin->title("Callout");
echo $admin->printPublic();//
?>
<section class="content-header">
  <h1>
    Callout(s)
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>

<section class="content">
  <div class="row">

    <div class="col-md-6 col-sm-6 col-xs-12" >
      <pre>echo new LTE\Callout("danger","title","body");</pre>  
      <hr />
      <?php echo new LTE\Callout("danger","title","body");?>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12" >
    
      <div class="callout callout-info">
        <h4>Callout title <small>callout callout-info</small></h4>
        <p><b>This</b> is the text you could write by yourself if you were not so lazy.</p>
      </div>

      <div class="callout callout-warning">
        <h4>Callout title <small>callout callout-warning</small></h4>
        <p><b>This</b> is the text you could write by yourself if you were not so lazy.</p>
      </div>

      <div class="callout callout-success">
        <h4>Callout title <small>callout callout-success</small></h4>
        <p><b>This</b> is the text you could write by yourself if you were not so lazy.</p>
      </div>

    </div>

  </div>
  
</section>