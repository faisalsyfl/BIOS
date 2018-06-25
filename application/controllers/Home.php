<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['services'] = $this->ServicesModel->selectAll()->result_array();
		$data['certificates'] = json_encode($this->DataModel->selectSumCertificateByType());
		$data['cmax'] = max($this->DataModel->selectSumCertificateByType());

		$data['sampels'] = $this->SipejaModel->getNumSamples();
		$data['smax'] = max(json_decode($data['sampels']));

		$data['orders'] = $this->SipejaModel->countWeeklyOrder();
		$data['omax'] = max(json_decode($data['orders']));
		$x = json_decode($data['orders']);
		$cond = ((int)(json_decode($data['orders'])[sizeof(json_decode($data['orders']))-1] - json_decode($data['orders'])[sizeof(json_decode($data['orders']))-2])/json_decode($data['orders'])[sizeof(json_decode($data['orders']))-2]*100);
		if($cond >= 0 ){
			$data['percentage'] = '<span class="text-success"><i class="fa fa-long-arrow-up"></i> '.number_format($cond, 0, '.', '').'% </span>';
		}else{
			$data['percentage'] = '<span class="text-danger"><i class="fa fa-long-arrow-down"></i> '.number_format($cond, 0, '.', '').'% </span>';
		}

		$this->load->view('templates/header');
		$this->load->view('home/beranda',$data);
		$this->load->view('templates/footer');
	}
}
