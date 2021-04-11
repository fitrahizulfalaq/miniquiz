<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">     
    <div class="col-12">     
      <div class="card-header">          
        <a href="<?=base_url("evaluasi/reset");?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</a>
        <a href="<?=base_url("");?>" class="btn btn-info btn-sm float-right"><i class="fas fa-backward"></i> Kembali</a>
      </div>

      <div class="card">
        <div class="card-header bg-primary">
          <h3 class="card-title">Cari pada kolom search</h3>
        </div>

        <div class="card-body">
          <div class="table-responsive">
          <table id="example3" class="table table-bordered table-striped">
            <thead>
              <tr>
              <th>Nama</th>
              <th>Skor</th>
              <th>Detail</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($row->result() as $key => $data) {;
              ?>
                <tr>
                  <td scope="row"><?= $data->nama?><br><small><?= $data->username?></small></td>
                  <td scope="row"><?= $this->fungsi->pilihan_advanced("tb_penilaian","user_id",$data->id)->row("skor") ?></small></td>
                  <td>
                    <a href="<?= site_url('evaluasi/detail/'.$data->id);?>" class="btn btn-sm btn-primary"><i class='fas fa-list'></i></a>
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