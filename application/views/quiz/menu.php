<!-- Main content -->
<section class="content">
  <div class="container-fluid">    
    <div class="row">      
      <!-- Menu-->
      <!-- <div class="col-lg-2 col-4">        
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('quiz/modul/')?>">
            <img src="<?= base_url("")?>/assets/dist/img/modul.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('quiz/modul/')?>" class="small-box-footer">
            Materi
          </a>
        </div>
      </div>  -->
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('quiz/startQuiz')?>">
            <img src="<?= base_url("")?>/assets/dist/img/quiz.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('quiz/startQuiz')?>" class="small-box-footer">
            Mulai QUiz
          </a>
        </div>
      </div> 
      
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('quiz/tentang')?>">
            <img src="<?= base_url("")?>/assets/dist/img/tentang.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('quiz/tentang')?>" class="small-box-footer">
            Tentang
          </a>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
</section>
<!-- /.content -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="card-header">
      <img src="<?=base_url()?>/assets/dist/img/karakter/<?= ($this->fungsi->siswa_login()->foto != null) ? $this->fungsi->siswa_login()->foto : "foto-default.png"; ?>" class="img-circle elevation-2" style="width: 80px; height: 80px;" alt="siswa Image">
      <small class="btn btn-light btn-xs"><?= $this->session->nama ?> / <?= $this->fungsi->get_deskripsi("tb_sekolah",$this->session->sekolah_id)?> <br> Kelas <?= $this->fungsi->get_deskripsi("tb_kelas",$this->session->kelas_id)?> / Nomor Absen : <?= $this->session->absen?></small>
    </div>
</section>
<!-- /.content -->