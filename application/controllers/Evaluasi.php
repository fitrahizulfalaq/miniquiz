<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		check_not_login();
        $this->load->model('evaluasi_m');
	}

	public function index()
    {
        if ($this->session->tipe_user == 2) {
            redirect('evaluasi/admin');
        }

        //Cek Penilaian
        $cek_penilaian = $this->fungsi->hitung_rows("tb_penilaian","user_id",$this->session->id);
        if ($cek_penilaian != null) {
            redirect('evaluasi/pembahasan');
        }

		$this->load->library('form_validation');
        $data['row'] = $this->fungsi->pilihan("tb_soal");
        $data['menu'] = "Evaluasi";            
        $this->templateadmin->load('template/dashboard','evaluasi/lembar_kerja',$data);
	}

    public function detail()
    {
        if ($this->session->tipe_user == 1) {
            redirect('evaluasi');
        }
        $id = $this->uri->segment(3);
        $data['nama_siswa'] = $this->fungsi->get_deskripsi_advanced("tb_user","id",$id,"nama");
        $data['menu'] = "Data Nilai";
        $data['penilaian'] = $this->evaluasi_m->get_penilaian($id)->row();
        
        // Cek Nilai
        $row_riwayat_jawaban = $this->evaluasi_m->get_riwayat_jawaban($id)->num_rows();
        if ($row_riwayat_jawaban == null) {
            $this->session->set_flashdata('warning','Siswa ini belum mengerjakan');
            redirect('evaluasi/admin');
        } else {
            $data['row_riwayat_jawaban'] = $this->evaluasi_m->get_riwayat_jawaban($id);
        }
        $this->templateadmin->load('template/dashboard','evaluasi/evaluasi_detail',$data);
    }

    public function admin()
    {
        if ($this->session->tipe_user == 1) {
            redirect('evaluasi');
        }

        $data['menu'] = "Detail";
        $data['previllage'] = 4;
        $data['row'] = $this->evaluasi_m->get_user();
        $this->templateadmin->load('template/dashboard','evaluasi/evaluasi_data',$data);
    }

    public function hasil(){    
        $post = $this->input->post(null, TRUE);

        if ($post == null ) {
            redirect('evaluasi','refresh');
        }

        $jumlah = $post["jumlah"];
        $essay = $post["essay"];
        $pilihan = $post["pilihan"];
        $id_soal = $post["id"];        
        $user_id = $this->session->id;        
                    
        $score = 0;
        $benar = 0;
        $salah = 0;
        $kosong = 0;

        for ($i=0; $i < $jumlah; $i++) { 
            $nomor = $id_soal[$i];

            if (empty($pilihan[$nomor])) {
                $kosong++;
            } else {
                // $jawaban = $pilihan[$nomor];
                $jawaban = substr($pilihan[$nomor], 1);
                $pil_jawaban = substr($pilihan[$nomor], 0, 1);

                //Input Riwayat Jawaban di DB
                $jawaban_rows = $this->fungsi->hitung_rows_multiple("tb_riwayat_jawaban","user_id",$this->session->id,"soal_id",$nomor);
                if ($jawaban_rows == null ) {
                    $this->evaluasi_m->simpan_riwayat_jawaban($this->session->id,$nomor,$pil_jawaban);
                }

                //Cocokkan dengan jawaban di db
                $this->db->where("id",$nomor);
                $this->db->where("kunci",$jawaban);
                $cek = $this->db->get("tb_soal")->num_rows();

                if ($cek) {
                    $benar++;
                } else {
                    $salah++;
                }               
            }

        }

        //Rata-rata
        $score = 100 / $jumlah * $benar;
        $hasil = number_format($score, 0);
        
        if ($hasil < 80 ) {
            $pesan = "danger";
            $status = "Maaf kamu belum lulus, jangan patah semangat ya..";          
        } else {
            $pesan = "success";
            $status = "Yey, kamu berhasil, selamat ya...";
        }

        $this->session->set_flashdata($pesan,'Skor kamu '.$hasil."<br><h4>".$status."</h4>");

        // Simpan Hasil Di DB
        $penilaian_rows = $this->fungsi->hitung_rows("tb_penilaian","user_id",$this->session->id);
            if ($penilaian_rows == null ) {
                $this->evaluasi_m->simpan_penilaian($this->session->id,$hasil,$benar,$salah,$kosong,$essay);
            }
        

        $data["jumlah_soal"]    = $jumlah;
        $data["benar"]  = $benar;
        $data["salah"]  = $salah;
        $data["hasil"]  = $hasil;
        $data["kosong"] = $kosong;
        $data["status"] = $status;
        $data["pesan"]  = $pesan;
        $data["essay"]  = $essay;
        $data['menu'] = "Hasil";

        $this->templateadmin->load('template/dashboard','evaluasi/hasil',$data);
    }

    public function reset(){

        //Cek Super user
        if ($this->session->tipe_user < 2) {
            redirect('evaluasi');
        }

        $this->db->truncate('tb_penilaian');
        $this->db->truncate('tb_riwayat_jawaban');
        $this->session->set_flashdata('warning','Berhasil Di Reset');
        redirect('evaluasi/admin/','refresh');
                                    
    }

    public function Pembahasan()
    {
        //Cek Penilaian
        $cek_penilaian = $this->fungsi->hitung_rows("tb_penilaian","user_id",$this->session->id);
        if ($cek_penilaian == null) {
            redirect('evaluasi');
        }

        $data['menu'] = "Pembahasan";
        $data['penilaian'] = $this->evaluasi_m->get_penilaian($this->session->id)->row();
        $this->templateadmin->load('template/dashboard','evaluasi/pembahasan',$data);
    }
	

}
