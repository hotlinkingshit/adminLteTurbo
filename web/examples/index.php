<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../../vendor/autoload.php";

$admin = new LTE\AdminLte2();
$admin->title("Examples");

$cnf=$admin->config();
$cnf->menusearch=false;
$cnf->menu=(object)[];//reset the menu

$cnf->menu->header=(object)[];
$cnf->menu->header->class="header";
$cnf->menu->header->text="Examples";

$cnf->menu->test=(object)[];
$cnf->menu->test->class="header";
$cnf->menu->test->text="Test header";

//$cnf->menu->links='';

echo $admin->html();

?>
<section class="content-header">
  <h1><i class='fa fa-list'></i> Examples </h1>
</section>

<div class='content'>

<section class="content">
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
    <?php
      
	  ?>
    </div><!-- /.col -->
  </div><!-- /.row -->                    
</section>

</div>
