<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require __DIR__."/../../vendor/autoload.php";


$admin = new LTE\AdminLte2();
$admin->title("Login");
$admin->config()->menusearch=false;//disable menu search
$admin->config()->menu=(object)[];//unset the global menu
echo $admin->html();//
?>
<section class='content'>
<pre>
<?php
print_r($_POST);
?>
<script>
setTimeout("document.location.href='../';",2000);
</script>