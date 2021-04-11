<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">     
    <div class="col-12">     
      <?php if ($previllage <= $this->session->tipe_user) { ?>
      <div class="card-header">
        <a href="<?=base_url("soal/tambah");?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambah</a>          
        <a href="<?=base_url("");?>" class="btn btn-info float-right btn-sm"><i class="fas fa-backward"></i> Kembali</a>          
      </div>
      <?php } else { ?>
      <div class="card-header">
        <a href="<?=base_url("");?>" class="btn btn-info float-right"><i class="fas fa-backward"></i> Kembali</a>          
      </div> 
      <?php } ?>

      <div class="card">
        <div class="card-header bg-primary">
          <h3 class="card-title"><?=$menu?></h3>
        </div>
        
        <div class="card-body">
          <div class="table-responsive">
          <table id="example2" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th style="width: 45%">Soal</th>
              <?php if ($this->session->tipe_user >= $previllage) { ?>
              <th style="width: 45%">Pembahasan</th>
              <?php } ?>
              <th style="width: 10%">#</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($row->result() as $key => $data) {;
              ?>
                <tr>
                  <td scope="row">
                      <p><?= $data->soal?></p>
                  </td>
                  <?php if ($this->session->tipe_user >= $previllage) { ?>
                  <td scope="row">
                      <p>
                        <?= $data->pembahasan == null ? '-' : $data->pembahasan?><br>
                        <span class="badge bg-info">Jawaban <?= $data->kunci ?></span><br>
                        <span class="badge bg-warning">Durasi <?= $data->durasi ?> detik</span><br>
                      </p>
                  </td>
                  <?php } ?>
                  <td>
                    <a href="<?= site_url('soal/edit/'.$data->id);?>" class="btn btn-xs btn-warning"><i class='fas fa-edit'></i></a>
                    <a href="<?= site_url('soal/hapus/'.$data->id);?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin mau dihapus?')"><i class='fas fa-trash'></i></a>
                  </td>
            	  </tr>
            	<?php }?>
            </tbody>
          </table>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content --