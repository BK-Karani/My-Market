<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in - Staff | NOC-Report</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../dist/img/logos/favicon.ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome/css/all.min.css">
  <!-- <script src="https://kit.fontawesome.com/642a2d270c.js" crossorigin="anonymous"></script> -->
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.css">
</head>
<body class="hold-transition login-page">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../dist/img/logos/kplc_logo.png" alt="FreshGale Logo"height="50" width="50">
  </div>

  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Staff</b> | NOC-R</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form class="mb-3" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="" placeholder="Staff no. or email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fa-solid fa-user"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <button type="submit" name="adminLogin" class="btn bg-primary btn-block">Get OTP</button>
            </div>
            <!-- /.col -->
          </div>

          <!-- Alerts -->
          <!-- <div class="row">
            <div class="col-auto">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my
                entire
                soul, like these sweet mornings of spring which I enjoy with my whole heart.
              </div>
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-info"></i> Alert!</h5>
                Info alert preview. This alert is dismissable.
              </div>
              <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                Warning alert preview. This alert is dismissable.
              </div>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Success alert preview. This alert is dismissable.
              </div>
            </div>  -->
            <!-- /.col -->
          <!-- </div> -->
          <!-- /.row -->
          <!-- /.alerts -->
          
        </form>

        <div class="text-center mt-2 mb-3">
          <a href="../" class="btn btn-tool">
            <i class="fa-solid fa-arrow-circle-left mr-2"></i> Cancel
          </a>
        </div>

        <!-- <p class="mb-1">
          <a href="#">I forgot my password</a>
        </p> -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>
</html>