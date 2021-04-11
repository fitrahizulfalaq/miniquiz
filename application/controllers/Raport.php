<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class raport extends CI_Controller {

	public function __construct(){
		parent::__construct();
		check_not_login();
		$previllage = 1;
		check_super_user($this->session->tipe_user,$previllage);
		$this->load->model('raport_m');
		$this->load->helper('string');
	}

	public function index()
	{		
		$this->load->library("form_validation");

		$data['menu'] = "Data raport";
		$data['row'] = $this->raport_m->get();
		$this->templateadmin->load('template/dashboard','raport/raport_intruksi',$data);
	}

	public function sekolah()
	{		
		$this->load->library("form_validation");

		$post = $this->input->post(null, TRUE);

		if ($post['sekolah_id'] != null) {
			$sekolah_id = $post['sekolah_id'];
		} else {
			redirect("raport");
		}


		$data['menu'] = "Data raport ".$this->fungsi->get_deskripsi("tb_sekolah",$sekolah_id);
		$data['row'] = $this->raport_m->getBySchool($sekolah_id);
		$this->templateadmin->load('template/dashboard','raport/raport_data',$data);
	}

	public function truncate()
	{
	  $this->raport_m->truncate($id);
	  $this->session->set_flashdata('danger','Berhasil Di Reset');
	  redirect('raport');
	}


}
