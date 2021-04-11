<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_m extends CI_Model {
		
	//Kode akses
	public function startQuiz($post)
	{
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$this->db->where('kode',$post['username']);
		$this->db->where('status','1');
		$query = $this->db->get();
		return $query; 
	}

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
	
	function simpan($post)
	{
	  $params['id'] =  "";
	  $params['nama'] =  $post['nama'];	  
	  $params['kode'] =  random_string('alnum',6);	  
	  $params['sekolah_id'] =  $post['sekolah_id'];	  
	  $params['kelas_id'] =  $post['kelas_id'];	  
	  $params['absen'] =  $post['absen'];	  
	  $this->db->insert('tb_siswa',$params);
	}

	function hapus($id){
	  $this->db->where('user_id', $id);
	  $this->db->delete('tb_penilaian');

	  $this->db->where('user_id', $id);
	  $this->db->delete('tb_riwayat_jawaban');

	  $this->db->where('id', $id);
	  $this->db->delete('tb_siswa');

	}	

	function update($post)
	{
		  
	  $params['id'] =  $post['id'];
  	  $params['nama'] =  $post['nama'];	  
  	  

	  $this->db->where('id',$params['id']);
	  $this->db->update('tb_siswa',$params);

	}

}
