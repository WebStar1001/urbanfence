<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    function __construct()
    {

        parent::__construct();

        $this->load->model('CustomerModel');
        $this->load->model('UserModel');
        $this->load->model('CompanyModel');
//        $this->load->library('auth');
//        $this->load->library('session');
//        $this->auth->check_admin_auth();
    }

    public function customers_list()
    {

        $data['users'] = $this->UserModel->getUsers();
        $data['companies'] = $this->CompanyModel->getCompanies();
        $this->load->view('inc/header');
        $this->load->view('customers/view_customer', $data);
        $this->load->view('inc/footer');
    }

    public function get_customers()
    {
        $customers = $this->CustomerModel->getCustomers();
        $retAry = array();
        foreach ($customers as $customer) {
            $last_oppor = $this->db->select('*')->from('opportunities')->where('customer_id', $customer->id)->order_by('created_at', 'DESC')->limit(1)->get()->row();
            $last_quote = $this->db->select('*')->from('quotes')->where('customer_id', $customer->id)->order_by('created_at', 'DESC')->limit(1)->get()->row();
            if ($last_oppor) {
                $customer->recent_job_type = $last_oppor->job_type;
                $customer->last_oppor_id = $last_oppor->id;
            } else {
                $customer->recent_job_type = '';
                $customer->last_oppor_id = '';
            }
            if ($last_quote) {
                $customer->last_quote_id = $last_quote->id;
            } else {
                $customer->last_quote_id = '';
            }
            $retAry[] = $customer;
        }
        $data['data'] = $retAry;
        echo json_encode($data);
    }

}
