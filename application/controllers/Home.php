<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['services'] = $this->ServicesModel->selectAll()->result_array();
		$this->load->view('templates/header');
		$this->load->view('home/beranda',$data);
		$this->load->view('templates/footer');
	}
}
