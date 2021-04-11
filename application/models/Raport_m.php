<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class raport_m extends CI_Model {
		

	public function get($id = null) 
	{
		$this->db->from('tb_siswa');
		if ($id != null) {
			$this->db->where('id',$id);
		}
		$query = $this->db->get();
		return $query;

	}

	public function getBySchool($id = null) 
	{
		$this->db->from('tb_siswa');
		if ($id != null) {
			$this->db->where('sekolah_id',$id);
		}
		$query = $this->db->get();
		return $query;

	}

	public function truncate() 
	{
		$this->db->from('tb_penilaian');
		$query = $this->db->truncate();
		$this->db->from('tb_riwayat_jawaban');
		$query = $this->db->truncate();
		return $query;

	}
	
	

}
