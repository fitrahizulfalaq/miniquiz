<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sekolah_m extends CI_Model {
	
	public function get($id = null) 
	{
		$this->db->from('tb_sekolah');
		if ($id != null) {
			$this->db->where('id',$id);
		}
		$query = $this->db->get();
		return $query;

	}


	public function total($id = null) 
	{
		$this->db->from('tb_sekolah');		
		$query = $this->db->get();
		return $query;

	}

	function simpan($post)
	{
		  
	  $params['id'] =  "";	  
	  $params['deskripsi'] =  $post['deskripsi'];	  

	  $this->db->insert('tb_sekolah',$params);
	}

	function hapus($id){
	  $this->db->where('id', $id);
	  $this->db->delete('tb_sekolah');

	}
	

	function update($post)
	{
		  
	  $params['id'] =  $post['id'];
  	  $params['deskripsi'] =  $post['deskripsi'];  
  	  

	  $this->db->where('id',$params['id']);
	  $this->db->update('tb_sekolah',$params);

	}

}
