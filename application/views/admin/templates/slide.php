  
 <body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
 

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
	<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
 
</ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
   

      <!-- Messages Dropdown Menu -->
	  <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
     
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
          <div class="dropdown-divider"></div>
          <a href="<?= base_url() ?>Admin_Login/logout" class="dropdown-item">
            <i class="fa-sign-out mr-2"></i> Keluar
          
          </a>
          
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

 
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>Admin_home" class="brand-link">
      <img src="<?= base_url() ?>assets/admin/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SPKD - Hamzanwadi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    <br>
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
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       
		  <li class="nav-item">
            <a href="<?= base_url() ?>Admin_Home" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Dashboard
              </p>
            </a>
          </li>
     
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
             Kuesioner
                <i class="fas fa-angle-left right"></i>
             
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>Admin_Kuesioner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengisian Kuesioner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>Admin_Evaluasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
				  <p>Pengisian Evaluasi</p>
                </a>
              </li>
            
            
            </ul>
          </li>

					<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
             Pernyataan
                <i class="fas fa-angle-left right"></i>
             
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>Admin_Kuesioner/tambah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Kuesioner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>Admin_Evaluasi/tambah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
							  <p> Evaluasi</p>
                </a>
              </li>
            
            
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Nilai
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>Admin_Nilai_Kuesioner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Kuesioner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>Admin_Nilai_Evaluasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Evaluasi</p>
                </a>
              </li>
            </ul>
          </li>
     
		  <li class="nav-item">
            <a href="<?= base_url() ?>Admin_Saran" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
              Saran
              </p>
            </a>
          </li>

		  <li class="nav-item">
            <a href="<?= base_url() ?>Admin_Mahasiswa" class="nav-link">
              <i class="nav-icon fa fa-user-graduate"></i>
              <p>
              Mahasiswa
              </p>
            </a>
          </li>

		  <li class="nav-item">
            <a href="<?= base_url() ?>Admin_Dosen" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
              Dosen
              </p>
            </a>
          </li>

		  <li class="nav-item">
            <a href="<?= base_url() ?>Admin_Matakuliah" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
              Matakuliah
              </p>
            </a>
          </li>

		  <li class="nav-item">
            <a href="<?= base_url() ?>Admin_User" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
              Users
              </p>
            </a>
          </li>
      
		</nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
