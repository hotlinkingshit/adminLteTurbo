<?php
$box= new LTE\Box;
$box->id("boxAjax");
$box->title("Ajax");
$htm=[];
$htm[]="<pre>ok wait</pre>";
$box->body($htm);
$box->footer("<a href=#btn id=btnHello class='btn btn-default'>Do it again</a> ");
$box->collapsable(1);
$box->loading(1);
echo $box;