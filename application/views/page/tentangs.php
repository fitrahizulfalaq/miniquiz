<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="card-header">
      <a href="<?= base_url('');?>" class="btn btn-info float-right btn-sm"><i class="fas fa-backward"></i> Kembali</a>          
    </div>
    <?php $this->view('message'); ?>
    <div class="row">
      <div class="col-md-12">
        <!-- Profile Image -->
        <div class="card card-info card-outline">
          <div class="card-body">
            <div class="text-center">
              <img class="img-fluid" src="<?=base_url()?>/assets/dist/img/login-logo.png" width="400px">
            </div>
            <br>
            <div class="text-justify">
              <h3>Pengembang</h3>
              <p>
                Santi Dwi Retno Eko Putro<br>
                NIM 170741638534<br>
                Pendidikan IPS/Universitas Negeri Malang<br>
                Email : <br> santi.dwi.1707416@students.um.ac.id<br>
              </p>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->        
      </div>      
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
