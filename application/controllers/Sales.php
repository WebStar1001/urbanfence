<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

	public function sales_list()
	{
		$this->load->view('inc/header');
		$this->load->view('sales/index');
		$this->load->view('inc/footer');
		
	}
}