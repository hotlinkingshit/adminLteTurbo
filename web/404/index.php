<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../../vendor/autoload.php";

$admin = new LTE\AdminLte2();
$admin->config()->menu=(object)[];//unset the global menu
$admin->title("404");
echo $admin;//
?>

<section class="content">

<div class='row'>
  <div class='col-sm-12'>

    <h1 style="font-size:128px">404</h1>
    <h1 style="font-size:64px"><i class="fa fa-warning"></i> Page Not Found <small></small></h1>
    <br>

    <p>The page you requested could not be found</p>
    <br />
    <br />
    <br />
    <br />
    <br />

  </div>
</div>
</section>
<?php
$admin->end();