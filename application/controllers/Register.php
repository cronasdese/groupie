<?php

class Register extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('registration');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	
	public function index(){
		$this->load->view('register');
	}

	function addAccount(){	
		$ID = $this->input->post('inputSchoolID');
		$password = $this->input->post('inputPassword');
		$fullname = $this->input->post('inputFullName');
		$email = $this->input->post('inputEmail');
		$contact = $this->input->post('inputContact');
		
		
		$this->form_validation->set_rules('inputSchoolID','ID','required|exact_length[10]|callback_schoolid_check|numeric');
		$this->form_validation->set_rules('inputPassword', 'Password', 'required|min_length[7]');
		$this->form_validation->set_rules('inputConfirmPassword','Confirm Password','required|matches[inputPassword]');
		$this->form_validation->set_rules('inputFullName', 'FullName', 'required|min_length[5]|max_length[255]|alpha');
		$this->form_validation->set_rules('inputEmail','Email Address','required|valid_email');
		$this->form_validation->set_rules('inputContact', 'Mobile No.', 'required|exact_length[11]');

		if ($this->form_validation->run() == FALSE) {

			$data = array(
				'schoolID' => $ID,
				'contactNumber' => $contact,
				'fullName' => $fullname,
				'emailAddress' => $email
			);
			$this->load->view('register', $data);
		}
		else
		{
			$this->registration->addAccounts($ID,$password,$fullname,$email,$contact,'1');
		}
	}

	public function schoolid_check($str){
		$this->registration->validateAccount($str);
	}	
}




