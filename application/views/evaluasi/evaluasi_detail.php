<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
    <div class="col-12">     
      <div class="card-header">
          <a href="<?= base_url('evaluasi')?>" class="btn btn-info btn-sm float-right"><i class="fas fa-backward"></i> Kembali</a>
      </div>

      <div class="card">
        <div class="card-header bg-primary">
          <h3 class="card-title"><?=$menu?></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
        </div>
        
        <div class="card-body">
          <h5>Nama Siswa : <?= $nama_siswa?></h5>
          <hr>
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
                  <td><?= $this->fungsi->pilihan("tb_soal")->num_rows()?></td>                    
                </tr>
                <tr>
                  <td scope="row"><span class="danger"> Benar </span></td>
                  <td><?= $penilaian->benar?></td>                    
                </tr>
                <tr>
                  <td scope="row">Salah</td>
                  <td><?= $penilaian->salah?></td>                    
                </tr>
                <tr>
                  <td scope="row">Kosong</td>
                  <td><?= $penilaian->kosong?></td>                    
                </tr>
                <tr>
                  <td colspan="2" align="center"><h1>Nilai : <?= $penilaian->skor?></h1></td>
                </tr>                
            </tbody>
          </table>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <div class="card">
        <div class="card-header bg-success">
          <h3 class="card-title">KUNCI JAWABAN PILIHAN GANDA</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        
        <div class="card-body">
          <center>
            <h3><strong>KUNCI JAWABAN PILIHAN GANDA</strong></h3>
            <div class="table-responsive">
              <table class="table table-bordered table-striped" width="100%">
                <tr>
                  <td width="200" valign="top">Kunci Jawaban</td>
                  <td width="200" valign="top">B</td>
                  <td width="200" valign="top">D</td>
                  <td width="200" valign="top">E</td>
                  <td width="200" valign="top">B</td>
                  <td width="200" valign="top">E</td>
                  <td width="200" valign="top">D</td>
                  <td width="200" valign="top">A</td>
                  <td width="200" valign="top">C</td>
                  <td width="200" valign="top">E</td>
                  <td width="200" valign="top">E</td>
                  <td width="200" valign="top">A</td>
                  <td width="200" valign="top">D</td>
                  <td width="200" valign="top">A</td>
                  <td width="200" valign="top">A</td>
                  <td width="200" valign="top">C</td>
                  <td width="200" valign="top">D</td>
                  <td width="200" valign="top">C</td>
                  <td width="200" valign="top">D</td>
                  <td width="200" valign="top">E</td>
                  <td width="200" valign="top">C</td>
                </tr>
                <tr>
                  <td width="200" valign="top">Jawaban</td>
                  <?php
                    foreach ($row_riwayat_jawaban->result() as $key => $data) {;
                  ?>
                  <td width="200" valign="top"><?= $data->jawaban ?></td>
                  <?php } ?>
                </tr>
              </table>
            </div>
          </center>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <div class="card">
        <div class="card-header bg-warning">
          <h3 class="card-title">PEMBAHASAN ESSAY</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        
        <div class="card-body">
          <h4>Jawaban Siswa :</h4>
          <p>
            <?= $penilaian->essay ?>
          </p>
          <hr>
          <h4>Pembahasan :</h4>
          <ol start="1" type="1">
            <li>Rute pertama gerilya saat di       Trenggalek hanya dilewati satu tempat yaitu di Bendorejo, Pogalan dan       tidak beristirahat lama karena rombongan harus menuju ke wilayah       Tulungagung. </li>
            <li>Saat rute pertama melewati       Trenggalek tidak adanya halangan atau serangan dari Belanda sehingga       kondisi fisik yang masih stabil. </li>
            <li>Rute kedua saat melewati       Trenggalek menuju Pacitan memiliki jarak yang cukup jauh sehingga       membutuhkan waktu yang lumayan lama.</li>
            <li>Sebelum memasuki Trenggalek  kedua kalinya, para rombongan di Ponorogo telah dikepung dan diserang oleh Belanda sehingga saat memasuki Trenggalek para  rombongan kondisi fisiknya menurun dan membutuhkan tempat beristirahat.  Sehingga rute kedua memiliki tempat persinggahan yang lebih banyak</li>
          </ol>
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