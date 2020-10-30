<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function customers_list()
	{
		$this->load->view('inc/header');
		$this->load->view('customers/index');
		$this->load->view('inc/footer');	
	}


		public function getData()
	{	
	   $abc =
	    '{ "data":[
	    {
	      "id": "1",
	      "status": "Lead",
	      "customer": "Nixon",
	     
	      "person": "Tiger Nixon",
	      "phone1": "+42300-00",
	      "email": "abc@gmail.com",
	      "city": "Maple",
	      "edit": "",
	      "recent_sale_rep":"David",
	      "recent_job_type": "Fence+ Gate repair",

	      "phone2":"+456-456-456",
	      "address":"207 Edgeley Blvd",
	      "fax":"+47-389-1300",
	      "last_sales_rep":"Kevin",
	      "last_job_type":"Gate repair",
	      "last_oppor_id":"1",
	      "last_quote_id":"2",
	      "last_job_id":"3"
	    }
	]}';
    	echo $abc;
	 }



	public function getData_old()
	{	
	   $abc =
	    '{ "data":[
	    {
	      "id": "1",
	      "customer_id": "1",
	      "date": "2020/04/4",
	      "customer": "Tiger Nixon",
	      "job type": "New Fence",
	      "Sale Source": "Google Ad",
	      "status": "Assigned",
	      "sales rep": "David",
	      "edit": "-",
	      "Create Quote":"ok",

	      "JobCity":"Lahore",
	      "ContactPerson":"+47-389-1300",
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
