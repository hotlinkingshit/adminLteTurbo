<?php
//ctrl
header('Content-Type: application/json');
session_start();

require __DIR__ . "/../../vendor/autoload.php";

$dat = [];
$dat['POST'] = $_POST;
if(!isset($_POST['do']))exit();

switch ($_POST['do']) {

    default:
    	sleep(2);
    	$dat['msg']="Server say hello @".date('c');
        exit(json_encode($dat));
}
