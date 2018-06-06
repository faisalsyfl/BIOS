<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServicesModel extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "services";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->limit($from,$offset);
		$this->db->order_by('service_id','DESC');

		return $this->db->get();
	}

	public function selectAllServicesData($date = NULL){
		$this->db->select('services.service_satker_code as kode_satker, data.data_year as tahun, data.data_month as bulan, services.service_indicator as indikator, data.data_total as jumlah, data.data_updated_at as tanggal_update');
		$this->db->from($this->tableName);
		if($date != NULL){
			$this->db->where('data.data_updated_at','<',$date);
		}
		$this->db->join('data','services.service_id = data.service_id');
		$this->db->order_by('services.service_id','ASC');

		return $this->db->get();
	}

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id',$id);

		return $this->db->get();
	}
	public function insert($data){
		$this->db->insert($this->tableName,$data);
	}

	public function update($id,$data){
		$this->db->set($data);
		$this->db->where('id',$id);
		return $this->db->update($this->tableName);
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete($this->tableName);
	}	
}
