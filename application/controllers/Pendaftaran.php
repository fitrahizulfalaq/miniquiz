<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pendaftaran_m');
	}

	public function index(){
		check_not_login();
		redirect('pendaftaran/pendaftaran_data');
	}

	public function tambah()
	{	
		check_already_login();
		//Load librarynya dulu
		$this->load->library('form_validation');
		//Atur validasinya
		$this->form_validation->set_rules('username', 'username', 'min_length[3]|is_unique[tb_user.username]|is_unique[tb_user_tmp.username]|max_length[20]');
		$this->form_validation->set_rules('email', 'email', 'min_length[3]|is_unique[tb_user.email]|is_unique[tb_user_tmp.email]|max_length[50]');
		$this->form_validation->set_rules('password', 'password', 'min_length[3]|max_length[20]');
		$this->form_validation->set_rules('hp', 'hp', 'min_length[10]|max_length[15]');

		//Pesan yang ditampilkan
		$this->form_validation->set_message('min_length', '{field} Setidaknya  minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} Seharusnya maksimal {param} karakter.');
		$this->form_validation->set_message('is_unique', 'Data sudah ada');
		//Tampilan pesan error
		$this->form_validation->set_error_delimiters('<span class="badge badge-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['menu'] = "Tambah Data pendaftaran";
			$this->templateadmin->load('template/dashboard2','pendaftaran/tambah',$data);
	    } else {
	        $post = $this->input->post(null, TRUE);	        
	        $this->pendaftaran_m->simpan($post);

	        if ($this->db->affected_rows() > 0) {
	        	$this->session->set_flashdata('success','Berhasil Disimpan');
	        }	
	        redirect('pendaftaran/tambah');	        	
	    }
	}

	function hapus(){
	  $previllage = 2;
	  check_super_user($this->session->tipe_user,$previllage);
	  	
	  $id = $this->uri->segment(3);
	  $this->pendaftaran_m->hapus($id);
	  $this->session->set_flashdata('danger','Berhasil Di Hapus');
	  redirect('pendaftaran/pendaftaran_data');
	}

	public function pendaftaran_data()
	{	
		$previllage = 2;
		check_super_user($this->session->tipe_user,$previllage);	
		$data['menu'] = "Data Pendaftar";
		$data['row'] = $this->pendaftaran_m->get();
		$this->templateadmin->load('template/dashboard','pendaftaran/pendaftaran_data',$data);
	}

	function acc(){
	  $previllage = 2;
	  check_super_user($this->session->tipe_user,$previllage);
	  $id = $this->uri->segment(3);
	  $this->pendaftaran_m->acc($id);
	  $this->session->set_flashdata('success','Berhasil Di ACC');
	  redirect('pendaftaran/pendaftaran_data');
	}


}
