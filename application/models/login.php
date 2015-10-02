<?php
class Registration extends CI_Model{
function __construct() {
parent::__construct();
}

function login($ID,$password)
{
	$data = array(
		'ID' => $ID,
		'password' => $password
		);

	$this->db->insert('accounts',$data);
}


function validateAccount($str)
	{
		if ($str == 'ID')
		{
		
		}
		else
		{
			die('Unregistered ID');
		}

	}
}
?>