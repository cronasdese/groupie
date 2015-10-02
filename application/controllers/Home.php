<?php

class Home extends CI_Controller(){

	function __construct(){
		parent::__construct();
		$this->load->model('home');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

}