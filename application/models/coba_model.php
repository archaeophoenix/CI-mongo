<?php
class Coba_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function create(){
		$coba['nama'] = $this->input->post('nama');
		$coba['alamat'] = $this->input->post('alamat');
		$this->mongo->db->cobaan->insert($coba);
	}
	function read(){
		return $this->mongo->db->cobaan->find();
	}
	function update($_id){
		$coba['nama'] = $this->input->post('nama');
		$coba['alamat'] = $this->input->post('alamat');
		$this->mongo->db->cobaan->update(array('_id' => new MongoID($_id)), array('$set' => $coba));
	}
	function delete($_id){
		$id = $this->mongo->db->cobaan->findOne(array('_id' => new MongoID($_id)));
		$this->mongo->db->cobaan->remove(
			array('_id' => $id['_id']),
			array('safe' => true));
	}
	function detail($_id){
		return $this->mongo->db->cobaan->findOne(array('_id' => new MongoID($_id)));
	}
}