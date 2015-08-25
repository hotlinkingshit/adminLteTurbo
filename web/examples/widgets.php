<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../../vendor/autoload.php";

$admin = new LTE\AdminLte2();
$admin->title("AdminLte2Turbo");
echo $admin->html();//



?>
<section class="content-header">
  <h1>
    Widgets
    <small>https://almsaeedstudio.com/themes/AdminLTE/pages/widgets.html</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>

<section class="content">

          <div class="row">
            
            <div class="col-md-3 col-sm-6 col-xs-12">
            
            <?php
            $o=new LTE\Infobox();
            $o->color("aqua");
            $o->icon("fa fa-cog");
            $o->title("rand(1,100)");
            $o->value(rand(1,100));
            echo $o;
            ?>
<pre>
$o=new LTE\Infobox();
$o->color("aqua");
$o->icon("fa fa-cog");
$o->title("rand(1,100)");
$o->value(rand(1,100));
echo $o;
</pre>
            </div><!-- /.col -->
            
            <div class="col-md-3 col-sm-6 col-xs-12">
            <?php
            $o->icon("fa fa-flag");
            $o->color("green");
            echo $o;
            ?>            
            </div><!-- /.col -->
            
            <div class="col-md-3 col-sm-6 col-xs-12">           
            <?php
            $o->icon("fa fa-files-o");
            $o->color("yellow");
            echo $o;
            ?>            
            </div><!-- /.col -->
            
            <div class="col-md-3 col-sm-6 col-xs-12">
            <?php
            $o->icon("fa fa-star-o");
            $o->color("red");
            echo $o;
            ?>            
            </div><!-- /.col -->
          </div><!-- /.row -->                    

          <!-- =========================================================== -->

          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
            <?php
            $o=new LTE\Infobox();
            $o->classname("info-box bg-aqua");
            $o->icon("fa fa-cog");
            $o->title("rand(1,100)");
            $o->value(rand(1,100));
            $o->progressValue(rand(1,100));
            $o->description("Lorem ipsum dolor sit amet");
            echo $o;
            ?>
<pre>
$o=new LTE\Infobox();
$o->classname("info-box bg-aqua");
$o->icon("fa fa-cog");
$o->title("rand(1,100)");
$o->value(rand(1,100));
$o->progressValue(rand(1,100));
$o->description("Lorem ipsum dolor sit amet");
echo $o;
</pre>
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Progress</span>
                  <span class="info-box-number">41,410</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">
                    70% Progress
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Events</span>
                  <span class="info-box-number">41,410</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Comments</span>
                  <span class="info-box-number">41,410</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- =========================================================== -->

          <!-- Small boxes (Stat box) -->
          

        </section>
<?php
$admin->footer("<a href='http://adminlteturbo.jambonbill.org'>AdminLteTurbo</a>");//define footer
$admin->end();