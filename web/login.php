<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../vendor/autoload.php";

use Admin\AdminLte;

$admin = new AdminLte2();
$admin->title("Login page");
echo $admin->printPublic();//
?>
<section class="content-header">
  <h1>
    Login page
    <small>Optional description</small>
  </h1>
</section>

<div class='content'>

Hello World :)

</div>
<?php


//lets test a few boxes
echo new Admin\Callout("Test");