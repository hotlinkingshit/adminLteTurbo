<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../vendor/autoload.php";


$admin = new Admin\AdminLte2();
$admin->title("Logout");
echo $admin->html();//
?>

Logout...