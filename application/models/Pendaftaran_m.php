<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_m extends CI_Model {
		
	public function get($id = null) 
	{
		$this->db->from('tb_user_tmp');
		if ($id != null) {
			$this->db->where('id',$id);
		}
		$query = $this->db->get();
		return $query;

	}
	
	function simpan($post)
	{
		  
	  $params['id'] =  "";	    
	  $params['username'] =  $post['username'];
	  $params['password'] =  sha1($post['password']);
	  $params['email'] =  $post['email'];
	  $params['nama'] =  $post['nama'];
	  $params['hp'] =  $post['hp'];
	  $params['created'] =  date("Y:m:d:h:i:sa");
	  $params['tipe_user'] =  '1';	  
	  $this->db->insert('tb_user_tmp',$params);
	}

	function hapus($id){
	  $this->db->where('id', $id);
	  $this->db->delete('tb_user_tmp');

	}

	function acc($id)
	{			
		$pendaftar = $this->fungsi->pilihan_selected("tb_user_tmp",$id);

		foreach ($pendaftar->result() as $datapendaftar)
		{
			$params['username'] = $datapendaftar->username;		        		        
			$params['password'] = $datapendaftar->password;		        		        
			$params['nama'] = $datapendaftar->nama;		        		        
			$params['email'] = $datapendaftar->email;		        		        
			$params['hp'] = $datapendaftar->hp;		        		        
			$params['created'] = $datapendaftar->created;		        		        
			$params['tipe_user'] = $datapendaftar->tipe_user;		        		        
		}				

		$this->db->insert('tb_user',$params);		
		$this->db->where('id', $id);
	  	$this->db->delete('tb_user_tmp');
	}		

}
