<?php

Class login_db extends CI_Model 
{
	// Read data using schoolID and password
	public function login($data)
	{
		$condition = "ID =" . "'" . $data['schoolID'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('accounts');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			return true;
		} 
		else 
		{
			return false;
		}
	}

	// Read data from database to show data in page
	public function read_information($schoolID) 
	{
		$condition = "ID =" . "'" . $schoolID . "'";
		$this->db->select('*');
		$this->db->from('accounts');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			return $query->result();
		}
		else 
		{
			return false;
		}
	}
}
?>