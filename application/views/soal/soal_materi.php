<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">     
    <div class="col-12">     
      <?php $this->view('message'); ?>

      <div class="card-header">          
        <a href="<?=base_url("soal");?>" class="btn btn-info float-right"><i class="fas fa-backward"></i> Kembali</a>
      </div>

      <div class="card">
        <div class="card-header bg-primary">
          <h3 class="card-title"><?=$menu?></h3>
        </div>

        
        <div class="card-body">
          <div class="table-responsive">
          <table id="example3" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th style="width: 45%">Soal</th>
              <?php if ($this->fungsi->user_login()->tipe_user >= $previllage) { ?>
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
                      <small><span class="badge bg-warning"><i class="fas fa-book"></i> <?= $this->fungsi->pilihan_selected("tb_materi",$data->materi_id)->row("judul")?></span></small>
                      <p><?= $data->soal?></p>
                  </td>
                  <?php if ($this->fungsi->user_login()->tipe_user >= $previllage) { ?>
                  <td scope="row">
                      <p>
                        <?= $data->pembahasan?><br>
                        <span class="badge bg-info">Jawaban <?= $data->kunci ?></span><br>
                        <span class="badge bg-secondary"><a href="<?= $data->referensi?>" target="_blank" onclick="return confirm('Akan di buka di tab selanjutnya??')">Sumber</a></span>                        
                      </p>
                  </td>
                  <?php } ?>
                  <td>
                    <?php if ($this->fungsi->user_login()->tipe_user < $previllage) { ?>
                    <?php $pelatihan_id = $this->fungsi->pilihan_selected("tb_materi",$data->materi_id)->row("pelatihan_id")?>                    
                    <a href="<?= site_url('ujian/course/'.$pelatihan_id.'/materi/'.$data->materi_id);?>" class="btn btn-xs btn-success"><i class='fas fa-school'></i></a>
                    <?php } ?>
                    <?php if ($this->fungsi->user_login()->tipe_user >= $previllage && $data->user_id == $this->fungsi->user_login()->id) { ?>
                    <a href="<?= site_url('soal/edit/'.$data->id);?>" class="btn btn-xs btn-warning"><i class='fas fa-edit'></i></a>
                    <a href="<?= site_url('soal/hapus/'.$data->id);?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin mau dihapus?')"><i class='fas fa-trash'></i></a>
                    <?php } ?>
                  </td>
            	  </tr>
            	<?php }?>
            </tbody>
          </table>
          </div>
        </div>
        <!-- /.card-body -->
                
        <div class="card-footer">
          <span class="tableTools-container btn btn-sm"></span>
        </div>
      </div>
      <!-- /.card -->
    </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content --