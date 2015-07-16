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
    Page Header
    <small>Optional description</small>
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
            $infobox=new LTE\Infobox();
            $infobox->color("aqua");
            $infobox->icon("fa fa-cog");
            $infobox->title("rand(1,100)");
            $infobox->value(rand(1,100));
            echo $infobox;
            ?>
            
            </div><!-- /.col -->
            
            <div class="col-md-3 col-sm-6 col-xs-12">
            <?php
            $infobox->icon("fa fa-flag");
            $infobox->color("green");
            echo $infobox;
            ?>            
            </div><!-- /.col -->
            
            <div class="col-md-3 col-sm-6 col-xs-12">           
            <?php
            $infobox->icon("fa fa-files-o");
            $infobox->color("yellow");
            echo $infobox;
            ?>            
            </div><!-- /.col -->
            
            <div class="col-md-3 col-sm-6 col-xs-12">
            <?php
            $infobox->icon("fa fa-star-o");
            $infobox->color("red");
            echo $infobox;
            ?>            
            </div><!-- /.col -->
          </div><!-- /.row -->                    

          <!-- =========================================================== -->

          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
            <?php
            $infobox=new LTE\Infobox();
            $infobox->classname("info-box bg-aqua");
            //$infobox->color("aqua");
            $infobox->icon("fa fa-cog");
            $infobox->title("rand(1,100)");
            $infobox->value(rand(1,100));
            echo $infobox;
            ?>
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
          
          <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <?php
                $smallbox=new LTE\Smallbox();
                $smallbox->color("aqua");
                $smallbox->icon("fa fa-user");
                $smallbox->title("rand(10,100)");
                $smallbox->value(rand(10,100));
                $smallbox->url('http://www.pouet.net/');
                echo $smallbox;
                ?>
            </div><!-- ./col -->
            
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <?php
                $smallbox=new LTE\Smallbox();
                $smallbox->color("green");
                $smallbox->icon("fa fa-user-plus");//ion ion-pie-graph
                $smallbox->title("rand(10,100)");
                $smallbox->value(rand(10,100));
                $smallbox->url('http://www.pouet.net/');
                echo $smallbox;
                ?>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box  -->
              <?php
                $smallbox=new LTE\Smallbox();
                $smallbox->color("yellow");
                $smallbox->icon("ion ion-person-add");
                $smallbox->title("rand(10,100)");
                $smallbox->value(rand(10,100));
                $smallbox->url('http://www.pouet.net/');
                echo $smallbox;
                ?>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <?php
                $smallbox=new LTE\Smallbox();
                $smallbox->color("red");
                $smallbox->icon("ion ion-pie-graph");
                $smallbox->title("rand(10,100)");
                $smallbox->value(rand(10,100));
                $smallbox->url('http://www.pouet.net/');
                echo $smallbox;
                ?>
            </div><!-- ./col -->
          </div><!-- /.row -->

        </section>