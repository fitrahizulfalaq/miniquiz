<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		checkStartQuiz();
		$this->load->model('quiz_m');
	}

	public function index()
	{
		$data['menu'] = "Selamat datang di MAPS";
		$this->templateadmin->load('template/publik','page/landing_publik',$data);
	}

	public function setCharacter()
	{
		$character = $this->uri->segment(3);
		$id = $this->session->id;

		if ($character == null) {
			redirect('quiz');
		} else {
			$this->quiz_m->setCharacter($character);			
		}

		redirect('quiz/menu');

	}

	public function menu()
	{
		$data['menu'] = "Menu Aplikasi Maps";
		$data['nilai'] = $this->quiz_m->getNilai($this->session->id);
		$this->templateadmin->load('template/publik','quiz/menu',$data);		
	}

	public function modul()
	{		
	$this->load->model('modul_m');
	$data['menu'] = "Update Materi Terbaru";

	//Pagination
	$this->load->library('pagination');
	$config['base_url'] = base_url('modul/index');
	$config['total_rows'] = $this->modul_m->get()->num_rows(); 		
	$config['per_page'] = 10;
	//Halaman
	$config['start'] = $this->uri->segment(3);
	//Style Pagination
	$config['first_link']       = 'Awal';
	$config['last_link']        = 'Terakhir';
    $config['next_link']        = '>>';
    $config['prev_link']        = '<<';
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		//Mulai
		$data['row'] = $this->modul_m->get_modul($config['per_page'],$config['start']);

		$this->templateadmin->load('template/publik','modul/modul_data_publik',$data);
	}

	public function modulDetail($id)
	{					
		$this->load->model('modul_m');
		$query = $this->modul_m->get($id);
		if ($query->num_rows() > 0) {
			$data['url'] = base_url('assets/dist/img/file-modul/'.$query->row("file"));
			$this->load->view('modul/modul_detail',$data);
		} else {
			echo "<script>alert('Data Tidak Ditemukan');</script>";
			echo "<script>window.location='".site_url('user')."';</script>";
		}				    
	}

	public function tentang()
	{
		$data['menu'] = "Tentang Website";
		$this->templateadmin->load('template/publik','page/tentang',$data);
	}

	public function startQUiz()
	{
		//Cek Penilaian
        $cek_penilaian = $this->fungsi->hitung_rows("tb_penilaian","user_id",$this->session->id);
        if ($cek_penilaian != null) {
            $this->session->set_flashdata('danger','Hanya bisa mengisi 1 kali');
            redirect('quiz/viewResult');
        }

		$this->load->library('form_validation');
        $data['row'] = $this->fungsi->pilihan("tb_soal");
        $data['menu'] = "Quiz";            
        $this->templateadmin->load('template/publik','quiz/lembar_kerja',$data);
	}

	public function quizResult()
	{
		$post = $this->input->post(null, TRUE);

		if ($post == null ) {
		    redirect('quiz','refresh');
		}

		$jumlah = $post["jumlah"];
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
		            $this->quiz_m->simpan_riwayat_jawaban($this->session->id,$nomor,$pil_jawaban);
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
		        $this->quiz_m->simpan_penilaian($this->session->id,$hasil,$benar,$salah,$kosong);
		    }
		

		$data["jumlah_soal"]    = $jumlah;
		$data["benar"]  = $benar;
		$data["salah"]  = $salah;
		$data["hasil"]  = $hasil;
		$data["kosong"] = $kosong;
		$data["status"] = $status;
		$data["pesan"]  = $pesan;
		$data['menu'] = "Hasil";
		$data['pembahasan'] = $this->quiz_m->getPembahasan();

		$this->templateadmin->load('template/publik','quiz/hasil',$data);
	}

	public function viewResult()
	{
		$data['menu'] = "Hasil Skor Kamu";
		$data['hasil'] = $this->quiz_m->getNilai($this->session->id)->row('skor');
		$data['benar'] = $this->quiz_m->getNilai($this->session->id)->row('benar');
		$data['salah'] = $this->quiz_m->getNilai($this->session->id)->row('salah');
		$data['kosong'] = $this->quiz_m->getNilai($this->session->id)->row('kosong');
		$data['jumlah_soal'] = $this->quiz_m->getSoal()->num_rows();
		$data['pembahasan'] = $this->quiz_m->getPembahasan();
		$this->templateadmin->load('template/publik','quiz/hasil',$data);
	}

}
