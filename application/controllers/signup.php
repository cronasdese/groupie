<?php
class Signup extends CI_Controller{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('login');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	function index()
	{
		$this->load->view('signin');
	}	

	function log()
	{	
		$this->form_validation->set_rules('inputSchoolID','ID','required|exact_length[10]|callback_check_id');
		$this->form_validation->set_rules('inputPassword','password','required');

		if($this->form_validation->run() == FALSE)
		{
		
		}
		else
		{
			die('Logged in successfully!');
		}
	}

	function check_id($str)
	{
		$this->login->validateAccount($str);
	}
}
?>