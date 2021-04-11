<!-- Main content -->
<section class="content">
  <div class="container-fluid">    
    <div class="row">      
      <!-- Menu-->
      <div class="col-lg-2 col-4">      	
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('profil')?>">
            <img src="<?= base_url("")?>/assets/dist/img/profil.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('profil')?>" class="small-box-footer">
            Profil
          </a>
        </div>
      </div>
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('soal')?>">
            <img src="<?= base_url("")?>/assets/dist/img/soal.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('soal')?>" class="small-box-footer">
            Soal
          </a>
        </div>
      </div> 
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('modul')?>">
            <img src="<?= base_url("")?>/assets/dist/img/modul.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('modul')?>" class="small-box-footer">
            Materi
          </a>
        </div>
      </div> 
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('siswa')?>">
            <img src="<?= base_url("")?>/assets/dist/img/siswa.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('siswa')?>" class="small-box-footer">
            Siswa
          </a>
        </div>
      </div> 
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('raport')?>">
            <img src="<?= base_url("")?>/assets/dist/img/raport.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('raport')?>" class="small-box-footer">
            Raport Siswa
          </a>
        </div>
      </div>
      <?php if ($this->session->tipe_user < 2 ) {  } else { ?>
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('user')?>">
            <img src="<?= base_url("")?>/assets/dist/img/user.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('user')?>" class="small-box-footer">
            Pengguna
          </a>
        </div>
      </div>       
      <?php } ?>
      <?php if ($this->session->tipe_user < 2 ) {  } else { ?>
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('pendaftaran')?>">
            <img src="<?= base_url("")?>/assets/dist/img/pendaftaran.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('pendaftaran')?>" class="small-box-footer">
            Pendaftaran
          </a>
        </div>
      </div>       
      <?php } ?>
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('page/tentangs')?>">
            <img src="<?= base_url("")?>/assets/dist/img/tentang.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('page/tentangs')?>" class="small-box-footer">
            Tentang
          </a>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
</section>
<!-- /.content