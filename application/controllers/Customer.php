<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    function __construct() {

        parent::__construct();

        $this->load->model('CustomerModel');
        $this->load->model('UserModel');
//        $this->load->library('auth');
//        $this->load->library('session');
//        $this->auth->check_admin_auth();
    }

    public function customers_list()
    {

        $data['users'] = $this->UserModel->getUsers();
        $this->load->view('inc/header');
        $this->load->view('customers/view_customer', $data);
        $this->load->view('inc/footer');
    }

    public function get_customers(){
        $data['data'] = $this->CustomerModel->getCustomers();
        echo json_encode($data);
    }

}
