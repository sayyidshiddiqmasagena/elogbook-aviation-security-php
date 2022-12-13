<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <link rel="apple-touch-icon" sizes="180x180" src="<?php echo base_url() ?>assets/vendor/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" src="<?php echo base_url() ?>assets/vendor/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" src="<?php echo base_url() ?>assets/vendor/favicon/favicon-16x16.png">
  <link rel="manifest" src="<?php echo base_url() ?>assets/vendor/favicon/site.webmanifest">
  <link rel="mask-icon" src="<?php echo base_url() ?>assets/vendor/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" src="<?php echo base_url() ?>assets/vendor/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="<?=base_url();?>assets/vendor/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontcustom.css">  
  <!-- Font Awesome -->
  <link rel="stylesheet" src="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" src="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" src="<?php echo base_url() ?>assets/dist/css/adminlte.css">
</head>
<body class="hold-transition login-page" style="background: white">
<img src="<?= base_url() ?>assets/images/ap1-full.png" alt="logo ap" style="max-width:15rem;margin-bottom:2rem">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary"  style="background-color:#e9ecef">
    <img src="<?= base_url() ?>assets/images/avsec.png" alt="logo ap" style="max-width:5rem;margin-top:1rem" class="mx-auto">
  <!-- <img src="<?= base_url() ?>assets/images/ap1-full.png" alt="logo ap" style="max-width:15rem;margin:2rem 0" class="mx-auto"> -->

    <div class="card-header text-center">
      <a href="#" class="h5"><b><?=strtoupper('Security Equipment Check')?></b></a>
    </div>
    <div class="card-body">
      <!-- <p class="login-box-msg">Silahkan masukkan Email dan Password untuk melanjutkan</p> -->
      <?php 
				// if($this->session->flashdata('error') !='')
				// {
				// 	echo '<div class="alert alert-danger" role="alert">';
				// 	echo $this->session->flashdata('error');
				// 	echo '</div>';
				// }
				?>
      <?php // echo form_open_multipart('login/proses'); ?>
      <form method="POST" action="<?php base_url();?>randombagasi_insert" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
            <!-- <p>Angkasa Pura I</p> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        </form>
        <?php // echo form_close(); ?>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<a href="<?= base_url() ?>Download/manual">Buku Manual Penggunaan Se-Check</a>

<!-- jQuery -->
<script src="<?=base_url('assets/vendor/template');?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/vendor/template');?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/vendor/template');?>/dist/js/adminlte.min.js"></script>
</body>
</html>
