<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bios extends CI_Controller {

	public function index(){
		$data['services'] = $this->ServicesModel->selectAll()->result_array();
		$this->load->view('templates/header');
		$this->load->view('Bios/webservice',$data);
		$this->load->view('templates/footer');
	}
	public function get_layanan(){
		$get = $this->input->get();
		var_dump($get);
		
	}
}
