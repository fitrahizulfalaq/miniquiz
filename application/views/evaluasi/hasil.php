<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
    <div class="col-12">     
      <div class="card-header">
        <?php if ($hasil < 80 ) {?>
          <a href="<?= base_url('evaluasi')?>" class="btn btn-info btn-sm float-right"><i class="fas fa-backward"></i> Ulangi</a>
        <?php } else { ?>         
          <a href="<?= base_url('evaluasi')?>" class="btn btn-info btn-sm float-right"><i class="fas fa-backward"></i> Kembali</a>
        <?php } ?>         
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
      <!-- /.card -->

      <div class="card collapsed-card">
        <div class="card-header bg-success">
          <h3 class="card-title">KUNCI JAWABAN PILIHAN GANDA</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        
        <div class="card-body">
          <center>
            <h3><strong>KUNCI JAWABAN PILIHAN GANDA</strong></h3>
            <table class="table table-striped">
              <tr>
                <td><p align="center">1.</p></td>
                <td><p>B</p></td>
                <td><p align="center">11.</p></td>
                <td><p>A</p></td>
              </tr>
              <tr>
                <td width="64"><p align="center">2.</p></td>
                <td width="316"><p>D</p></td>
                <td width="66"><p align="center">12.</p></td>
                <td width="314"><p>D</p></td>
              </tr>
              <tr>
                <td width="64"><p align="center">3.</p></td>
                <td width="316"><p>E</p></td>
                <td width="66"><p align="center">13.</p></td>
                <td width="314"><p>A</p></td>
              </tr>
              <tr>
                <td width="64"><p align="center">4.</p></td>
                <td width="316"><p>B</p></td>
                <td width="66"><p align="center">14.</p></td>
                <td width="314"><p>A</p></td>
              </tr>
              <tr>
                <td width="64"><p align="center">5.</p></td>
                <td width="316"><p>E</p></td>
                <td width="66"><p align="center">15.</p></td>
                <td width="314"><p>C</p></td>
              </tr>
              <tr>
                <td width="64"><p align="center">6.</p></td>
                <td width="316"><p>D</p></td>
                <td width="66"><p align="center">16.</p></td>
                <td width="314"><p>D</p></td>
              </tr>
              <tr>
                <td width="64"><p align="center">7.</p></td>
                <td width="316"><p>A</p></td>
                <td width="66"><p align="center">17.</p></td>
                <td width="314"><p>C</p></td>
              </tr>
              <tr>
                <td width="64"><p align="center">8.</p></td>
                <td width="316"><p>C</p></td>
                <td width="66"><p align="center">18.</p></td>
                <td width="314"><p>D</p></td>
              </tr>
              <tr>
                <td width="64"><p align="center">9.</p></td>
                <td width="316"><p>E</p></td>
                <td width="66"><p align="center">19.</p></td>
                <td width="314"><p>E</p></td>
              </tr>
              <tr>
                <td width="64"><p align="center">10.</p></td>
                <td width="316"><p>E</p></td>
                <td width="66"><p align="center">20.</p></td>
                <td width="314"><p>C</p></td>
              </tr>
            </table>
          </center>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <div class="card collapsed-card">
        <div class="card-header bg-warning">
          <h3 class="card-title">PEMBAHASAN ESSAY</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        
        <div class="card-body">
          <h4>Jawaban Kamu :</h4>
          <p>
            <?= $essay ?>
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