<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../../vendor/autoload.php";


$admin = new LTE\AdminLte2();
$admin->title("Modals");
echo $admin;//
?>
<section class="content-header">
  <h1> Modals <small>https://almsaeedstudio.com/themes/AdminLTE/pages/UI/modals.html</small> </h1>

</section>

<section class="content">

<div class='row'>
	<div class='col-md-6'>
	<?php
	$box=new LTE\Box;
	$box->title('Modal types');
	$htm=[];
	$htm[]="<a href=#btn class='btn btn-default'>default</a> ";
	$htm[]="<a href=#btn class='btn btn-default'>primary</a> ";
	$htm[]="<a href=#btn class='btn btn-default'>danger</a> ";
	$htm[]="<a href=#btn class='btn btn-default'>success</a> ";
	$htm[]="<a href=#btn class='btn btn-default'>warning</a> ";
	$htm[]="<a href=#btn class='btn btn-default'>info</a> ";
	$box->body($htm);
	echo $box;

	$box=new LTE\Box;
	$box->icon('fa fa-code');
	$box->title('PHP');
	
	$htm=[];
	$htm[]='<pre>';
	$htm[]='&lt;?php'."\n";
	$htm[]='$modal=new LTE\Modal;'."\n";
	$htm[]='$modal->type("default");'."\n";
	$htm[]='$modal->icon("string");'."\n";
	$htm[]='$modal->title("string");'."\n";
	$htm[]='$modal->body("string");'."\n";
	$htm[]='$modal->footer("string");'."\n";
	$htm[]='echo $modal;';
	$htm[]='</pre>';

	$box->body($htm);
	echo $box;
	?>
	</div>
	<div class='col-md-6'>
	<?php
	$box=new LTE\Box;
	$box->icon('fa fa-code');
	$box->title('Javascript');
	//$box->body();
	//$box->footer();
	echo $box->html('<pre>test</pre>','<a href="#btn" class="btn btn-default" onclick="$(\'#myModal\').modal(true);">$(\'#myModal\').modal(true);</a>');	
	?>	
	</div>
</div>


<?php
$modal = new LTE\Modal;
$modal->id("myModal");
$modal->icon("fa fa-user");
//$modal->body("<pre>".print_r($_SERVER,true)."</pre>");

echo $modal;
?>
</section>

<script>
$(function(){
  $("#myModal").modal(true);
});
</script>

<?php
$admin->footer("<a href='http://adminlteturbo.jambonbill.org'>AdminLteTurbo</a>");//define footer
$admin->end();
