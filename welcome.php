<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome | NOC-Report</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="dist/img/logos/favicon.ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- <script src="https://kit.fontawesome.com/642a2d270c.js" crossorigin="anonymous"></script> -->
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <style>
    body {
/*      background-image: url('dist/img/background/'); */
background-repeat: no-repeat; 
background-attachment: fixed;
background-size: cover;
max-width: 100%; height: auto;
}
</style>
</head>
<body class="hold-transition login-page">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/logos/kplc_logo.png" alt="KPLC Logo"height="50" width="50">
  </div>
  
  <div class="login-box">

    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-body login-card-body">
        <div class="text-center">
          <img class="login-bg brand-image mb-3" src="dist/img/logos/kplc_logo.png" alt="KPLC Logo" style="max-width: 100%; height: auto; width: 100px; height: 100px;" >
          <div class="login-logo">
            <a href="#"><b>NOC-Report</b></a>
          </div>
          <p class="login-box-msg">Select user to start your session</p>
        </div>

        <div class="text-center mb-3">
          <a href="#" class="btn btn-block bg-primary" onclick="window.location='admin/'">
            <i class=""></i> Admin
          </a>
          <a href="#" class="btn btn-block bg-primary" onclick="window.location='staff/'">
            <i class=""></i> Staff
          </a>
        </div>
        <!-- /.social-auth-links -->
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>
</html>