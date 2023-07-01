<?php 



if (!isset($_SESSION['user'])) {
  header('Location: ../../index.php');

}


?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">IPCA OP Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
         
           <!-- <li class="nav-item">
            <a href="../charts/registration_search.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Registration
              </p>
            </a>
          </li> -->
           <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Login Data
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="login_data_dur.php?row=10000000000&&search=." class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search & Filter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="login_data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Export Login Data</p>
                </a>
              </li>
            </ul>
          </li> -->
          
           <li class="nav-item">
            <a href="drdetails.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Doctor Details
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="add_session.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Add New Session
              </p>
            </a>
          </li> -->
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>