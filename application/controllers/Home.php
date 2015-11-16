<?php

class Home extends CI_Controller {	

	public function __construct() {
		parent::__construct();
		$this->load->model('home');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->model('home');
		$account_id = $this->session->flashdata('account_id');
		$data['home_contents'] = $this->home->showPost($account_id);
		$this->load->view('home', $data);
	}

	public function addComment()
	{
		$ID = $this->input->post('');
		$commentcont = $this->input->post('comment');
		$commentd = date();
		$this->home->AddComment($ID,$commentcont,$commentd);
	}

	public function getComment(){
		$post_id = $this->input->post('postid');
		$this->home->showComment($post_id);
	}

	public function getPost()
	{
		$ID = $this->input->post('');
		$postcont = $this->input->post('post');
		$
	}
}