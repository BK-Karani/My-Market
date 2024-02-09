<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Report Incident | NOC-Report</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../dist/img/logos/favicon.ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome/css/all.min.css">
  <!-- <script src="https://kit.fontawesome.com/642a2d270c.js" crossorigin="anonymous"></script> -->
  <!-- pace-progress -->
  <link rel="stylesheet" href="../plugins/pace-progress/themes/red/pace-theme-minimal.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
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
              <h1 class="m-0">Report Incident</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Incidents</a></li>
                <li class="breadcrumb-item active">Report Incident</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-9">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Report Incident <small>Details</small></h3>
                  <div class="card-tools">
                    <span>Date: <?php echo date("d/m/y h:m"); ?></span>
                  </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="reportIncidentForm">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Client</label>
                      <div class="col-sm-10">
                        <select name="" class="custom-select" id="" style="width: 100%;">
                          <option value="">Lorem Ipsum</option>
                          <option value="">Lorem Ipsum</option>
                          <option value="">Lorem Ipsum</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Service</label>
                      <div class="col-sm-10">
                        <select name="" class="custom-select" id="" style="width: 100%;">
                          <option value="">Lorem Ipsum</option>
                          <option value="">Lorem Ipsum</option>
                          <option value="">Lorem Ipsum</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Service Issue</label>
                      <div class="col-sm-10">
                        <select name="" class="custom-select" id="" style="width: 100%;">
                          <option value="">Lorem Ipsum</option>
                          <option value="">Lorem Ipsum</option>
                          <option value="">Lorem Ipsum</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">System</label>
                      <div class="col-sm-10">
                        <select name="" class="custom-select" id="" style="width: 100%;">
                          <option value="">Lorem Ipsum</option>
                          <option value="">Lorem Ipsum</option>
                          <option value="">Lorem Ipsum</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-5">
                      <label for="" class="col-sm-2 col-form-label">Priority</label>
                      <div class="col-sm-10">
                        <select name="" class="custom-select" id="" style="width: 100%;">
                          <option value="">Low</option>
                          <option value="">Medium</option>
                          <option value="">High</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Subject</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-10">
                        <textarea id="reportDescription" name="" rows="5">

                        </textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Reported By</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="" placeholder="">
                      </div>
                    </div>



                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>  
            <!--/.col left -->          
            <div class="col-md-3">
              <div class="card card-secondary">
                <div class="card-header">
                  Assignee
                </div>
                <div class="card-tool">
                  
                </div>
                <div class="card-body">
                  
                </div>
                
              </div>
            </div>
            <!--/.col rigth -->
          </div>
          <!--/.row -->
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
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="../plugins/select2/js/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- jquery-validation -->
  <script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="../plugins/jquery-validation/additional-methods.min.js"></script>
  <!-- Summernote -->
  <script src="../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {

    // Initialize tooltips
      $('[data-toggle="tooltip"]').tooltip()

    // Summernote
      $('#reportDescription').summernote()

      bsCustomFileInput.init();
    })
  </script>
  <!-- Form input validation -->
  <script>
    $(function () {
    //Initialize data-mask
      $('[data-mask]').inputmask()

    // Initialize form validation
      $('#reportIncidentForm').validate({
        rules: {
          reportDescription: {
            required: true,
          }
        },
        messages: {
          reportDescription: {
            required: "Please enter description."
          }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
</body>
</html>