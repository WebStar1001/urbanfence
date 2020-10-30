<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opportunity extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function opportunity_list()
	{	
		$this->load->view('inc/header');
		$this->load->view('opportunities/index');
		$this->load->view('inc/footer');
	}

	public function pending_opportunities()
	{	
		$this->load->view('inc/header');
		$this->load->view('opportunities/pending_assignment');
		$this->load->view('inc/footer');
	}

	public function add_opportunity()
	{	
		$this->load->view('inc/header');
		$this->load->view('opportunities/add_opportunity');
		$this->load->view('inc/footer');
	}

	public function add_customer()
	{	
		$this->load->view('inc/header');
		$this->load->view('opportunities/add_customer');
		$this->load->view('inc/footer');
	}
	public function getData()
	{	
	   $abc =
	    '{ "data":[
   	
   		{
	      "id": "1",
	      "customer_id": "1",
	      "date": "2019/01/1",
	      "customer": "Tiger Nixon",
	      "job type": "New Fence",
	      "Sale Source": "Google Ad",
	      "status": "New",
	      "Edit": "",
	      "Create Quote":"",

	      "jobcity":"Maple",
	      "ContactPerson":"Aviad Krief",
	      "JobAddress":"207 Edgeley Blvd",
	      "JobSite":"School",
	      "Urgency":"Friend",
	      "Time":"2pm",
	      "Details":"New Fence+ Gate"
	    }
	   
	    
	]}';
    	echo $abc;
	 }

}
