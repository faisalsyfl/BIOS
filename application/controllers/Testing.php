<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

	private $service_id;
	
	public function __construct(){
		parent::__construct();
		$this->service_id = "1";
	}
	public function index(){

		$rupiahLabs = json_decode($this->SipejaModel->rupiahLabs());
		foreach($rupiahLabs as $key => $rupiah){
			$data['datasets'][$key] = json_encode($rupiah);
		}
		$labsProductSample = json_decode($this->SipejaModel->countProductSample());
		foreach($labsProductSample as $key => $sample){
			$data['lingkups'][$key] = $sample;
		}
		// print_r($data['lingkup']);
		$this->load->view('templates/header');
		$this->load->view('testing/all',$data);
		$this->load->view('templates/footer');
	}
	public function add(){
		$post = $this->input->post();
		// var_dump($post);
		$this->DataModel->insert($post);
		redirect('Certification');
	}
}
