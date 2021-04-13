<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card-header">
          <a href="<?= base_url('quiz/menu')?>" class="btn btn-warning float-right btn-sm"><i class="fas fa-backward"></i> Kembali</a>          
        </div>
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Latihan Soal</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <h5><strong>PETUNJUK PENGERJAAN:</strong></h5>
            <ol start="1" type="1">
              <li>Berdoalah sebelum mengerjakan soal.</li>
              <li>Teliti soal terlebih dahulu, perangkat soal terdiri       dari 25 soal pilihan ganda dan 1 soal uraian.</li>
              <li>Untuk soal pilihan ganda, berilah tanda (X) pada huruf       a, b, c, dan d pada jawaban yang Anda anggap benar.</li>
              <li>Setelah semua pertanyaan selesai dijawab, nilai skor       soal Pilihan Ganda secara otomatis akan langsung keluar </li>
            </ol>
            <hr>

            <h5>Soal Pilihan Ganda</h5>
            <?= form_open_multipart('quiz/quizResult')?>
            <?php
              $no = null;
              foreach ($row->result() as $key => $dataso) {;
            ?>
            <p class="text-black"><?= ++$no ?>. <?=$dataso->soal?></p>
              <input type="hidden" name="id[]" value="<?=$dataso->id?>">
              <input type="radio" name="pilihan[<?=$dataso->id?>]" value="A<?= $dataso->pil_a?>" required> A.  <?= $dataso->pil_a?> <br>
              <input type="radio" name="pilihan[<?=$dataso->id?>]" value="B<?= $dataso->pil_b?>"> B.  <?= $dataso->pil_b?> <br>
              <input type="radio" name="pilihan[<?=$dataso->id?>]" value="C<?= $dataso->pil_c?>"> C.  <?= $dataso->pil_c?> <br>
              <input type="radio" name="pilihan[<?=$dataso->id?>]" value="D<?= $dataso->pil_d?>"> D.  <?= $dataso->pil_d?> <br>
              <!-- <input type="radio" name="pilihan[<?=$dataso->id?>]" value="E<?= $dataso->pil_e?>"> E.  <?= $dataso->pil_e?> <br> -->
            <hr>
            <?php }?>
            <input type="hidden" name="jumlah" value="<?=$row->num_rows()?>">
            <div class="text-center">
              <button type="submit" class="btn btn-lg btn-flat btn-warning"><i class="fas fa-poll"></i><b> Nilai </b></button>
            </div>
            <?= form_close() ?>

          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->