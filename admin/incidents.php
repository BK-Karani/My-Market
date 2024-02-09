<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Incidents | NOC-Report</title>

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="../dist/img/logos/favicon.ico">
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="../plugins/fontawesome/css/all.min.css">
	<!-- <script src="https://kit.fontawesome.com/642a2d270c.js" crossorigin="anonymous"></script> -->
	<!-- pace-progress -->
	<link rel="stylesheet" href="../plugins/pace-progress/themes/red/pace-theme-minimal.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../dist/css/adminlte.css">
	<style>
		/* custom button styles additions*/
		.delete-btn {
			/* Default button style */
		}

		.delete-btn:hover {
			/* Style to apply on hover */
			background-color: #dc3545; /* Red background color */
			border-color: #dc3545; /* Red border color */
			color: #fff; /* White text color */
		}
	</style>
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
							<h1 class="m-0">Incidents</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
								<li class="breadcrumb-item active">Incidents</li>
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
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Incidents <small>Detail</small></h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table id="incidentsTable" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Date</th>
												<th>Client</th>
												<th>Service</th>
												<th>Issue</th>
												<th>Priority</th>
												<th>Assignee</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php echo date("d/m/y h:m");?></td>
												<td>John Doe</td>
												<td>Service</td>
												<td>Oh, idk, blah blah blah</td>
												<td>Low</td>
												<td>James Smith</td>
												<td class="project-actions text-right">
													<a class="btn btn-default btn-sm" href="#">
														<i class="fa-solid fa-eye" title="View"></i>
													</a>
													<a class="btn btn-default btn-sm" href="#">
														<i class="fa-solid fa-pen" title="Edit"></i>
													</a>
													<a class="btn btn-default btn-sm delete-btn" href="#" title="Delete" style="">
														<i class="fas fa-trash"></i>
													</a>
												</td>
											</tr>
											
										</tbody>
										<tfoot>
											<tr>
												<th>Date</th>
												<th>Client</th>
												<th>Service</th>
												<th>Issue</th>
												<th>Priority</th>
												<th>Assignee</th>
												<th>Action</th>
											</tr>
										</tfoot>
									</table>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
					</div>
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
	<!-- DataTables  & Plugins -->
	<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="../plugins/jszip/jszip.min.js"></script>
	<script src="../plugins/pdfmake/pdfmake.min.js"></script>
	<script src="../plugins/pdfmake/vfs_fonts.js"></script>
	<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
	<!-- AdminLTE App -->
	<script src="../dist/js/adminlte.min.js"></script>
	<!-- Page specific script -->
	<script>
		$(function () {
			$("#incidentsTable").DataTable({
				"responsive": true, "lengthChange": false, "autoWidth": false,
				"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
			}).buttons().container().appendTo('#incidentsTable_wrapper .col-md-6:eq(0)');
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			});
		});
	</script>
</body>
</html>