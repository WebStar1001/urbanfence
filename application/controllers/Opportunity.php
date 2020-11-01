<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Opportunity extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('CustomerModel');
        $this->load->model('CompanyModel');
        $this->load->model('UserModel');
        $this->load->model('OpportunityModel');
//        $this->load->library('auth');
//        $this->load->library('session');
//        $this->auth->check_admin_auth();
    }

    public function opportunity_list()
    {
        $this->load->view('inc/header');
        $this->load->view('opportunities/view_opportunity');
        $this->load->view('inc/footer');
    }

    public function pending_opportunities()
    {
        $data['users'] = $this->UserModel->getUsers();
        $this->load->view('inc/header');
        $this->load->view('opportunities/pending_assignment', $data);
        $this->load->view('inc/footer');
    }

    public function add_opportunity()
    {
        $data['customer'] = array();
        if (isset($_GET['customer_id'])) {
            $data['customer'] = $this->CustomerModel->get_customer($_GET['customer_id']);
        }elseif (isset($_GET['opportunity_id'])) {
            $data['opportunity'] = $this->OpportunityModel->get_opportunity($_GET['opportunity_id']);
            $data['customer'] = $this->CustomerModel->get_customer($data['opportunity']->customer_id);
        }
        $data['customer_list'] = $this->CustomerModel->getCustomers();
        $data['companies'] = $this->CompanyModel->getCompanies();
        $data['users'] = $this->UserModel->getUsers();
        $this->load->view('inc/header');
        $this->load->view('opportunities/add_opportunity', $data);
        $this->load->view('inc/footer');
    }

    public function add_customer()
    {
        $data['customer'] = array();
        if (isset($_GET['customer_id'])) {
            $data['customer'] = $this->CustomerModel->get_customer($_GET['customer_id']);
        }
        $companies = new CompanyModel;
        $data['company'] = $companies->getCompanies();
        $this->load->view('inc/header');
        $this->load->view('opportunities/add_customer', $data);
        $this->load->view('inc/footer');
    }

    public function save_customer()
    {
        $data = $_POST;
        $customer_id = $this->input->post('customer_id');
        unset($data['customer_id']);
        if($customer_id != ""){
            $this->db->where('id', $customer_id);
            $this->db->update('customers', $data);
        }else{
            $this->db->insert('customers', $data);
            $customer_id = $this->db->insert_id();
        }
        redirect('Opportunity/add_opportunity?customer_id=' . $customer_id);
    }

    public function save_opportunity()
    {
        $data = $_POST;
        $opportunity_id = $this->input->post('opportunity_id');
        unset($data['opportunity_id']);
        if($opportunity_id != ""){
            $this->db->where('id', $opportunity_id);
            $this->db->update('opportunities', $data);
        }else{
            $this->db->insert('opportunities', $data);
        }
        redirect('Opportunity/pending_opportunities');
    }

    public function get_opportunities()
    {
        $job_type = array(
            '', 'Fence Repair', 'Gate Repair', 'Fence and Gate Repair', 'New Fence', 'New Gate', 'New Fence and Gate c/w  
                Operator', 'Gate Opperator Service');
        $sale_source = array('', 'Returned Customer', 'Yellow Pages', 'Facebook', 'Google Ad');
        $status = array('', 'New', 'Assigned');
        $urgency = array('', 'Normal', 'Urgent');
        $result = $this->OpportunityModel->getOpportunities();
        $data = array();
        $data['data'] = array();
        foreach ($result as $key => $row) {
            $data['data'][$key] = $row;
            $data['data'][$key]['job_type'] = $job_type[$row['job_type']];
            $data['data'][$key]['sale_source'] = $sale_source[$row['sale_source']];
            $data['data'][$key]['status'] = $status[$row['status']];
            $data['data'][$key]['urgency'] = $urgency[$row['urgency']];
        }
        echo json_encode($data);
    }
}
