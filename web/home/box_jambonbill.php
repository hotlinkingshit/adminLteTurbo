<?php

$htm=[];
$htm[]="<img src='../dist/img/jambonbill.png' width=100%>";


$box=new LTE\Box;
$box->type("danger");
$box->title('Bill say "Hello"');
$box->style("danger");
$box->body($htm);

//$box->footer($btns);
echo $box;
