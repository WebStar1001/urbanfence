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
    function __construct() {
        parent::__construct();
        $this->load->model('CustomerModel');
        $this->load->model('CompanyModel');
//        $this->load->library('auth');
//        $this->load->library('session');
//        $this->auth->check_admin_auth();
    }

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
	    $companies = new CompanyModel;
	    $data['company'] = $companies->getCompany();
		$this->load->view('inc/header');
		$this->load->view('opportunities/add_customer', $data);
		$this->load->view('inc/footer');
	}

	public function save_customer(){
        $data = $_POST;
        $this->db->insert('customers', $data);
        redirect('Opportunity/add_opportunity');
    }

}
