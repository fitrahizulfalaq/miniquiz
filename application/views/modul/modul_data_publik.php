<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card-header">        
        <a href="<?=base_url('quiz/menu');?>" class="btn btn-warning float-right btn-sm"><i class="fas fa-backward"></i> Kembali</a>          
      </div>

      <?php        
        foreach ($row->result() as $key => $data) {;
      ?>

      <div class="col-md-3 float-md-left">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid" src="<?= base_url()?>assets/dist/img/foto-modul/<?= ($data->foto != null) ? $data->foto : "foto-default.png"; ?>" alt="User profile picture" style="width: 300px; height: 200px">
            </div>

            <h3 class="profile-username text-center"><?=$data->judul?></h3>

            <p class="text-muted text-center">
              <i class="fas fa-user"></i> <?= $this->fungsi->pilihan_selected("tb_user",$data->user_id)->row("nama")?> 
            </p>          

            <a href="<?= site_url('quiz/modulDetail/'.$data->id);?>" class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i><b> Lihat</b></a>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <?php }?>      
    </div>    
    <div class="col-12">
      <?= $this->pagination->create_links(); ?>
    </div>
  </div>
</section>