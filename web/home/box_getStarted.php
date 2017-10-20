<?php
$box= new LTE\Box;
$box->title("Get started");
$htm=[];
$htm[]="<pre>\n";
$htm[]="&lt;?php\n";
$htm[]="header('Content-Type: text/html; charset=utf-8');\n";
$htm[]="require __DIR__.'/../vendor/autoload.php';\n";
$htm[]="\n";
$htm[]="\$admin = new LTE\AdminLte2();\n";
$htm[]="\$admin->title('My title');\n";
$htm[]="\n";
$htm[]="echo \$admin;\n";
$htm[]="</pre>";
$box->body($htm);
$box->footer("<a href='examples/config.php' class='btn btn-default'>Ok</a> ");
$box->collapsable(1);
echo $box;