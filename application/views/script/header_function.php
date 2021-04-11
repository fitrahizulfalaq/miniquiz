<?php
    $url_1 = $this->uri->segment(1);
    $url_2 = $this->uri->segment(2);
    $url_3 = $this->uri->segment(3);

    if ($url_1 == "page" and $url_2 == "galeri") {
      $this->load->view("script/lightbox-header");
    } elseif ($url_2 == "materi_1" or $url_2 == "materi_2" or $url_2 == "materi_3") {
      $this->load->view("script/lightbox-header");
    } elseif ($url_1 == "soal") {
      $this->load->view("script/datatables-header");
    } elseif ($url_1 == "siswa") {
      $this->load->view("script/datatables-header");
    } elseif ($url_1 == "user") {
      $this->load->view("script/datatables-header");
    }
  ?>