<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sekolah extends CI_Controller {

	public function __construct(){
		parent::__construct();
		check_not_login();
		$this->load->model('sekolah_m');
	}

	public function index()
	{		
		$data['menu'] = "Data sekolah";
		$data['row'] = $this->sekolah_m->get();
		$this->templateadmin->load('template/dashboard','sekolah/sekolah_data',$data);
	}

	public function tambah()

	{	
		//Load librarynya dulu
		$this->load->library('form_validation');
		//Atur validasinya
		$this->form_validation->set_rules('nama', 'nama', 'min_length[3]|max_length[20]');

		//Pesan yang ditampilkan
		$this->form_validation->set_message('min_length', '{field} Setidaknya  minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} Seharusnya maksimal {param} karakter.');
		$this->form_validation->set_message('alpha_dash', 'Gak Boleh pakai Spasi');
		$this->form_validation->set_message('is_unique', 'Data sudah ada');
		//Tampilan pesan error
		$this->form_validation->set_error_delimiters('<span class="badge badge-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['menu'] = "Tambah Data sekolah";
			$this->templateadmin->load('template/dashboard','sekolah/tambah',$data);
	    } else {
	        $post = $this->input->post(null, TRUE);	        
	        $this->sekolah_m->simpan($post);

	        if ($this->db->affected_rows() > 0) {
	        	$this->session->set_flashdata('success','Berhasil Disimpan');
	        }	
	        	redirect('sekolah');	        	
	    }
	}

	function hapus(){	
	  $id = $this->uri->segment(3);
	  $this->sekolah_m->hapus($id);
	  $this->session->set_flashdata('hapus','Berhasil Di Hapus');
	  redirect('sekolah');
	}


	public function edit($id)
	{	
		//Load librarynya dulu
		$this->load->library('form_validation');
		//Atur validasinya
		$this->form_validation->set_rules('username', 'username', 'min_length[3]|max_length[20]|alpha_dash');
		$this->form_validation->set_rules('nama', 'nama', 'min_length[3]|max_length[20]');
		$this->form_validation->set_rules('password', 'password', 'min_length[8]');

		//Pesan yang ditampilkan
		$this->form_validation->set_message('min_length', '{field} Setidaknya  minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} Seharusnya maksimal {param} karakter.');
		$this->form_validation->set_message('alpha_dash', 'Gak Boleh pakai Spasi');
		$this->form_validation->set_message('is_unique', 'Data sudah ada');
		//Tampilan pesan error
		$this->form_validation->set_error_delimiters('<span class="badge badge-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->sekolah_m->get($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$data['menu'] = "Edit Data sekolah";			
				$this->templateadmin->load('template/dashboard','sekolah/edit',$data);
			} else {
				echo "<script>alert('Data Tidak Ditemukan');</script>";
				echo "<script>window.location='".site_url('sekolah')."';</script>";
			}
			
	    } else {
	        $post = $this->input->post(null, TRUE);	        
	        $this->sekolah_m->update($post);
	        if ($this->db->affected_rows() > 0) {
	        	$this->session->set_flashdata('success','Berhasil Di Edit');
	        	redirect('sekolah');
	        }	
	    }
	}	
}
