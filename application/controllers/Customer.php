<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('CustomerModel');
//        $this->load->library('auth');
//        $this->load->library('session');
//        $this->auth->check_admin_auth();
    }

    public function customers_list()
    {


        $this->load->view('inc/header');
        $this->load->view('customers/index');
        $this->load->view('inc/footer');
    }

    public function get_customers(){
        $data['data'] = $this->CustomerModel->getCustomers();
        echo json_encode($data);
    }

}
