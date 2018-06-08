<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataModel extends CI_Model {

	private $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "data";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->limit($from,$offset);
		$this->db->order_by('service_id','DESC');

		return $this->db->get();
	}
	public function selectByServiceId($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('service_id',$id);

		return $this->db->get();
	}
	public function selectSumCertificateByType(){
		$this->db->select('sum(data_total) as total');
		$this->db->from($this->tableName);
		$this->db->where('service_id',6);
		$this->db->where('service_id',6);
		$this->db->group_by('data_type');
		$get =  $this->db->get();
		$datas = $get->result_array();
		$json = array();
		foreach($datas as $data){
			array_push($json, (int) $data['total']);
		}
		return $json;
	}
	public function selectSumCertificateByMonth($type = NULL){
		$this->db->select('data_type ,sum(data_total) as total, data_month as mth');
		$this->db->from($this->tableName);
		$this->db->where('service_id',6);
		$this->db->where('data_type',$type);
		$this->db->order_by('mth','ASC');
		$this->db->group_by('data_month');

		$get =  $this->db->get();
		$datas = $get->result_array();
		$json = array();
		foreach($datas as $data){
			array_push($json,(int) $data['total']);
		}

		for ($i=0; $i <12 ; $i++) { 
			if(!isset($json[$i])){
				$json[$i] = 0;
			}
		}
		return $json;
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
