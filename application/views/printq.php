<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Logbook | AVSEC</title>
<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/printq.css">


  <!-- ori header -->
  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontcustom.css">  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">
  <!-- /ori header -->

  <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.css"> -->

  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/dropzone/min/dropzone.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
</head>
<body>
<div>
  <!-- Main content -->
  <section>
    <!-- <div class="card-body mx-auto"> -->
      <div style="margin-bottom: 40px; text-align: center; font-weight: bold; font-size: 20px; line-height: 10px;">
      <img src="<?= base_url(); ?>assets/dist/img/header-print.jpg" alt="SHIAM Logo" class="brand-image"  width="1080">
      </div>
      <div style="margin-top: 20px; margin-bottom: 40px; text-align: center; font-weight: bold; font-size: 20px; line-height: 10px;">
      <!-- <img src="<?= base_url(); ?>assets/dist/img/logo/avsec.png" alt="Avsec Logo" class="brand-image" style="opacity: .8"> -->
      <p>LAPORAN</p>
      <p>LOGBOOK AVIATION SECURITY</p>
      </div>
      <!-- <div>
      <?php
                  // print_r($randomidno);
      foreach ($ver_rcscp2 as $data) {
      ?>
      
      <p>Laporan Tanggal</p> <?php echo date('d-m-Y', strtotime($data->tgl_inputform)); ?>
      <?php
      }
      ?>
      </div> -->
      <div style="width: 100%">
      

      <!-- Table Print -->
      <?= $table ?>
    <!-- </div> -->
    
  </section>
  <!-- /.content -->
  <!-- </div> -->
</div>
<!-- ./wrapper -->
</body>