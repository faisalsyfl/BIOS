<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function index(){
		$data['services'] = $this->ServicesModel->selectAll()->result_array();
		$this->load->view('templates/header');
		$this->load->view('home/beranda',$data);
		$this->load->view('templates/footer');
	}
	public function get_layanan(){
		$get = $this->input->get();
		if(isset($get['tgl_update'])){
			var_dump(date('Y-m-d h:m:s',strtotime($get['tgl_update'])));
			$temp = $this->ServicesModel->selectAllServicesData($get['tgl_update'])->result_array();
		}else{
			$temp = $this->ServicesModel->selectAllServicesData()->result_array();
		}
		print_r(json_encode($temp));

	}
}
