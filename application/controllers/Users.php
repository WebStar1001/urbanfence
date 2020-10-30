<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function users_list()
	{
		$this->load->view('inc/header');
		$this->load->view('users/index');
		$this->load->view('inc/footer');
		
	}

	public function add_user()
	{
		$this->load->view('inc/header');
		$this->load->view('Users/add_user');
		$this->load->view('inc/footer');
	}
}