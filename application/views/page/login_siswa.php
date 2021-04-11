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
<div class="col-lg-8">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body rounded-circle">
      <div class="login-logo">
        <a href="<?=base_url('auth/menu')?>"><img src="<?=base_url()?>/assets/dist/img/login-logo.png" alt="Logo Aplikasi" width="100%"></a>
      </div>
      <hr>
      <h4 class="text-center">Masukkan Kode</h4>
      <form action="<?=site_url('auth/startQuiz')?>" method="post" id="FormLogin">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Kode : Xa5sDc (6 digit)" maxlength="6" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
          </div>
        </div>
        <div class="row">          
          <div class="col-12">
            <button type="submit" name="startQuiz" class="btn btn-success btn-block">Mulai QUIZ <i class="fas fa-forward"></i></button>
          </div>
        </div>
      </form>
      <!-- /.social-auth-links -->
      </div>
      <!-- /.login-card-body -->
      <div class="card-header">
        <a href="<?= base_url('auth/menu');?>" class="btn btn-info float-right btn-sm"><i class="fas fa-backward"></i> Kembali</a>          
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
