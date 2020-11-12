<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jobs extends CI_Controller
{
    function __construct()
    {

        parent::__construct();

        $this->load->model('UserModel');
        $this->load->model('JobModel');
//        $this->load->library('auth');
//        $this->load->library('session');
//        $this->auth->check_admin_auth();
    }

    public function jobs_list()
    {
        $data['sales'] = $this->UserModel->getSaleUsers();
        $data['installers'] = $this->UserModel->getUserByAccessLevel('user');
        $this->load->view('inc/header');
        $this->load->view('jobs/view_job', $data);
        $this->load->view('inc/footer');
    }

    public function job_detail()
    {
        $job_id = '';
        if (isset($_GET['job_id'])) {
            $job_id = $_GET['job_id'];
        }
        $this->load->view('inc/header');
        $this->load->view('jobs/job_detail', array('job_id' => $job_id));
        $this->load->view('inc/footer');
    }


    public function get_jobs()
    {
        $data['data'] = $this->JobModel->getJobs();
        echo json_encode($data);
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

