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
			array_push($data['certificates'],array('name'=>$name[$i-1],'data'=> $this->DataModel->selectSumCertificateByMonth($i,$this->input->get('year'))));

			/*get Maximal value from all series*/
			if($data['cmax'] < max($this->DataModel->selectSumCertificateByMonth($i,$this->input->get('year')))){
				$data['cmax'] = max($this->DataModel->selectSumCertificateByMonth($i,$this->input->get('year')));
			}
		}
		$data['certificates'] = json_encode($data['certificates']);
		// var_dump($data['certificates']);
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
