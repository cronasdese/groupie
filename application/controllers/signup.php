<?php
class signup extends CI_Controller{
	function __construct() 
	{
		parent::__construct();
		$this->load->view('signin');
	}

	function index()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules('inputSchoolID','ID','required');
		$this->form_validation->set_rules('inputPassword','password','required');

		if($this->form_validation->run() == FALSE)
		{
		
		}
		else
		{
			die('wow');
		}
	}	
}
?>