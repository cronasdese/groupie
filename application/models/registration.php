<?php
class Registration extends CI_Model{
function __construct() {
parent::__construct();
}

function addAccounts($ID,$password,$fullname,$email,$contact,$type)
{

	$data = array(
		'ID' => $ID,
		'email_address' => $email,
		'contact_number' => $contact,
		'full_name' => $fullname,
		'password' => $password	,
		'user_type' => $type
		);

	$this->db->insert('accounts',$data);
}


function validateAccount($str)
	{
		if ($str == '12-027-013')
		{
			die(ross);
		}

	}


}
?>