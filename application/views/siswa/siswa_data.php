<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">     
    <div class="col-12">     
      <div class="card-header">          
        <a href="<?=site_url()?>siswa/tambah/" class="btn btn-success btn-sm"><i class='fas fa-plus'></i> Tambah</a>
        <a href="<?=base_url("");?>" class="btn btn-info float-right btn-sm"><i class="fas fa-backward"></i> Kembali</a>
      </div>

      <div class="card-body">
        <div class="post clearfix">
          <div class="user-block">
          <?= form_open_multipart('siswa/sekolah/')?>
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

      <div class="card">
        <div class="card-header bg-primary">
          <h3 class="card-title"><?=$menu?></h3>
        </div>
        
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered table-striped" id="example3">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Kode</th>
              <th>Sekolah</th>
              <th>Kelas / Absen</th>
              <th>#</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($row->result() as $key => $data) {;
              ?>
                <tr>
                  <td scope="row"><?= $data->nama?></td>
                  <td scope="row"><span class="badge badge-warning"><?= $data->kode ?></span></td>
                  <td scope="row"><?= $this->fungsi->get_deskripsi("tb_sekolah",$data->sekolah_id)?></td>
                  <td scope="row"><?= $this->fungsi->get_deskripsi("tb_kelas",$data->kelas_id) ?> / <?= $data->absen?> </td>
                  <td>                    
                    <a href="<?= site_url('siswa/edit/'.$data->id);?>" class="btn btn-sm btn-warning btn-sm"><i class='fas fa-edit'></i></a>
                    <a href="<?= site_url('siswa/hapus/'.$data->id);?>" class="btn btn-sm btn-danger btn-sm" onclick="return confirm('Apakah yakin mau dihapus?')"><i class='fas fa-trash'></i></a>
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