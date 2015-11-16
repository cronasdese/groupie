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

	function showPost($ID){
		$query = $this->db->query('SELECT * from posts INNER JOIN groups ON groups.group_id = posts.group_ID INNER JOIN accounts ON accounts.ID = groups.ID WHERE accounts.ID = "'.$ID.'"');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
}
