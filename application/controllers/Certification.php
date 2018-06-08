<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certification extends CI_Controller {

	private $service_id;
	
	public function __construct(){
		parent::__construct();
		$this->service_id = "6";
	}
	public function index(){
		$data['cmax'] = 0;
		$data['certificates'] = array();
		$name = ['Personil','Produk','SML','IH'];
		for ($i=1; $i <= 4; $i++) { 
			array_push($data['certificates'],array('name'=>$name[$i-1],'data'=> $this->DataModel->selectSumCertificateByMonth($i)));
			if($data['cmax'] < max($this->DataModel->selectSumCertificateByMonth($i))){
				$data['cmax'] = max($this->DataModel->selectSumCertificateByMonth($i));
			}
		}
		$data['certificates'] = json_encode($data['certificates']);
		$data['datas'] = $this->DataModel->selectByServiceId($this->service_id)->result_array();
		$this->load->view('templates/header');
		$this->load->view('certification/index',$data);
		$this->load->view('templates/footer');
	}
	public function add(){
		$post = $this->input->post();
		// var_dump($post);
		$this->DataModel->insert($post);
		redirect('Certification');
	}
}
