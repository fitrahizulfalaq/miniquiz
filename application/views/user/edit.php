<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="col-12">
      <?php $this->view('message') ?>
      <div class="card-header">
        <a href="<?=base_url('user') ?? $row->id ?>" class="btn btn-info float-right"><i class="fas fa-backward"></i> Kembali</a>          
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
                <input type="hidden" name="id" required="" value="<?= $this->input->post('id') ?? $row->id ?>">
                <input type="text" class="form-control" name="username" placeholder="Ex: narutouzumaki" value="<?= $this->input->post('username') ?? $row->username ?>" required>
                <input type="text" class="form-control" value="<?= $this->input->post('email') ?? $row->email ?>" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-users"></span>
                  </div>
                </div>
              </div>                            
              <?php echo form_error('username')?>                        
            </div>
            <div class="form-group">
              <label>Password</label><small> (Kosongkan bila tidak diganti)</small>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" value="" id="password">
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
                <input type="text" class="form-control" name="nama" placeholder="Ex: Fitrah Izul Falaq" value="<?= $this->input->post('nama') ?? $row->nama ?>" required>
              </div>                            
              <?php echo form_error('nama')?>                        
            </div>
            <div class="form-group">
              <label>Tempat Lahir</label>
              <select name="tempat_lahir" class="form-control select2" required>
                <option value="<?= $this->input->post('tempat_lahir') ?? $row->tempat_lahir; ?>">Pilih : <?= $this->input->post('tempat_lahir') ?? $row->tempat_lahir; ?></option>
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
                <input type="date" class="form-control" name="tgl_lahir" placeholder="Ex: 20/01/98" value="<?= $this->input->post('tgl_lahir') ?? $row->tgl_lahir ?>" required>
              </div>                            
              <?php echo form_error('tgl_lahir')?>                        
            </div>
            <div class="form-group">
              <label>Fakultas</label>
              <?php if ($this->session->userdata('tipe_user') < 3) {?>
                <input type="text" class="form-control" name="fakultas" value="<?= $this->session->userdata('tipe_user') < 3 ? $this->session->userdata('fakultas') : $row->tgl_lahir; ?>" required readonly>
              <?php } else { ?>
              <select name="fakultas" class="form-control select2" required>
                  <option value="<?= $this->input->post('fakultas') ?? $row->fakultas; ?>">Pilih : <?= $this->input->post('fakultas') ?? $row->fakultas; ?></option>
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
                <option value="<?= $this->input->post('jurusan') ?? $row->jurusan; ?>">Pilih : <?= $this->input->post('jurusan') ?? $row->jurusan; ?></option>
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
                <option value="<?= $this->input->post('prodi') ?? $row->prodi; ?>">Pilih : <?= $this->input->post('prodi') ?? $row->prodi; ?></option>
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
                  <input type="number" class="form-control" name="tahun_masuk" placeholder="Ex: 1995" required value="<?= $this->input->post('tahun_masuk') ?? $row->tahun_masuk; ?>" />
                </div>
                <?php echo form_error('tahun_masuk')?>
              </div>
              <div class="form-group col-md-6">
                <label>Tahun Lulus</label>
                <input type="number" name="tahun_lulus" class="form-control" placeholder="Ex: 2000" value="<?= $this->input->post('tahun_lulus') ?? $row->tahun_lulus; ?>">
                <?php echo form_error('tahun_lulus')?>
              </div>
            </div>
            <div class="form-group">
              <label>Kelamin</label>
              <select name="kelamin" class="form-control" required>
                <option value="<?= $this->input->post('kelamin') ?? $row->kelamin; ?>">Pilih : <?= $this->input->post('kelamin') ?? $row->kelamin; ?></option>
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
                <input type="number" class="form-control" name="hp" placeholder="Ex: 081231390340" value="<?= $this->input->post('hp') ?? $row->hp ?>" required>
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
                <input type="text" class="form-control" name="email" placeholder="Ex: official.bikinkarya@gmail.com" value="<?= $this->input->post('email') ?? $row->email ?>" required>
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
                <input type="number" class="form-control" name="telp" placeholder="Ex: 0331 435122" value="<?= $this->input->post('telp') ?? $row->telp ?>" required>
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
                <input type="text" class="form-control" name="facebook" placeholder="Ex: Fitrah Izul Falaq" value="<?= $this->input->post('facebook') ?? $row->facebook ?>" required>
              </div>                            
              <?php echo form_error('facebook')?>                        
            </div>
            <div class="form-group">
              <label>Kenegaraan</label>
              <select name="negara" class="form-control select2" required>
                <option value="<?= $this->input->post('negara') ?? $row->negara; ?>">Pilih : <?= $this->input->post('negara') ?? $row->negara; ?></option>
                <?php
                  foreach ($this->fungsi->pilihan("tb_negara")->result() as $key => $pilihan) {;
                ?>
                <option value="<?= $pilihan->kode?>"><?= $pilihan->deskripsi?></option>
                <?php }?>
              </select>
              <?php echo form_error('negara')?>
            </div>
            <div class="form-group">
              <label>Provinsi</label>
              <select name="provinsi" class="form-control select2" id="provinsi" required>
                <option value="<?= $this->input->post('provinsi') ?? $row->provinsi; ?>">Pilih : <?= $this->input->post('provinsi') ?? $row->provinsi; ?></option>
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
                <option value="<?= $this->input->post('kota') ?? $row->kota; ?>">Pilih : <?= $this->input->post('kota') ?? $row->kota; ?></option>
              </select>
              <?php echo form_error('kota')?>
            </div>
            <div class="form-group">
              <label>Alamat Asal</label>
              <div class="input-group mb-3">
                <textarea class="form-control" rows="3" name="alamat_asal" required><?= $this->input->post('alamat_asal') ?? $row->alamat_asal; ?></textarea>
                <?php echo form_error('alamat_asal')?>                
              </div>                                                                  
            </div>
            <div class="form-group">
              <label>Alamat Domisili</label>
              <div class="input-group mb-3">
                <textarea class="form-control" rows="3" name="alamat_domisili" required><?= $this->input->post('alamat_domisili') ?? $row->alamat_domisili; ?></textarea>
                <?php echo form_error('alamat_domisili')?>                
              </div>                                                                  
            </div>
            <div class="form-group">
              <label>Pekerjaan</label>
              <select name="pekerjaan" class="form-control select2" required>
                <option value="<?= $this->input->post('Pekerjaan') ?? $row->pekerjaan; ?>">Pilih : <?= $this->input->post('Pekerjaan') ?? $row->pekerjaan; ?></option>
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
                <option value="<?= $this->input->post('gaji_perbulan') ?? $row->gaji_perbulan; ?>">Pilih : <?= $this->input->post('gaji_perbulan') ?? $row->gaji_perbulan; ?></option>
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
                <input type="text" class="form-control" name="nama_kantor" placeholder="Ex: PT Pertamina Persero" value="<?= $this->input->post('nama_kantor') ?? $row->nama_kantor ?>" required>
              </div>                            
              <?php echo form_error('nama_kantor')?>                        
            </div>
            <div class="form-group">
              <label>Kota Kantor</label>
              <select name="kota_kantor" class="form-control select2" required>
                <option value="<?= $this->input->post('kota') ?? $row->kota; ?>">Pilih : <?= $this->input->post('kota') ?? $row->kota; ?></option>
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
                <option value="<?= $this->input->post('agama') ?? $row->agama; ?>">Pilih : <?= $this->input->post('agama') ?? $row->agama; ?></option>
                <option value="Islam"> Islam </option>
                <option value="Budha"> Budha </option>
                <option value="Hindu"> Hindu </option>
                <option value="Kristen"> Kristen </option>
                <option value="Protestan"> Protestan </option>
                <option value="Konghucu"> Konghucu </option>
              </select>
              <?php echo form_error('agama')?>
            </div>
            <?php if ($this->session->userdata('tipe_user') < 2) { } else {?>
            <div class="form-group">
              <label>Tipe User</label>
              <select name="tipe_user" class="form-control" required>
                <option value="<?= $this->input->post('tipe_user') ?? $row->tipe_user; ?>">Pilih : <?= $this->input->post('tipe_user') ?? $row->tipe_user; ?></option>
                <?php
                  $this->db->where("id <=",$this->session->userdata('tipe_user'));
                  foreach ($this->fungsi->pilihan("tb_tipe_user")->result() as $key => $pilihan) {;
                ?>
                <option value="<?= $pilihan->id?>"><?= $pilihan->deskripsi?></option>
                <?php }?>
              </select>
              <?php echo form_error('tipe_user')?>
            </div>
            <?php }?>
            <div class="form-group">
              <label>Status</label>
              <select name="status" class="form-control" required>
                <option value="<?= $this->input->post('status') ?? $row->status; ?>">Pilih : <?= $this->input->post('status') ?? $row->status; ?></option>
                <option value="1">Aktif</option>
                <option value="2">Tidak Aktif</option>
              </select>
              <?php echo form_error('status')?>
            </div>
            <?php if($row->foto != null) {?>
            <div>
              <img src="<?=base_url('assets/dist/img/fotouser/'.$row->foto)?>" style="width: 10%"><br>
              <input type="hidden" name="foto" value="<?= $this->input->post('foto') ?? $row->foto; ?>">
              <a href="<?= site_url('user/hapusfoto/'.$row->id);?>"><small>Hapus foto?</small></a> 
            </div>
            <?php } else {  ?>             
            <div class="form-group">
              <label>Foto</label>
              <input type="file" class="form-control" accept=".jpg,.png,.jpeg" name="foto">
              <small>Maksimal ukuran file 514 Kb</small>
              <br>                     
            </div>            
            <?php } ?>            
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
