<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Logbook | AVSEC</title>

  <!-- tambah -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontcustom.css">  
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- /tambah -->


  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">

  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/dropzone/min/dropzone.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">


  <style>
  .center_div{
    margin: 0 auto;
    width:80%;
  }
</style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center"> -->
    <!-- <img class="animation__shake" src="<?= base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> -->
    <!-- <img class="animation__shake" src="<?= base_url(); ?>assets/dist/img/logo/avsec.png" alt="Avsec" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url(); ?>assets/index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">      
      <!-- Sidebar user (optional) -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <div class="user-image img-circle elevation-2" style="width:2.5rem;height:2.5rem;overflow:hidden">
            <img class="img-fluid"
                src="<?= base_url()?>assets/dist/img/user7-128x128.jpg"
                alt="User profile picture">
          </div>
            
          </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <div class="img-circle elevation-2 mx-auto" style="width:6rem;height:6rem;overflow:hidden">
                <img class="img-fluid"
                  src="<?= base_url()?>assets/dist/img/user7-128x128.jpg"
                  alt="User profile picture">
            </div>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <a href="#" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>




  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!-- <aside class="main-sidebar sidebar-dark-primary elevation-4"> -->
    <!-- <aside class="main-sidebar sidebar-dark-black navbar-info elevation-4"> -->
  <aside class="main-sidebar sidebar-dark-primary navbar-dark elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>assets/index3.html" class="brand-link">
      <!-- <img src="<?= base_url(); ?>assets/dist/img/logo/avsec.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8"> -->
      <img src="<?= base_url(); ?>assets/dist/img/logo/avsec.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light">Logbook AVSEC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>assets/dist/img/user7-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Mawar</a>
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
        <!-- <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> -->

          <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-header">RANDOM CHECK & UNPREDICTIBLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Orang dan Barang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>main/randomtampil_scp2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    SCP II
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>main/randomtampil_scptransit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SCP Transit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>main/randomtampil_scpinter" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SCP Internasional</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>main/randomtampil_scpkaryawan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SCP Akses Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>main/randomtampil_scppos2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SCP POS Ops II</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Bagasi Tercatat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>main/randomtampil_bagasi1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SCP I (ISLAND I)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>main/randomtampil_scptransit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SCP I (ISLAND Ii)</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">VERIFIKASI</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Bagasi Tercatat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>main/verifikasi_rcbagasi1_tampil" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SCP I (ISLAND I)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>main/randomtampil_scptransit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SCP I (ISLAND Ii)</p>
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

  <!-- Content Wrapper. Contains page content -->
