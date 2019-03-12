<?php
class Usermodel extends CI_Model{
	public function getusers()
	{


		$this->load->database();
		$q = $this->db->query("SELECT * FROM studentdetail");
		return $q->result_array();



	}
}