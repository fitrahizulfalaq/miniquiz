<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('page/splash');
	}

	public function menu()
	{
		check_already_login();
		checkAlreadyStartQuiz();

		$this->load->view('page/menu');
	}

	public function login_siswa()
	{
		check_already_login();
		$this->load->view('page/login_siswa');
	}

	public function login_page()
	{
		check_already_login();
		$this->load->view('page/login');
	}


	public function logout()
	{
		$params = array('id','username','tipe_user','date_now');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if($query->num_rows() > 0) {
				$row = $query->row();
				$params = array (
					'id' => $row->id,					
					'username' => $row->username,					
					'tipe_user' => $row->tipe_user,
					'date_now' => date('Y:m:d H:i:s'),
				);				
				$this->session->set_userdata($params);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('danger','Login Gagal');
				redirect("auth/login_page");
			}
		} else {
			echo "Mau Main2 ya";
			redirect('auth/login');
		}
	}

	public function startQuiz()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['startQuiz'])) {
			$this->load->model('siswa_m');
			$query = $this->siswa_m->startQuiz($post);
			if($query->num_rows() > 0) {
				$row = $query->row();
				$params = array (
					'id' => $row->id,					
					'nama' => $row->nama,					
					'sekolah_id' => $row->sekolah_id,					
					'kelas_id' => $row->kelas_id,					
					'absen' => $row->absen,					
				);				
				$this->session->set_userdata($params);
				redirect('quiz');
			} else {
				$this->session->set_flashdata('danger','Login Gagal');
				redirect("auth/login_siswa");
			}
		} else {
			echo "Mau Main2 ya";
			redirect('auth/login_siswa');
		}
	}

	public function endQuiz()
	{
		$params = array('id','nama','sekolah_id','kelas_id','absen');
		$this->session->unset_userdata($params);
		redirect('auth/login_siswa');
	}

}
