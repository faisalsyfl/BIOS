<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certification extends CI_Controller {

	public function index(){
		$data['services'] = $this->ServicesModel->selectAll()->result_array();
		$this->load->view('templates/header');
		$this->load->view('Sertification/index',$data);
		$this->load->view('templates/footer');
	}
	public function add(){
		$post = $this->input->post();
		var_dump($post);
	}
}
