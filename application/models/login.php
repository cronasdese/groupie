<?php

class Login extends CI_Model{
	function __construct() {
		parent::__construct();
	}

	function validateAccount($ID, $pass)
	{
		$query = $this->db->query('SELECT * FROM `accounts` WHERE ID = "'. $ID .'" AND password = "'. $pass .'"');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}

	function searchGroups($ID){
		$query = $this->db->query('SELECT * FROM `groups` WHERE ID = "'. $ID .'"');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
}
