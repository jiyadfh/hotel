<?php
class Pesan_kamar extends CI_Controller {
	public function index(){
		$this->load->view('partial_home/header');
		$this->load->view('content/contact');
		$this->load->view('partial_home/navigasi');
		$this->load->view('partial_home/footer');
		$this->load->view('partial_home/modals');
		$this->load->view('partial_home/js');
	}
}
