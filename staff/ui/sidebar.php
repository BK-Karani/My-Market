<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="dashboard.php" class="brand-link">
    <img src="../dist/img/logos/kplc_logo.png" alt="KPLC Logo" class="brand-image" style="opacity: .8">
    <span class="brand-text font-weight-light">NOC-Report</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../dist/img/avatars/default_avatar.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Username</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger" title="Escaleted Incidents">53</span>
              </p>
            </a>
          </li>
          <li class="nav-item menu-closed">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-circle-exclamation"></i>
              <p>
                Incidents
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="report-incident.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Report Incident</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="incidents.php" class="nav-link">
                  <i class="fas fa-list-check nav-icon"></i>
                  <p>View All</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-closed">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calculator"></i>
              <p>
                Metrics
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-chart-line nav-icon"></i>
                  <p>Severity Distribution</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-layer-group nav-icon"></i>
                  <p>Incident Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-business-time nav-icon"></i>
                  <p>Response Time</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-timeline nav-icon"></i>
                  <p>Resolution Rate</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-map-location-dot nav-icon"></i>
                  <p>Geographical Distribution</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-closed">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-id-badge"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>View All</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user-tag nav-icon"></i>
                  <p>Top Contributors</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>