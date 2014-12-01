<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Res extends CI_Controller{

	public function index(){
		$data['listres'] = $this->res_model->getAllRes();
		$this->load->view('res_view',$data);
	}

	public function addrest(){
		$this->load->view('add_res_view');
	}

	public function addrestdb(){
		$data = array(
				'restname' => $this->input->post('restName'),
				'datarest' => $this->input->post('datarest')
			);
		$this->res_model->addrest($data);

		redirect('res');
	}

	public function updateres($restId){
		$data['rest'] = $this->res_model->getRest($restId);
		$this->load->view('update_res_view', $data);
	}
	public function updateresDB(){

	}

	public function deleteresDB(){

	}
}