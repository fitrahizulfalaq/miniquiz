<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">     
    <div class="col-12">     
      <div class="card-header">
      <a href="<?=base_url("raport/truncate");?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset Data</a>          
        <a href="<?=base_url("");?>" class="btn btn-info float-right btn-sm"><i class="fas fa-backward"></i> Kembali</a>
      </div>

      <div class="card-body">
        <div class="post clearfix">
          <div class="user-block">
          <?= form_open_multipart('raport/sekolah/')?>
          <div class="input-group input-group-sm mb-3">
              <select class="form-control form-control-sm" name="sekolah_id" required>
                <option value="<?= set_value('sekolah_id');?>">Pilih Sekolah : <?= set_value('sekolah_id');?></option>
                <?php
                  foreach ($this->fungsi->pilihan("tb_sekolah")->result() as $key => $pilihan) {;
                ?>
                <option value="<?= $pilihan->id?>"><?= $pilihan->deskripsi?></option>
                <?php }?>
              </select>
            </div>
            <div class="input-group-append">
              <button type="submit" class="btn btn-sm btn-success">Filter Sekolah</button>
            </div>
          <?= form_close() ?>
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