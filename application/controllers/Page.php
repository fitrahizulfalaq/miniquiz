<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['menu'] = "Halaman Tidak Ditemukan";
		$this->templateadmin->load('template/dashboard2','page/404',$data);
	}

	public function tentang()
	{
		$data['menu'] = "Tentang Website";
		$this->templateadmin->load('template/dashboard2','page/tentang',$data);
	}

	public function tentangs()
	{
		check_not_login();
		$data['menu'] = "Tentang Website";
		$this->templateadmin->load('template/dashboard','page/tentangs',$data);
	}

	public function setting()
	{
		check_not_login();
		$data['menu'] = "Pengaturan";
		$this->templateadmin->load('template/dashboard','page/pengaturan',$data);
	}
}
