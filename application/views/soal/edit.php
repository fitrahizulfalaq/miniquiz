<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="col-12">
      <div class="card-header">
        <a href="<?=base_url('soal');?>" class="btn btn-info float-right"><i class="fas fa-backward"></i> Kembali</a>          
      </div>
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"><?=$menu?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="" method="post">
          <input type="hidden" value="<?= $row->id?>" name="id">
          <div class="card-body">
            <div class="form-group">
              <label>Soal</label>              
              <textarea class="form-control" rows="3" name="soal" required="" style="width: 100%"><?= $this->input->post('soal') ?? $row->soal ?></textarea>
              <?php echo form_error('soal')?>                        
            </div>
            <div class="form-group">
              <label>Pilihan</label>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span>A</span>
                  </div>
                </div>
                <input type="text" class="form-control" name="pil_a" placeholder="Pilihan A" value="<?= $this->input->post('pil_a') ?? $row->pil_a ?>" required>
              </div>                            
              <?php echo form_error('pil_a')?>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span>B</span>
                  </div>
                </div>
                <input type="text" class="form-control" name="pil_b" placeholder="Pilihan B" value="<?= $this->input->post('pil_b') ?? $row->pil_b ?>" required>
              </div>                            
              <?php echo form_error('pil_b')?>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span>C</span>
                  </div>
                </div>
                <input type="text" class="form-control" name="pil_c" placeholder="Pilihan C" value="<?= $this->input->post('pil_c') ?? $row->pil_c ?>" required>
              </div>                            
              <?php echo form_error('pil_c')?>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span>D</span>
                  </div>
                </div>
                <input type="text" class="form-control" name="pil_d" placeholder="Pilihan D" value="<?= $this->input->post('pil_d') ?? $row->pil_d ?>" required>
              </div>                            
              <?php echo form_error('pil_d')?>
              <!-- <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span>E</span>
                  </div>
                </div>
                <input type="text" class="form-control" name="pil_e" placeholder="Pilihan E" value="<?= $this->input->post('pil_e') ?? $row->pil_e ?>" required>
              </div>                            
              <?php echo form_error('pil_e')?>      -->                   
            </div>
            <div class="form-group">
              <label>Kunci</label>
              <select class="form-control" name="kunci" required>
                <option value="<?= $this->input->post('kunci') ?? $row->kunci ?>">Pilihan : <?= $this->input->post('kunci') ?? $row->kunci ?></option>
                <option value="pil_a">Pilihan A</option>
                <option value="pil_b">Pilihan B</option>
                <option value="pil_c">Pilihan C</option>
                <option value="pil_d">Pilihan D</option>
                <!-- <option value="pil_e">Pilihan E</option> -->
              </select>                
              <?php echo form_error('kunci')?>
            </div>
            <div class="form-group">
              <label>Pembahasan</label>              
              <textarea class="form-control" rows="3" name="pembahasan" required="" style="width: 100%"><?= $this->input->post('pembahasan') ?? $row->pembahasan ?></textarea>
              <?php echo form_error('pembahasan')?>                        
            </div>
            <div class="form-group">
              <label>Durasi</label>
              <select class="form-control" name="durasi" required>
                <option value="<?= $this->input->post('durasi') ?? $row->durasi ?>">Pilihan : <?= $this->input->post('durasi') ?? $row->durasi ?></option>
                <option value="60">60 Detik</option>
                <option value="90">90 Detik</option>
              </select>                
              <?php echo form_error('durasi')?>
            </div>                                                            
            <div class="form-check">
              <input type="checkbox" class="form-check-input" required>
              <label class="form-check-label" for="exampleCheck1">Pastikan data sudah benar</label>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Edit</button>
            <button type="reset" class="btn btn-danger">Ulangi</button>            
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
    </div>
  </div>
</section>