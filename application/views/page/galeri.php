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
          <div class="card-body box-profile">
            <h3>Klik Untuk Melihat Gambar</h3>
            <?php
              foreach ($row->result() as $key => $data) {;
            ?>
            <a href="<?=base_url()?>/assets/dist/img/foto-galeri/<?=$data->deskripsi?>.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-title="Galeri" data-footer="<?=$data->deskripsi?>">
                <img src="<?=base_url()?>/assets/dist/img/foto-galeri/<?=$data->deskripsi?>.jpg" width="50px" height="50px">
            </a>
            <?php }?>

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
