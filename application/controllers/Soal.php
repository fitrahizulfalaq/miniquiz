<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		check_not_login();
		$previllage = 1;
		check_super_user($this->session->tipe_user,$previllage);
		$this->load->model('soal_m');
	}

	public function index()
	{	
		$this->load->library("form_validation");

		$data['menu'] = "Data soal";
		$data['previllage'] = 1;
		$data['row'] = $this->soal_m->get();
		$this->templateadmin->load('template/dashboard','soal/soal_data',$data);
	}

	public function tambah()
	{
		//Mencegah user yang bukan haknya
		$previllage = 1;
		check_super_user($this->session->tipe_user,$previllage);

		//Load librarynya dulu
		$this->load->library('form_validation');
		//Atur validasinya
		$this->form_validation->set_rules('soal', 'soal', 'min_length[5]');
		$this->form_validation->set_rules('pil_a', 'pil_a', 'min_length[1]|max_length[60]');
		$this->form_validation->set_rules('pil_b', 'pil_b', 'min_length[1]|max_length[60]');
		$this->form_validation->set_rules('pil_c', 'pil_c', 'min_length[1]|max_length[60]');
		$this->form_validation->set_rules('pil_d', 'pil_d', 'min_length[1]|max_length[60]');
		$this->form_validation->set_rules('pil_e', 'pil_e', 'min_length[1]|max_length[60]');

		//Pesan yang ditampilkan
		$this->form_validation->set_message('min_length', '{field} Setidaknya  minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} Seharusnya maksimal {param} karakter.');
		$this->form_validation->set_message('is_unique', 'Data sudah ada');
		//Tampilan pesan error
		$this->form_validation->set_error_delimiters('<span class="badge badge-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['menu'] = "Tambah Data Soal";
			$this->templateadmin->load('template/dashboard','soal/tambah',$data);
	    } else {
	        $post = $this->input->post(null, TRUE);	        
	        $this->soal_m->simpan($post);

	        if ($this->db->affected_rows() > 0) {
	        	$this->session->set_flashdata('success','Berhasil Disimpan');
	        }	
	        	redirect('soal');	        	
	    }
	}

	function hapus(){
		//Mencegah user yang bukan haknya
		$previllage = 1;
		check_super_user($this->session->tipe_user,$previllage);				

	  	$id = $this->uri->segment(3);
	  	//Mencegeah bypass
		if ($this->fungsi->pilihan_advanced("tb_soal","id",$id)->row("user_id") != $this->fungsi->user_login()->id and $this->session->tipe_user < 2 ) {
			$this->session->set_flashdata('danger','Bukan Aksesnya');
			redirect('soal');
		}
		
		$this->soal_m->hapus($id);
		$this->session->set_flashdata('danger','Berhasil Di Hapus');
		redirect('soal');
	}	


	public function edit($id)
	{			
		//Mencegah user yang bukan haknya
		$previllage = 1;
		check_super_user($this->session->tipe_user,$previllage);

		//Mencegeah bypass
		if ($this->fungsi->pilihan_advanced("tb_soal","id",$id)->row("user_id") != $this->fungsi->user_login()->id ) {
			$this->session->set_flashdata('danger','Bukan Aksesnya');
			redirect('soal');
		}

		//Load librarynya dulu
		$this->load->library('form_validation');
		//Atur validasinya
		$this->form_validation->set_rules('soal', 'soal', 'min_length[5]');
		$this->form_validation->set_rules('pil_a', 'pil_a', 'min_length[3]|max_length[60]');
		$this->form_validation->set_rules('pil_b', 'pil_b', 'min_length[3]|max_length[60]');
		$this->form_validation->set_rules('pil_c', 'pil_c', 'min_length[3]|max_length[60]');
		$this->form_validation->set_rules('pil_d', 'pil_d', 'min_length[3]|max_length[60]');
		$this->form_validation->set_rules('pil_e', 'pil_e', 'min_length[3]|max_length[60]');

		//Pesan yang ditampilkan
		$this->form_validation->set_message('min_length', '{field} Setidaknya  minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} Seharusnya maksimal {param} karakter.');
		$this->form_validation->set_message('alpha_dash', 'Gak Boleh pakai Spasi');
		$this->form_validation->set_message('is_unique', 'Data sudah ada');
		//Tampilan pesan error
		$this->form_validation->set_error_delimiters('<span class="badge badge-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->soal_m->get($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$data['menu'] = "Edit Data soal";			
				$this->templateadmin->load('template/dashboard','soal/edit',$data);
			} else {
				echo "<script>alert('Data Tidak Ditemukan');</script>";
				echo "<script>window.location='".site_url('soal')."';</script>";
			}
			
	    } else {
	        $post = $this->input->post(null, TRUE);	        
	        $this->soal_m->update($post);
	        if ($this->db->affected_rows() > 0) {
	        	$this->session->set_flashdata('success','Berhasil Di Edit');
	        }	
	        redirect('soal');
	    }
	}

	
		
}
