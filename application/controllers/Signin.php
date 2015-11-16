<?php

class Signin extends CI_Controller{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('login');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login');
	}	

	public function login()
	{	
		$ID = $this->input->post('inputSchoolID');
		$pass = $this->input->post('inputPassword');

		$this->form_validation->set_rules('inputSchoolID','ID','required|exact_length[10]|callback_check_id');
		$this->form_validation->set_rules('inputPassword','Password','required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			$validate = $this->login->validateAccount($ID, $pass);
			if($validate == NULL){
				echo 'Incorrect id or password';
			}
			else{
				$this->session->set_flashdata('account_id', $ID);
				$data['home_contents'] = $this->login->showPost($ID);
				$search_groups = $this->login->searchGroups($ID);
				$data['group'] = $search_groups;
				$data['account_info'] = $validate;
				$this->load->view('home', $data);
			}
		}
	}
}
