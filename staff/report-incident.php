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
          
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                  <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                    <li class="pt-2 px-3"><h3 class="card-title">Incident</h3></li>
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-two-details-tab" data-toggle="pill" href="#custom-tabs-two-details" role="tab" aria-controls="custom-tabs-two-details" aria-selected="true">Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-assign-tab" data-toggle="pill" href="#custom-tabs-two-assign" role="tab" aria-controls="custom-tabs-two-assign" aria-selected="false">Assign</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-resolve-tab" data-toggle="pill" href="#custom-tabs-two-resolve" role="tab" aria-controls="custom-tabs-two-resolve" aria-selected="false">Resolve</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-miscellaneous-tab" data-toggle="pill" href="#custom-tabs-two-miscellaneous" role="tab" aria-controls="custom-tabs-two-miscellaneous" aria-selected="false">Miscellaneous</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-two-details" role="tabpanel" aria-labelledby="custom-tabs-two-details-tab">
                     <!-- form start -->
                     <form id="reportIncidentForm">
                      <div class="form-group row">
                        <label for="service" class="col-sm-2 col-form-label">Service</label>
                        <div class="col-sm-10">
                          <select name="service" class="custom-select" id="service" style="width: 100%;">
                            <option value="">Select Service</option>
                            <option value="service1">Web Development</option>
                            <option value="service2">Software Testing</option>
                            <option value="service3">Network Administration</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="serviceIssue" class="col-sm-2 col-form-label">Service Issue</label>
                        <div class="col-sm-10">
                          <select name="serviceIssue" class="custom-select" id="serviceIssue" style="width: 100%;">
                            <option value="">Select Service Issue</option>
                            <option value="issue1">Website Down</option>
                            <option value="issue2">Bug in Software</option>
                            <option value="issue3">Slow Network Connection</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="system" class="col-sm-2 col-form-label">System</label>
                        <div class="col-sm-10">
                          <select name="system" class="custom-select" id="system" style="width: 100%;">
                            <option value="">Select System</option>
                            <option value="system1">Enterprise Resource Planning (ERP)</option>
                            <option value="system2">Customer Relationship Management (CRM)</option>
                            <option value="system3">Content Management System (CMS)</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                        <div class="col-sm-10">
                          <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <textarea id="reportDescription" name="" rows="5"></textarea>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Report</button>
                    </form>
                  </div><!-- /.tab pane-->
                  <div class="tab-pane fade" id="custom-tabs-two-assign" role="tabpanel" aria-labelledby="custom-tabs-two-assign-tab">
                   <form id="assignIncidentForm">
                    <div class="form-group row">
                      <label for="assignTo" class="col-sm-2 col-form-label">Assigned To</label>
                      <div class="col-sm-10">
                        <select name="assignTo" class="custom-select" id="assignTo" style="width: 100%;" disabled>
                          <option value="">Assigned To</option>
                          <!-- Populate with options for available staff members or teams -->
                          <option value="1">John Doe</option>
                          <option value="2">Jane Smith</option>
                          <option value="3">Operations Team</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="dueDate" class="col-sm-2 col-form-label">Due Date</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="dueDate">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="assignmentNotes" class="col-sm-2 col-form-label">Assignment Notes</label>
                      <div class="col-sm-10">
                        <textarea id="assignmentNotes" name="assignmentNotes" rows="5"></textarea>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Assign</button>
                  </form>
                </div><!-- /.tab pane -->
                <div class="tab-pane fade" id="custom-tabs-two-resolve" role="tabpanel" aria-labelledby="custom-tabs-two-resolve-tab">
                 <form id="resolveIncidentForm">
                  <div class="form-group row">
                    <label for="resolution" class="col-sm-2 col-form-label">Resolution</label>
                    <div class="col-sm-10">
                      <textarea id="resolution" name="resolution" rows="5"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="resolvedBy" class="col-sm-2 col-form-label">Resolved By</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="resolvedBy" placeholder="Resolved By">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="resolutionDate" class="col-sm-2 col-form-label">Resolution Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="resolutionDate">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="resolutionNotes" class="col-sm-2 col-form-label">Resolution Notes</label>
                    <div class="col-sm-10">
                      <textarea id="resolutionNotes" name="resolutionNotes" rows="5"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Resolve</button>
                </form>
              </div><!-- /.tab pane -->
              <div class="tab-pane fade" id="custom-tabs-two-miscellaneous" role="tabpanel" aria-labelledby="custom-tabs-two-miscellaneous-tab">
               <form id="miscellaneousIncidentForm">
                <div class="form-group row">
                  <label for="additionalDetails" class="col-sm-2 col-form-label">Additional Details</label>
                  <div class="col-sm-10">
                    <textarea id="additionalDetails" name="additionalDetails" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="tags" class="col-sm-2 col-form-label">Tags</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tags" placeholder="Enter tags">
                    <small id="tagsHelp" class="form-text text-muted">Separate tags with commas (e.g., tag1, tag2, tag3).</small>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="relatedIncidents" class="col-sm-2 col-form-label">Related Incidents</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="relatedIncidents" placeholder="Enter related incidents">
                    <small id="relatedIncidentsHelp" class="form-text text-muted">Enter IDs or titles of related incidents, separated by commas.</small>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div><!-- /.tab pane -->
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>  
    <!--/.col left -->          
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

    // Initialize Summernote for multiple textareas
    $('#reportDescription, #assignmentNotes, #resolution, #resolutionNotes, #additionalDetails').summernote();

    bsCustomFileInput.init();

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