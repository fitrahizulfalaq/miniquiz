<?php
  $url_1 = $this->uri->segment(1);
  $url_2 = $this->uri->segment(2);
  $url_3 = $this->uri->segment(3);

  if ($url_1 == "profil" and $url_2 =="edit") {
    $this->load->view("script/profil_edit");
  } elseif ($this->uri->segment(1)=="page" and $this->uri->segment(2)== "galeri") {
    $this->load->view("script/lightbox-footer");
    $this->load->view("script/lightbox-galeri");
  } elseif ($this->uri->segment(1)=="soal") {
    $this->load->view("script/datatables-footer");
    $this->load->view("script/datatables-default");
  } elseif ($this->uri->segment(1)=="siswa") {
    $this->load->view("script/datatables-footer");
    $this->load->view("script/datatables-default");
  } elseif ($this->uri->segment(1)=="user") {
    $this->load->view("script/datatables-footer");
    $this->load->view("script/datatables-default");
  }
?>