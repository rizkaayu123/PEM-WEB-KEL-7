<?php 
  session_start();
  include_once '../lib/class-db.php';
  include_once '../lib/class-ff.php';
  if (isset($_SESSION['user'])) {
    if ($_SESSION['level']==='admini') {
      $ff->redirect("admin.php");
    }
    else{
      $ff->redirect("../../indexuser.php");
    }
  }
  $err="Silahkan isikan data anda dan klik login untuk melanjutkan!!";

  if (isset($_GET['err'])) {
    switch ($_GET['err']) {
      case 1:
        $err="Mohon lengkapi data anda!!";
        break;
      case 2:
        $err="Kombinasi username dan password tidak ditemukan!!";
        break;
      default:
        $err="Silahkan isikan data anda dan klik sign in untuk melanjutkan!!";
        break;
    }
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WETOGETHER | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
   <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="../../dist/css/skins/skin-purple.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box bg-purple" style="box-shadow: 0 0.15rem 1rem rgba(0,0,0,.15); padding-top: 10px">
  <div class="login-logo">
    <a href="../../index2.html" style="color: white"> <b>Web Donasi</b></a><br>
    <p style="font-size: 18px">WETOGETHER</p>

  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><?=$err?></p>

    <form action="login-proses.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username" autofocus="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4 pull-right">
          <button type="submit" name="submit" class="btn btn-block btn-flat bg-yellow">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="register.php" class="text-center">Register</a>
    <div class="pull-right"><div style="opacity: 30%">WETOGETHER</div>
</div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>