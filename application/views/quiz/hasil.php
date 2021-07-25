<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
    <div class="col-12">     
      <div class="card-header">
          <a href="<?= base_url('quiz/menu')?>" class="btn btn-warning btn-sm float-right"><i class="fas fa-backward"></i> Kembali</a>
      </div>

      <div class="card">
        <div class="card-header bg-primary">
          <h3 class="card-title"><?=$menu?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
        </div>
        
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Keterangan</th>
              <th>Jumlah</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                  <td scope="row">Jumlah Soal</td>
                  <td><?= $jumlah_soal?></td>                    
                </tr>
                <tr>
                  <td scope="row"><span class="danger"> Benar </span></td>
                  <td><?= $benar?></td>                    
                </tr>
                <tr>
                  <td scope="row">Salah</td>
                  <td><?= $salah?></td>                    
                </tr>
                <tr>
                  <td scope="row">Kosong</td>
                  <td><?= $kosong?></td>                    
                </tr>
                <tr>
                  <td colspan="2" align="center"><h1>Nilai Kamu : <?= $hasil?></h1></td>
                </tr>                
            </tbody>
          </table>
          </div>
        </div>
        <!-- /.card-body -->
      </div>

      <div class="card collapsed-card">
        <div class="card-header bg-success">
          <h3 class="card-title">Pembahasan</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
          </div>
        </div>

        <div class="card-body">
          <?php
            $no = 1;
            foreach ($pembahasan->result() as $key => $data) {;
          ?>
            <p> <?= $data->pembahasan?> </p>
            <hr>
          <?php } ?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content --