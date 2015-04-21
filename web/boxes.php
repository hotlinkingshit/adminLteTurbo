<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../vendor/autoload.php";

//use Admin\AdminLte;

$admin = new Admin\AdminLte2();
$admin->title("AdminLte2Turbo");
echo $admin->html();//
?>
<section class="content-header">
  <h1><i class='fa fa-list-alt'></i> Boxes<small>Little boxes</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>


<section class="content">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12" >
      <?php
      
      $types=['default','primary','info','success','warning','danger','solid'];
      
      foreach($types as $type)
      {
        $box=new Admin\Box;
        $box->title("Box type '$type'");
        //$box->icon("fa fa-user");
        $box->type($type);
        $box->id("box-$type");
        $box->removable(true);
        $box->collapsable(true);
        
        $body=[];
        $body[]="<pre>";
        $body[]="&lt;?php\n";
        $body[]="\$box=new Admin\Box;\n";
        $body[]="\$box->type(\"box-$type\");\n";
        $body[]="</pre>";
        echo $box->html($body,"<button class='btn btn-default'>Ok</button>");  
      }
      
      ?>
    </div>   <!-- /.row -->
    
    <div class="col-md-6 col-sm-6 col-xs-12" >
    <?php
    $box=new Admin\Box;
    $box->icon("fa fa-code");
    $box->title("Php");
    $box->collapsable(true);
    $btns ="<button class=\"btn btn-box-tool\" title='Example'><i class='fa fa-comments'></i></button>";
    $btns ="<button class=\"btn btn-box-tool\" title='Example'><i class='fa fa-save'></i></button>";
    $btns ="<span data-toggle='tooltip' title='' class='badge bg-yellow' data-original-title='3 New Messages'>3</span>";
    //<span data-toggle="tooltip" title="" class="badge bg-yellow" data-original-title="3 New Messages">3</span>
    $box->boxTools($btns);
    //$box->boxTools("<button class=\"btn btn-box-tool\" title='Example'><i class='fa fa-save'></i></button>");
    
    $htm=[];
    $htm[]='<pre>'."\n";
    $htm[]='&lt;?php'."\n";
    $htm[]='$box=new Admin\Box;'."\n";
    $htm[]='$box->title("box title");'."\n";
    $htm[]='$box->type("default");'."\n";
    $htm[]='$box->id("mybox");'."\n";
    $htm[]='$box->collapsabe(true);'."\n";
    $htm[]='$box->removable(false);'."\n";
    $htm[]='echo $box'."\n";
    $htm[]='</pre>';
    echo $box->html($htm);
    
    $box=new Admin\Box;
    $box->id("thisbox");
    $box->icon("fa fa-refresh");
    $box->title("Box loading state");
    
    $htm=[];
    $htm[]="Box loading state can be set with php<br />";
    
    $htm[]='<pre>'."\n";
    $htm[]='&lt;?php'."\n";
    $htm[]='$box=new Admin\Box;'."\n";
    $htm[]='$box->id("thisbox");'."\n";
    $htm[]='$box->loading(true);'."\n";
    $htm[]='</pre>';

    $htm[]="and changed with javascript<br />";
    $htm[]="<pre>";
    $htm[]="&lt;script>\n";
    $htm[]="\$('#thisbox .overlay').show()\n";
    $htm[]="\$('#thisbox .overlay').hide()\n";
    $htm[]="&lt;/script>";
    $htm[]="</pre>";
    $foot=[];
    //$foot[]="<button class='btn btn-default'>$('#thisbox .overlay').hide()</button> ";
    $foot[]="<button class='btn btn-default' onclick=\"$('#thisbox .overlay').show()\"><i class='fa fa-play'></i> $('#thisbox .overlay').show()</button> ";
    echo $box->html($htm,$foot);
    ?>

    </div>   <!-- /.row -->

  </div>   <!-- /.row -->
</section>
