<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../../vendor/autoload.php";


$admin = new Admin\AdminLte2();
$admin->title("Logout");
$admin->config()->menusearch=false;
$admin->config()->menu=(object)[];

echo $admin->html();//

// Write your logout code here

// You could also redirect to the login page
?>

<section class='content'>

<div class="login-box">
		<h1>Bye !</h1>
		<pre>redirecting to the login page...</pre>
</div>

<script>
$(function(){
	$("body").toggleClass('sidebar-collapse');
	setTimeout("document.location.href='index.php';",3000);
});
</script>