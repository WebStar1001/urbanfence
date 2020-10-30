<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function jobs_list()
	{
		$this->load->view('inc/header');
		$this->load->view('jobs/index');
		$this->load->view('inc/footer');
	}

	public function job_detail()
	{
		$this->load->view('inc/header');
		$this->load->view('jobs/job_detail');
		$this->load->view('inc/footer');
	}


	public function getData()
	{	
	   $abc =
	    '{ "data":[
	    {
	      "id": "1",
	      "status": "MAT delivered",
	      "installer": "Benjamin",
	      "start_date": "20/8/2020",
	      "end_date": "15/9/2020",
	      "customer": "Gil Naor",
	      "job_type": "New Fence",
	      "mat": "1123",
	      "lab": "1123",
	      "misc": "1500",
	      "add_on": "1123",

	      "total": "13560",
	      "job_balance": "6780",

	      "contact_person":"John Smith",
	      "job_address":"207 Edgeley Blvd",
	      "job_city":"Concord",
	      "job_site":"New Fence+ Gate",
	      "customer_id":"3",
	      "oppor_id":"2",
	      "quote_id":"7"
	    }
	]}';
    	echo $abc;
	 }


public function credits_debits_tracking()
	{	
		   $abc =
		    '{ "data":[
	   	
	   		{
		      "invoice_id": "10125",
		      "payment_id": "",
		      "debits": "6780",
		      "credit": "",
		      "due_date": "20-09-2020",
		      "account_balance": "6780",
		      "job_balance": "13560",
		      "note": "",
		      "trans_date":"09-09-2020",
		      "payment_method":"Visa"
		    },
		    {
			      "invoice_id": "",
			      "payment_id": "003",
			      "debits": "",
			      "credit": "6780",
			      "due_date": "",
			      "account_balance": "0",
			      "job_balance": "6780",
			      "note": "",
			      "trans_date":"19-09-2020",
			      "payment_method":"Cash"
			},
			{
			      "invoice_id": "10132",
			      "payment_id": "",
			      "debits": "6790",
			      "credit": "",
			      "due_date": "13-10-2020",
			      "account_balance": "6780",
			      "job_balance": "6780",
			      "note": "Invoice is past Due",
			      "trans_date":"13-10-2020",
			      "payment_method":""
			}
		   
		    
		]}';
    	echo $abc;
	 }

	
}

