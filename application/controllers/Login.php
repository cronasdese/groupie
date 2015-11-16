<?php

class Login extends CI_Controller{
	function __construct() 
	{
		parent::__construct();
	}

	// Show login page
	public function index($msg = NULL)
	{
		// Load our view to be displayed to the user
        $data['msg'] = $msg;
		$this->load->view('signin', $data);
	}

	// Check the user from the database
	public function login_process()
	{
		$this->load->model('login_model');
		// Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if($result)
        {
            // If user did not validate, then show them login page again
            $msg = '<center><font color=red>Invalid username and/or password.</font></center><br />';
            $this->index($msg);
        }
        else
        {
            // If user did validate, send them to members area
            redirect('home');
        }        
	}	
}
?>