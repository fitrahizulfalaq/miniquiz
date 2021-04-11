<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>.: LOGIN :.</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Ikon -->
  <link rel="shortcut icon" href="<?=base_url()?>/assets/dist/img/favicon.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/dist/css/adminlte.min.css">
  <!-- pace-progress -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page bg-green pace-warning" style="background-image: url(<?= base_url('/assets/dist/img/tiles.jpg')?>); background-repeat: repeat;">
  <audio hidden autoplay loop>
    <source src="<?=site_url()?>/assets/dist/music/bgmusic.mp3" type="audio/ogg">
    Your browser does not support the audio element.
  </audio> 
<div class="col-lg-8">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body rounded-circle">
      <div class="login-logo">
        <img src="<?=base_url()?>/assets/dist/img/login-logo.png" alt="Logo Aplikasi" width="100%">
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-4 col-4">
          <div class="small-box bg-white">
            <div class="inner text-center">
              <a href="<?= base_url('auth/login_siswa')?>">
              <img src="<?= base_url("")?>/assets/dist/img/student.png" alt="" width="100%">
              </a>
            </div>          
            <a href="<?= base_url('auth/login_siswa')?>" class="small-box-footer">
              Siswa
            </a>
          </div>          
        </div>
        <div class="col-lg-4 col-4">
          <div class="small-box bg-white">
            <div class="inner text-center">
              <a href="<?= base_url('auth/login_page')?>">
              <img src="<?= base_url("")?>/assets/dist/img/teacher.png" alt="" width="100%">
              </a>
            </div>          
            <a href="<?= base_url('auth/login_page')?>" class="small-box-footer">
              Guru
            </a>
          </div>          
        </div>
        <div class="col-lg-4 col-4">
          <div class="small-box bg-white">
            <div class="inner text-center">
              <a href="<?= base_url('page/tentang')?>">
              <img src="<?= base_url("")?>/assets/dist/img/tentang.png" alt="" width="100%">
              </a>
            </div>          
            <a href="<?= base_url('page/tentang')?>" class="small-box-footer">
              Tentang
            </a>
          </div>          
        </div>
      </div>
      
    </div>
    <!-- /.login-card-body -->
  </div>
  <?php $this->view('message'); ?>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=base_url()?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>/assets/dist/js/adminlte.min.js"></script>
<!-- jquery-validation -->
<script src="<?=base_url()?>/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?=base_url()?>/assets/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- pace-progress -->
<script src="<?=base_url()?>/assets/plugins/pace-progress/pace.min.js"></script>

<script type="text/javascript">
  function showPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script type="text/javascript">
$(document).ready(function () { 
  $('#FormLogin').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 8
      },      
    },
    messages: {
      email: {
        required: "Masukkan Email dengan benar",
        email: "Masukkan Email dengan benar"
      },
      password: {
        required: "Masukkan Password",
        minlength: "Password Setidaknya 8 karakter"
      },      
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
