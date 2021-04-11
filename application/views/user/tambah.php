<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="col-12">
      <?php $this->view('message') ?>
      <div class="card-header">
        <a href="<?=base_url('user');?>" class="btn btn-info float-right"><i class="fas fa-backward"></i> Kembali</a>          
      </div>
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"><?=$menu?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <?= form_open_multipart('')?>
          <div class="card-body">
            <div class="form-group">
              <label>Username</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="username" placeholder="Ex: narutouzumaki" value="<?= set_value('username');?>" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-users"></span>
                  </div>
                </div>
              </div>                            
              <?php echo form_error('username')?>                        
            </div>
            <div class="form-group">
              <label>Password</label>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" value="<?= set_value('password');?>" id="password" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock" onclick="showPassword()"></span>
                  </div>
                </div>
              </div>                            
              <?php echo form_error('password')?>                        
            </div>
            <div class="form-group">
              <label>Nama</label>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
                <input type="text" class="form-control" name="nama" placeholder="Ex: Fitrah Izul Falaq" value="<?= set_value('nama');?>" required>
              </div>                            
              <?php echo form_error('nama')?>                        
            </div>
            <div class="form-group">
              <label>Tempat Lahir</label>
              <select name="tempat_lahir" class="form-control select2" required>
                <option value="<?= set_value('tempat_lahir'); ?>">Pilih : <?= set_value('tempat_lahir'); ?></option>
                <?php
                  foreach ($this->fungsi->pilihan("tb_kota")->result() as $key => $pilihan) {;
                ?>
                <option value="<?= $pilihan->deskripsi?>"><?= $pilihan->deskripsi?></option>
                <?php }?>
              </select>
              <?php echo form_error('tempat_lahir')?>
            </div>
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-calendar"></span>
                  </div>
                </div>
                <input type="date" class="form-control" name="tgl_lahir" placeholder="Ex: 20/01/98" value="<?= set_value('tgl_lahir');?>" required>
              </div>                            
              <?php echo form_error('tgl_lahir')?>                        
            </div>
            <div class="form-group">
              <label>Fakultas</label>
              <?php if ($this->session->userdata('tipe_user') < 3 and $this->session->userdata('tipe_user') != null) {?>
                <input type="text" class="form-control" name="fakultas" value="<?= $this->session->userdata('tipe_user') < 3 ? $this->session->userdata('fakultas') : set_value('fakultas'); ?>" required readonly>
              <?php } elseif ($this->session->userdata('tipe_user') > 3 || $this->session->userdata('tipe_user') == null) { ?>
              <select name="fakultas" class="form-control select2" required>
                  <option value="<?= set_value('fakultas'); ?>">Pilih : <?= set_value('fakultas'); ?></option>
                  <?php
                    foreach ($this->fungsi->pilihan("tb_fakultas")->result() as $key => $pilihan) {;
                  ?>
                  <option value="<?= $pilihan->kode?>"><?= $pilihan->deskripsi?></option>
                <?php }?>
              </select>
              <?php }?>
              <?php echo form_error('fakultas')?>
            </div>
            <div class="form-group">
              <label>Jurusan</label>
              <select name="jurusan" class="form-control select2" required>
                <option value="<?= set_value('jurusan'); ?>">Pilih : <?= set_value('jurusan'); ?></option>
                <?php
                  foreach ($this->fungsi->pilihan("tb_jurusan")->result() as $key => $pilihan) {;
                ?>
                <option value="<?= $pilihan->kode?>"><?= $pilihan->deskripsi?></option>
                <?php }?>
              </select>
              <?php echo form_error('jurusan')?>
            </div>
            <div class="form-group">
              <label>Prodi</label>
              <select name="prodi" class="form-control select2" required>
                <option value="<?= set_value('prodi'); ?>">Pilih : <?= set_value('prodi'); ?></option>
                <?php
                  foreach ($this->fungsi->pilihan("tb_prodi")->result() as $key => $pilihan) {;
                ?>
                <option value="<?= $pilihan->kode?>"><?= $pilihan->deskripsi?></option>
                <?php }?>
              </select>
              <?php echo form_error('prodi')?>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <div class="form-group">
                  <label>Tahun Masuk</label>
                  <input type="number" class="form-control" name="tahun_masuk" placeholder="Ex: 1995" required value="<?= set_value('tahun_masuk'); ?>" />
                </div>
                <?php echo form_error('tahun_masuk')?>
              </div>
              <div class="form-group col-md-6">
                <label>Tahun Lulus</label>
                <input type="number" name="tahun_lulus" class="form-control" placeholder="Ex: 2000" value="<?= set_value('tahun_lulus'); ?>">
                <?php echo form_error('tahun_lulus')?>
              </div>
            </div>
            <div class="form-group">
              <label>Kelamin</label>
              <select name="kelamin" class="form-control" required>
                <option value="<?= set_value('kelamin'); ?>">Pilih : <?= set_value('kelamin'); ?></option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
              <?php echo form_error('kelamin')?>
            </div>
            <div class="form-group">
              <label>HP</label>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span>+62</span>
                  </div>
                </div>
                <input type="number" class="form-control" name="hp" placeholder="Ex: 081231390340" value="<?= set_value('hp');?>" required>
              </div>                            
              <?php echo form_error('hp')?>                        
            </div>
            <div class="form-group">
              <label>Email</label>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
                <input type="text" class="form-control" name="email" placeholder="Ex: official.bikinkarya@gmail.com" value="<?= set_value('email');?>" required>
              </div>                            
              <?php echo form_error('email')?>                        
            </div>
            <div class="form-group">
              <label>Telp</label>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-phone"></span>
                  </div>
                </div>
                <input type="number" class="form-control" name="telp" placeholder="Ex: 0331 435122" value="<?= set_value('telp');?>" required>
              </div>                            
              <?php echo form_error('telp')?>                        
            </div>
            <div class="form-group">
              <label>Facebook</label>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fab fa-facebook-square"></span>
                  </div>
                </div>
                <input type="text" class="form-control" name="facebook" placeholder="Ex: Fitrah Izul Falaq" value="<?= set_value('facebook');?>" required>
              </div>                            
              <?php echo form_error('facebook')?>                        
            </div>
            <div class="form-group">
              <label>Kenegaraan</label>
              <select name="negara" class="form-control select2" required>
                <option value="<?= set_value('negara'); ?>">Pilih : <?= set_value('negara'); ?></option>
                <?php
                  foreach ($this->fungsi->pilihan("tb_negara")->result() as $key => $pilihan) {;
                ?>
                <option value="<?= $pilihan->deskripsi?>"><?= $pilihan->deskripsi?></option>
                <?php }?>
              </select>
              <?php echo form_error('negara')?>
            </div>
            <div class="form-group">
              <label>Provinsi</label>
              <select name="provinsi" class="form-control select2" id="provinsi" required>
                <option value="<?= set_value('provinsi'); ?>">Pilih : <?= set_value('provinsi'); ?></option>
                <?php
                  foreach ($this->fungsi->pilihan("tb_provinsi")->result() as $key => $pilihan) {;
                ?>
                <option value="<?= $pilihan->id?>"><?= $pilihan->deskripsi?></option>
                <?php }?>
              </select>
              <?php echo form_error('provinsi')?>
            </div>
            <div class="form-group">
              <label>Kota</label>
              <select name="kota" class="kota form-control select2" required>
                <option value="<?= set_value('kota'); ?>">Pilih : <?= set_value('kota'); ?></option>
              </select>
              <?php echo form_error('kota')?>
            </div>
            <div class="form-group">
              <label>Alamat Asal</label>
              <div class="input-group mb-3">
                <textarea class="form-control" rows="3" name="alamat_asal" required><?= set_value('alamat_asal'); ?></textarea>
                <?php echo form_error('alamat_asal')?>                
              </div>                                                                  
            </div>
            <div class="form-group">
              <label>Alamat Domisili</label>
              <div class="input-group mb-3">
                <textarea class="form-control" rows="3" name="alamat_domisili" required><?= set_value('alamat_domisili'); ?></textarea>
                <?php echo form_error('alamat_domisili')?>                
              </div>                                                                  
            </div>
            <div class="form-group">
              <label>Pekerjaan</label>
              <select name="pekerjaan" class="form-control select2" required>
                <option value="<?= set_value('Pekerjaan'); ?>">Pilih : <?= set_value('Pekerjaan'); ?></option>
                <?php
                  foreach ($this->fungsi->pilihan("tb_pekerjaan")->result() as $key => $pilihan) {;
                ?>
                <option value="<?= $pilihan->deskripsi?>"><?= $pilihan->deskripsi?></option>
                <?php }?>
              </select>
              <?php echo form_error('Pekerjaan')?>
            </div>
            <div class="form-group">
              <label>Gaji Perbulan</label>
              <select name="gaji_perbulan" class="form-control" required>
                <option value="<?= set_value('gaji_perbulan'); ?>">Pilih : <?= set_value('gaji_perbulan'); ?></option>
                <option value="< Rp. 1.500.000"> < Rp. 1.500.000 </option>
                <option value="Rp. 1.500.000 - Rp. 3.000.000"> Rp. 1.500.000 - Rp. 3.000.000 </option>
                <option value="Rp. 3.000.000 - Rp. 6.000.000"> Rp. 3.000.000 - Rp. 6.000.000 </option>
                <option value="Rp. 6.000.000 - Rp. 10.000.000"> Rp. 6.000.000 - Rp. 10.000.000 </option>
                <option value="> Rp. 10.000.000"> > Rp. 10.000.000 </option>
              </select>
              <?php echo form_error('gaji_perbulan')?>
            </div>
            <div class="form-group">
              <label>Nama Kantor</label>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-building"></span>
                  </div>
                </div>
                <input type="text" class="form-control" name="nama_kantor" placeholder="Ex: PT Pertamina Persero" value="<?= set_value('nama_kantor');?>" required>
              </div>                            
              <?php echo form_error('nama_kantor')?>                        
            </div>
            <div class="form-group">
              <label>Kota Kantor</label>
              <select name="kota_kantor" class="form-control select2" required>
                <option value="<?= set_value('kota'); ?>">Pilih : <?= set_value('kota'); ?></option>
                <?php
                  foreach ($this->fungsi->pilihan("tb_kota")->result() as $key => $pilihan) {;
                ?>
                <option value="<?= $pilihan->deskripsi?>"><?= $pilihan->deskripsi?></option>
                <?php }?>
              </select>
              <?php echo form_error('kota')?>
            </div>
            <div class="form-group">
              <label>Agama</label>
              <select name="agama" class="form-control" required>
                <option value="<?= set_value('agama'); ?>">Pilih : <?= set_value('agama'); ?></option>
                <option value="Islam"> Islam </option>
                <option value="Budha"> Budha </option>
                <option value="Hindu"> Hindu </option>
                <option value="Kristen"> Kristen </option>
                <option value="Protestan"> Protestan </option>
                <option value="Konghucu"> Konghucu </option>
              </select>
              <?php echo form_error('agama')?>
            </div>
            <?php if ($this->session->userdata('tipe_user')) { } else {?>
            <div class="form-group">
              <label>Tipe User</label>
              <select name="tipe_user" class="form-control" required>
                <option value="<?= set_value('tipe_user'); ?>">Pilih : <?= set_value('tipe_user'); ?></option>
                <?php
                  foreach ($this->fungsi->pilihan("tb_tipe_user")->result() as $key => $pilihan) {;
                ?>
                <option value="<?= $pilihan->id?>"><?= $pilihan->deskripsi?></option>
                <?php }?>
              </select>
              <?php echo form_error('tipe_user')?>
            </div>
            <?php }?>
            <div class="form-group">
              <label>Foto</label>
              <input type="file" class="form-control" accept=".jpg,.png,.jpeg" name="foto">
              <small>Maksimal ukuran file 514 Kb</small>                     
            </div>            
            <div class="form-check">
              <input type="checkbox" class="form-check-input" required>
              <label class="form-check-label" for="exampleCheck1">Pastikan data sudah benar</label>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Tambah</button>
            <button type="reset" class="btn btn-danger">Ulangi</button>            
          </div>
        <?= form_close() ?>
      </div>
      <!-- /.card -->
    </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  function showPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
