<?php
class Coba extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('coba_model', 'coba');
	}
	function index(){
	/*	$data['coba'] = ['a','a','a','a','a','a'];
		$this->load->view('coba/test',$data);*/
		redirect('coba/read');
	}
	function form($id = null){
		$data['form'] = 'coba/form';
		$data['url'] = (empty($id)) ? 'create' : 'update/'.$id;
		$data['data'] = (empty($id)) ? NULL : $this->coba->detail($id);
		$this->load->view('index',$data);
	}
	function create(){
		$this->coba->create();
		redirect('coba/read');
	}
	function read(){
		$data['data'] = $this->coba->read();
		$data['form'] = 'coba/list';
		$this->load->view('index',$data);
	}
	function update($id){
		$this->coba->update($id);
		redirect('coba/read');
	}
	function delete($id){
		$this->coba->delete($id);
		redirect('coba/read');
	}
}