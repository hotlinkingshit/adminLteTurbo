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

<div class="login-box">

  <div class="login-logo">
    <a href="index.php"><b>Admin</b>LTE<i>Turbo</i></a>
  </div><!-- /.login-logo -->

  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name='email' placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name='password' placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">

        </div><!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div><!-- /.col -->
      </div>
    </form>


    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div><!-- /.login-box-body -->
</div>



<script>
$(function(){
	//hide sidebar
	$("body").toggleClass('sidebar-collapse');
	console.log('ready');
});
</script>