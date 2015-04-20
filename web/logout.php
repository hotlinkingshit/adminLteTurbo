<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../vendor/autoload.php";


$admin = new Admin\AdminLte2();
$admin->title("Logout");
$admin->config()->menu=false;

echo $admin->html();//
?>

<section class='content'>

<h1>Bye !</h1>
<script>
$(function(){
	$("body").toggleClass('sidebar-collapse');
});
</script>