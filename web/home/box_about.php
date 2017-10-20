<?php
$box= new LTE\Box;
$box->icon("fa fa-question");
$box->type("warning");
$box->title("About");
$box->removable(1);
$box->collapsable(1);

$body=[];
$body[]="AdminLteTurbo is a php classed, striped down version of <a href='https://almsaeedstudio.com/'>Almaseed AdminLTE2</a> which is based on twitter <a href='http://getbootstrap.com/'>Bootstrap</a><br />";
$body[]="The goal is to help develop web/php apps super quickly, with little dependencies.<br />";
$box->body($body);

$foot=[];
$foot[]="<a href='examples/config.php' class='btn btn-default'><i class='fa fa-wrench'></i> Configuration</a> ";
$foot[]="<a href='examples/' class='btn btn-default'><i class='fa fa-list'></i> Examples</a> ";
$box->footer($foot);


echo $box;