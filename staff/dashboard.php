<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | NOC-Report</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../dist/img/logos/favicon.ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome/css/all.min.css">
  <!-- <script src="https://kit.fontawesome.com/642a2d270c.js" crossorigin="anonymous"></script> -->
  <!-- pace-progress -->
  <link rel="stylesheet" href="../plugins/pace-progress/themes/red/pace-theme-minimal.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.css">
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed pace-warning">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="../dist/img/logos/kplc_logo.png" alt="FreshGale Logo"height="50" width="50">
    </div>
    <!-- /.Preloader -->

    <!-- Navbar -->
    <?php include ('ui/header.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include('ui/sidebar.php'); ?>
    <!-- /.sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">

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
          
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-light">
                <div class="inner">
                  <h3>150</h3>

                  <p>Total Incidents</p>
                </div>
                <div class="icon">
                  <i class="fas fa-list-check"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>53</h3>

                  <p>Open Incidents</p>
                </div>
                <div class="icon">
                  <i class="fas fa-exclamation"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>44</h3>

                  <p>Closed Incidents</p>
                </div>
                <div class="icon">
                  <i class="fas fa-check"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>53</h3>

                  <p>Critical Incidents</p>
                </div>
                <div class="icon">
                  <i class="fas fa-triangle-exclamation"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <?php include('ui/control-sidebar.php'); ?>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?php include('../assets/ui/footer.php'); ?>
    <!-- /.Main Footer -->
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- pace-progress -->
  <script src="../plugins/pace-progress/pace.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>
</html>