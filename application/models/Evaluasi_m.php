<?php
 
class Evaluasi_m extends CI_Model {
	
	// DATATABLES
	function simpan_riwayat_jawaban($user_id,$soal_id,$jawaban)
	{
	  $params['id'] =  "";
    $params['user_id'] =  $user_id;
    $params['soal_id'] =  $soal_id;
    $params['jawaban'] =  $jawaban;

	  $this->db->insert('tb_riwayat_jawaban',$params);
	}

  function simpan_penilaian($user_id,$skor,$benar,$salah,$kosong,$essay)
  {
    $params['id'] =  "";
    $params['user_id'] =  $user_id;
    $params['skor'] =  $skor;
    $params['benar'] =  $benar;
    $params['salah'] =  $salah;
    $params['kosong'] =  $kosong;
    $params['essay'] =  $essay;

    $this->db->insert('tb_penilaian',$params);
  }

  public function get_user($id = null) 
  {
    $this->db->from('tb_user');
    if ($id != null) {
      $this->db->where('id',$id);
    }
    $this->db->where('tipe_user','1');
    $this->db->order_by("nama","ASC");
    $query = $this->db->get();
    return $query;

  }

  public function get_penilaian($id = null) 
  {
    $this->db->from('tb_penilaian');
    if ($id != null) {
      $this->db->where('user_id',$id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function get_riwayat_jawaban($id = null) 
  {
    $this->db->from('tb_riwayat_jawaban');
    if ($id != null) {
      $this->db->where('user_id',$id);
    }
    $this->db->order_by("soal_id","ASC");
    $query = $this->db->get();
    return $query;

  }
	
 
}