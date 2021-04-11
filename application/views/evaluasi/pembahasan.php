<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="card-header">
      <a href="<?= base_url('');?>" class="btn btn-info float-right btn-sm"><i class="fas fa-backward"></i> Kembali</a>          
    </div>
    <div class="alert alert-success alert-dismissible">
      <i class="icon fas fa-check"></i>
      Kamu telah selesai mengerjakan soal. Berikut pembahasan soal yang kamu    
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card collapsed-card">
          <div class="card-header bg-warning">
            <h3 class="card-title">Detail Skor Kamu</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
            </div>
          </div>
          
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered table-striped" width="100%" id="example">
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

        <!-- Profile Image -->
        <div class="card card-info card-outline">
          <div class="card-body box-profile">
            <div class="text-justify">              
              <table class="table table-bordered table-striped">
                <tr>
                  <td colspan="2"><p align="center"><strong>PILIHAN GANDA</strong></p></td>
                </tr>
                <tr>
                  <td ><p align="center"><strong>NO</strong></p></td>
                  <td ><p align="center"><strong>SOAL</strong></p></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>1.</strong></p></td>
                  <td  valign="top"><p>Alasan    utama terjadinya perang gerilya yang dipimpin Jenderal Sudirman adalah….</p>
                    <ol start="1" type="a">
                      <li>Terjadinya perang antara Tentara Jepang dan Tentara         Belanda</li>
                      <li><strong>Adanya Agresi Militer Belanda         ke-II yang menyerang Ibukota </strong></li>
                      <li>Tentara jepang melucuti senjata Tentara Indonesia</li>
                      <li>Jepang menguasai wilayah Yogyakarta </li>
                      <li>Jepang tidak terikat dengan         perjanjian <em>Renville</em></li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>2.</strong></p></td>
                  <td  valign="top"><p>Ciri-ciri    perang gerilya yang pernah diterapkan di Indonesia adalah…..</p>
                    <ol start="1" type="a">
                      <li>Melakukan penyerangan tidak secara kilat</li>
                      <li>Perang yang dilakukan secara terbuka</li>
                      <li>Kegiatan penyerangan tanpa menggunakan persenjataan</li>
                      <li><strong>Perang yang dilakukan secara         sembunyi-sembunyi</strong></li>
                      <li>Menyerang musuh dengan         perencanaan yang matang</li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>3.</strong></p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>&nbsp;</strong></p></td>
                  <td  valign="top"><p>Berikut    daftar wilayah di Jawa Timur!</p>
                    <table border="1" cellspacing="0" cellpadding="0" width="401">
                      <tr>
                        <td width="200" valign="top"><ol>
                          <li>Blitar </li>
                        </ol></td>
                        <td width="200" valign="top"><ol>
                          <li>Trenggalek</li>
                        </ol></td>
                      </tr>
                      <tr>
                        <td width="200" valign="top"><ol>
                          <li>Tulungagung</li>
                        </ol></td>
                        <td width="200" valign="top"><ol>
                          <li>Nganjuk</li>
                        </ol></td>
                      </tr>
                      <tr>
                        <td width="200" valign="top"><ol>
                          <li>Kediri</li>
                        </ol></td>
                        <td width="200" valign="top"><ol>
                          <li>Ponorogo</li>
                        </ol></td>
                      </tr>
                      <tr>
                        <td width="200" valign="top"><ol>
                          <li>Malang</li>
                        </ol></td>
                        <td width="200" valign="top"><ol>
                          <li>Surabaya</li>
                        </ol></td>
                      </tr>
                    </table>
                    <p>Bagian    wilayah Jawa Timur yang dilalui rute perang gerilya antara lain…..</p>
                    <ol start="1" type="a">
                      <li>1,2,3,4</li>
                      <li>1,3,5,6</li>
                      <li>2,3,6,8</li>
                      <li>2,5,7,8</li>
                      <li><strong>3,4,5,6</strong></li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>4.</strong></p></td>
                  <td  valign="top"><p>Berapa    kali rombongan gerilya Jenderal Sudirman saat melewati Trenggalek?</p>
                    <ol start="1" type="a">
                      <li>Satu kali</li>
                      <li><strong>Dua kali</strong></li>
                      <li>Tiga kali</li>
                      <li>Tidak dilalui</li>
                      <li>Semua jawaban salah</li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>5.</strong></p></td>
                  <td  valign="top"><p>Manakah    rute gerilya Jenderal Sudirman saat melewati Trenggalek yang benar?</p>
                    <ol start="1" type="a">
                      <li>Tulungagung-Trenggalek-Ponorogo-Madiun</li>
                      <li>Pacitan-Trenggalek-Tulungagung-Kediri</li>
                      <li>Kediri-Tulungagung-Trenggalek-Pacitan</li>
                      <li>Madiun-Ponorogo-Trenggalek-Tulungagung </li>
                      <li><strong>Ponorogo-Trenggalek-Tulungagung-Kediri</strong></li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>6.</strong></p></td>
                  <td  valign="top"><p>Saat    di Trenggalek para rombongan gerilya diberhentikan oleh Batalyon 102. Alasan    mendasar rombongan di berhentikan yaitu….</p>
                    <ol start="1" type="a">
                      <li>Rombongan dicurigai membawa &ldquo;Orang Belanda&rdquo;</li>
                      <li>Rombongan gerilya membawa persenjataan yang         berlebihan</li>
                      <li>Kapten Supardjo dicurigai oleh Batalyon 102</li>
                      <li><strong>Rombongan membawa &ldquo;Seorang         tahanan penting&rdquo;</strong></li>
                      <li>Rombongan gerilya membawa         &ldquo;BOM&rdquo;</li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><a name="_heading=h.gjdgxs"></a><strong>7.</strong></p></td>
                  <td  valign="top"><p>Siapakah    K. Abdul Mukti?</p>
                    <ol start="1" type="a">
                      <li><strong>Pemuka Agama di masjid         Bendorejo </strong></li>
                      <li>Menteri Agama Indonesia saat itu</li>
                      <li>Pendiri Masjid Bendorejo</li>
                      <li>Penasehat Spiritual Panglima Jenderal Sudirman</li>
                      <li>Semua jawaban Salah  </li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>8.</strong></p></td>
                  <td  valign="top"><p>Saat    beristirahat di Bendorejo, para rombongan mengetahui bahwa <strong>&ldquo;seorang tawanan&rdquo;</strong>yang dimaksud yaitu    Jenderal Sudirman. Langkah yang dilakukan Jendral Sudirman selanjutnya yaitu?</p>
                    <ol start="1" type="a">
                      <li>Meminta Kapten Supardjo untuk melanjutkan gerilya</li>
                      <li>Melakukan penjagaan dan pengawasan secara ketat</li>
                      <li><strong>Meminta Zaenal Fanani untuk         menghubungi Kolonel Soengkono</strong></li>
                      <li>Meminta Kapten Supardjo untuk menghubungi Zaenal         Fanani</li>
                      <li>Berkoordinasi dengan Batalyon 103 </li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>9.</strong></p></td>
                  <td  valign="top"><p>Walau    dalam keadaan sakit dan dalam melakukan perang gerilya, Jenderal Sudirman    selalu menyempatkan waktunya untuk sholat. Hal tersebut mencerminkan sosok    Jenderal Sudirman yang…..</p>
                    <ol start="1" type="a">
                      <li>Berjiwa sosial</li>
                      <li>Cinta Tanah Air</li>
                      <li>Berilmu Tinggi</li>
                      <li>Berjiwa Ksatria </li>
                      <li><strong>Religius</strong></li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>10.</strong></p></td>
                  <td  valign="top"><p>Jenderal    Sudirman merupakan salah satu sosok penting dalam memperjuangkan kemerdekaan    dan mempertahankan Indonesia. Hal tersebut tercerminkan dalam…..</p>
                    <ol start="1" type="a">
                      <li>Bergabung di Tentara Keamanan Rakyat dan memimpin Agresi Militer Belanda II</li>
                      <li>Bergabung di NICA dan memimpin Perang Ambarawa</li>
                      <li>Bergabung di NICA dan memimpin Perang Gerilya</li>
                      <li>Bergabung di Heiho dan memimpin Perang Ambarawa</li>
                      <li><strong>Bergabung di Pasukan Pembela         Tanah Air dan memimpin Perang Gerilya</strong></li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>11.</strong></p></td>
                  <td  valign="top"><p>Walaupun    dalam keadaan sakit, Panglima Sudirman tetap melakukan Perang Gerilya demi    mempertahankan kemerdekaan Indonesia dan mengorbankan segalanya untuk tanah    Air Indonesia. Hal tersebut mencerminkan sikap…</p>
                    <ol start="1" type="a">
                      <li><strong>Patriotisme</strong></li>
                      <li>Nasionalisme</li>
                      <li>Cinta Tanah Air</li>
                      <li>Pantang Menyerah</li>
                      <li>Kepahlawanan</li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>12.</strong></p></td>
                  <td  valign="top"><p>Rute    Kedua gerilya Jenderal Sudirman saat melewati Trenggalek yaitu….</p>
                    <ol start="1" type="a">
                      <li>Pacitan-Ponorogo-Trenggalek-Tulungagung </li>
                      <li>Ponorogo-Trenggalek-Tulungagung-Kediri</li>
                      <li>Kediri-Tulungagung-Trenggalek-Pacitan</li>
                      <li><strong>Madiun-Ponorogo-Trenggalek-Pacitan</strong></li>
                      <li>Tulungagung-Trenggalek-Pacitan-Ponorogo</li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>13.</strong></p></td>
                  <td  valign="top"><p>Siapakah    yang menjadi petunjuk jalan Jenderal Sudirman saat menuju ke Nglorok,    Pacitan?</p>
                    <ol start="1" type="a">
                      <li><strong>Pak Muridan</strong></li>
                      <li>Pak Yasin</li>
                      <li>Pak Sukemi</li>
                      <li>Pak Zaenal</li>
                      <li>Pak Istijab</li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>14. </strong></p></td>
                  <td  valign="top"><p>Titik    terakhir persinggahan Jenderal Sudirman di Trenggalek menuju Pacitan yaitu….</p>
                    <ol start="1" type="a">
                      <li><strong>Di rumah Bapak Ngabdi, Desa         Bodag</strong></li>
                      <li>Di rumah Bapak Mukti, Desa Bendorejo</li>
                      <li>Di rumah Bapak Partodiwiryo Desa Dongko</li>
                      <li>Di rumah janda Ibu Jamilatun, Desa Nogosari</li>
                      <li>Di rumah Bapak Muridan, Desa         Panggul</li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>15.</strong></p></td>
                  <td  valign="top"><p>Apa    yang dapat dipelajari saat Jenderal Sudirman beristirahat di Desa Suruh?</p>
                    <ol start="1" type="a">
                      <li>Sudirman melaksanakan sholat tepat waktu</li>
                      <li>Memperhatikan keadaan dan kondisi para rombongan</li>
                      <li><strong>Walau dalam keadaan sakit,         beliau tetap gigih dan semangat dalam gerilya</strong></li>
                      <li>Memutuskan suatu keputusan dengan sangat bijaksana</li>
                      <li>Semua jawaban benar </li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>16. </strong></p></td>
                  <td  valign="top"><p>Zainal    Fanani merupakan salah satu tokoh yang terlibat saat rombongan gerilya    melewati Trenggalek. Siapakah Zainal Fanani?</p>
                    <ol start="1" type="a">
                      <li>Prajurit Rombongan Perang Gerilya</li>
                      <li>Penasihat Politik dalam Perang Gerilya</li>
                      <li>Staff Kolonel Soengkono</li>
                      <li><strong>Komandan Batalyon 102         Trenggalek</strong></li>
                      <li>Komandan TRIP Trenggalek</li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>17.</strong></p></td>
                  <td  valign="top"><p>Tanggal    berapa rombongan meninggalkan Trenggalek menuju ke Kediri?</p>
                    <ol start="1" type="a">
                      <li>21 Desember 1948</li>
                      <li>22 Desember 1948</li>
                      <li><strong>23 Desember 1948</strong></li>
                      <li>24 Desember 1948</li>
                      <li>25 Desember 1948 </li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>18.</strong></p></td>
                  <td  valign="top"><p><img width="356" height="208" src="<?= base_url()?>/assets/dist/img/foto-soal/soal-18.jpg" alt="">
                    <p> Perhatikan gambar di atas! Gambar di atas merupakan rumah persinggahan yang pernah ditempati Jenderal Sudirman dan rombongan saat gerilya. Rumah tersebut merupakan………….  </p>
                    <ol start="1" type="a">
                      <li>Rumah Bapak Ngabdi, Desa Suruh Wetan </li>
                      <li>Rumah Janda Ibu Jamilatun, Desa Dongko</li>
                      <li>Rumah Bapak Ngabdi, Desa Nglongsor</li>
                      <li><strong>Rumah Janda Ibu Jamilatun,         Desa Bodag</strong></li>
                      <li>Rumah Bapak Ngabdi, Desa         Karangan</li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>19.</strong></p></td>
                  <td  valign="top"><p>Hal-hal    yang dapat dipelajari dari sosok Jenderal Sudirman antara lain…..</p>
                    <ol start="1" type="a">
                      <li>Semangat juang dalam mempertahankan kemerdekaan         Indonesia</li>
                      <li>Mementingkan kepentingan negara diatas kepentingan         pribadi</li>
                      <li>Tidak pernah meninggalkan ibadah walau dalam keadaan         apapun</li>
                      <li>Memiliki jiwa patriotisme yang tinggi</li>
                      <li><strong>Jawaban a,b,c dan d benar</strong></li>
                    </ol></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>20.</strong></p></td>
                  <td  valign="top"><p>Pasca    dari Desa Bodag, kemanakah para rombongan melanjutkan gerilyanya?</p>
                    <ol start="1" type="a">
                      <li>Desa Sedayu, Ponorogo</li>
                      <li>Desa Suruh, Trenggalek </li>
                      <li><strong>Desa Nogosari, Pacitan</strong></li>
                      <li>Desa Jambu, Madiun</li>
                      <li>Desa Bajulan, Nganjuk</li>
                    </ol></td>
                </tr>
                <tr>
                  <td colspan="2"><p align="center"><strong>ESSAY</strong></p></td>
                </tr>
                <tr>
                  <td  valign="top"><p><strong>1. </strong></p></td>
                  <td  valign="top"><p>Berdasarkan    materi yang telah disajikan, coba analisis mengapa rute kedua gerilya    Jenderal Sudirman saat di Trenggalek memiliki rute yang panjang dibandingkan    dengan rute yang pertama? </p></td>
                </tr>
                <tr>
                  <td colspan="2" valign="top"><p><strong>Pembahasan: </strong></p>
                    <ol start="1" type="1">
                      <li>Rute pertama gerilya saat di Trenggalek hanya         dilewati satu tempat yaitu di Bendorejo, Pogalan dan tidak beristirahat         lama karena rombongan harus menuju ke wilayah Tulungagung. </li>
                      <li>Saat rute pertama melewati Trenggalek tidak adanya         halangan atau serangan dari Belanda sehingga kondisi fisik yang masih         stabil. </li>
                      <li>Rute kedua saat melewati Trenggalek menuju Pacitan         memiliki jarak yang cukup jauh sehingga membutuhkan waktu yang lumayan         lama.</li>
                      <li>Sebelum memasuki Trenggalek         kedua kalinya, para rombongan di Ponorogo telah dikepung dan diserang oleh Belanda sehingga saat         memasuki Trenggalek para rombongan kondisi fisiknya menurun dan         membutuhkan tempat beristirahat. Sehingga rute kedua memiliki tempat         persinggahan yang lebih banyak </li>
                    </ol></td>
                </tr>
              </table>


            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->        
      </div>      
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
