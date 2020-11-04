<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotes extends CI_Controller {


    function __construct() {

        parent::__construct();

        $this->load->model('CustomerModel');
        $this->load->model('CompanyModel');
        $this->load->model('CatalogModel');
        $this->load->model('OpportunityModel');
//        $this->load->library('auth');
//        $this->load->library('session');
//        $this->auth->check_admin_auth();
    }

	public function add_quote()
	{
	    $data['opportunity'] = array();
	    if(isset($_GET['opportunity_id'])){
	        $data['opportunity'] = $this->OpportunityModel->get_opportunity($_GET['opportunity_id']);
        }
	    $data['categories'] = $this->CatalogModel->getProductCategories();
	    $data['catalogs'] = $this->CatalogModel->getCatalogs();
	    $data['companies'] = $this->CompanyModel->getCompanies();
	    $data['catalog_options'] = $this->CatalogModel->getCatalogOptions();
		$this->load->view('inc/header');
		$this->load->view('quotes/add_quote', $data);
		$this->load->view('inc/footer');
	}
	public function quotes_list()
	{
		$this->load->view('inc/header');
		$this->load->view('quotes/index');
		$this->load->view('inc/footer');
		
	}
	public function save_quote(){
        print_r($_POST);exit;
    }
 
	public function getData()
	{	
	   $abc =
	    '{ "data":[
	    {
	      "id": "1",
	      "date": "2020/10/4",
	      "sales_rep": "David",
	      "customer": "Nixon",
	      "job_type": "New Fence",
	      "job_city":"Kleinburg",
	      "mat": "4500",
	      "lab": "100",
	      "misc": "47",
	      "ads_on": "10125",
	     
	      "hst":"2457",
	      "edit":"",

	      "status":"Assigned",
	      "discount_amount":"5%",
	      "contact_person":"Joseph",
	      "job_address":"207 Edgeley Blvd",
	      "job_site":"Office",
	      "customer_id":"3",
	      "oppor_id":"2"
	    }
	]}';
    	echo $abc;
	 }

} 