<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Res_model extends CI_Model{
$this->db->from("msRes");

return $this->db->get();


	function getRes($id){

	}
	function addRes($data){
		$this->db->insert('msRest', $data);
	} 
	function updateRes(){

	}
	function deleteRes(){

	}
}