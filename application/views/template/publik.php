<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $menu ?></title>
  <!-- Ikon -->
  <link rel="shortcut icon" href="<?=base_url()?>/assets/dist/img/favicon.png">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/fontawesome-free/css/all.min.css">  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme stye -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- pace-progress -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
  <!-- Aous -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/aos/aos.css">
  <?php $this->load->view("script/header_function")?>
</head>

<body class="hold-transition layout-top-nav layout-fixed layout-footer-fixed pace-warning">
  <audio hidden autoplay loop>
    <source src="<?=site_url()?>/assets/dist/music/bgmusic.mp3" type="audio/ogg">
    Your browser does not support the audio element.
  </audio> 
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block ">
        <div class="image">
          <a href="<?=base_url('publik')?>"><img src="<?=base_url()?>/assets/dist/img/login-logo.png" style="width: 450px; height:100px;" alt="User Image"></a>
        </div>
      </li>
      <li class="nav-item d-lg-none">
        <div class="image">
          <a href="<?=base_url('publik')?>"><img src="<?=base_url()?>/assets/dist/img/login-logo.png" style="width: 200px; height: 50px;" alt="User Image"></a>
        </div>
      </li>      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url(<?= base_url('/assets/dist/img/tiles.jpg')?>); background-repeat: repeat;">
    <!-- Content Header (Page header) -->
    <?php $this->view('message') ?>          
    <div class="content-header">
      <div class="card-header">
        <a class="btn btn-light btn-sm float-right d-none d-sm-inline-block" href="<?=site_url('auth/endQuiz')?>"><i class="fas fa-sign-out-alt"></i>Keluar</a>
      </div>
      <div class="card card-body bg-warning">
          <h5 class="m-0 text-dark"><?=$menu?></h5>
      </div>
    </div>

    <!-- /.content-header -->
    <?= $contents ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <!-- Main Footer -->
  <footer class="main-footer d-none d-sm-inline-block">
    <strong>&copy; <?= date("Y")?> <a href="http://fitrahizulfalaq.blogspot.com"><?= ucfirst($this->fungsi->pilihan_advanced("setting","kode","pengembang")->row("keterangan"))?></a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      Versi
    </div>
  </footer>

  <footer class="main-footer text-center bg-white d-lg-none">
    <div class="row text-blue">
      <div class="col"><a class="text-blue" href="<?= base_url('auth/endQuiz')?>"><i class="fas fa-sign-out-alt"></i> Logout</a></div>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?=base_url()?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?=base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url()?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>/assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?=base_url()?>/assets/dist/js/demo.js"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?=base_url()?>/assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?=base_url()?>/assets/plugins/raphael/raphael.min.js"></script>
<script src="<?=base_url()?>/assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?=base_url()?>/assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>

<!-- pace-progress -->
<script src="<?=base_url()?>/assets/plugins/pace-progress/pace.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?=base_url()?>/assets/dist/js/pages/dashboard2.js"></script>

<?php $this->load->view("script/footer_function")?>
</body>
</html>

