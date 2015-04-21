<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../vendor/autoload.php";


$admin = new Admin\AdminLte2();
$admin->title("Modals");
echo $admin;//
?>
<section class="content-header">
  <h1>
    Modals
    <small>Pretty modal windows</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>

<section class="content">

<div class='row'>
	<div class='col-md-6'>
	<?php
	$box=new Admin\Box;
	$box->icon('fa fa-code');
	$box->title('PHP');
	
	$htm=[];
	$htm[]='<pre>';
	$htm[]='&lt;?php'."\n";
	$htm[]='new Admin\Modal("Titre de la fenetre modal","Body","Footer")';
	$htm[]='</pre>';

	$box->body($htm);
	echo $box;
	?>
	</div>
	<div class='col-md-6'>
	<?php
	$box=new Admin\Box;
	$box->icon('fa fa-code');
	$box->title('Javascript');
	//$box->body();
	//$box->footer();
	echo $box->html('<pre>test</pre>','<a href=# class="btn btn-default">myModal.show()</a>');
	?>	
	</div>
</div>


<?php
$modal = new Admin\Modal("Titre de la fenetre modal","Body","Footer");
$modal->id("modalwindow");
$modal->icon("fa fa-user");
echo $modal;
?>
</section>

<script>
$(function(){
  $("#modalwindow").modal(true);
});
</script>