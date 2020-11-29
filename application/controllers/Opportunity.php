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
        $this->load->library('auth');
        $this->load->library('session');
        $this->auth->check_permission();

        $this->load->model('CustomerModel');
        $this->load->model('CompanyModel');
        $this->load->model('UserModel');
        $this->load->model('OpportunityModel');
    }

    public function opportunity_list()
    {
        $data['status'] = 'All';
        if (isset($_GET['status'])) {
            $data['status'] = 'New';
        }
        $data['companies'] = $this->CompanyModel->getCompanies();
        $data['sales'] = $this->UserModel->getUserByAccessLevel('Sales');
        $this->load->view('inc/header');
        $this->load->view('opportunities/view_opportunity', $data);
        $this->load->view('inc/footer');
    }

    public function add_opportunity()
    {
        $data['customer'] = array();
        $data['opportunity'] = array();
        if (isset($_GET['customer_id'])) {
            $data['customer'] = $this->CustomerModel->get_customer($_GET['customer_id']);
        } elseif (isset($_GET['opportunity_id'])) {
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
        $data['status'] = 1;
        $companies = new CompanyModel;
        $data['company'] = $companies->getCompanies();
        $this->load->view('inc/header');
        $this->load->view('opportunities/add_customer', $data);
        $this->load->view('inc/footer');
    }

    public function create_customer()
    {
        $data = $_POST;
        if (!is_admin()) {
            $data['company_id'] = user_company();
        }
        $data['created_by'] = user_name();
        $this->db->insert('customers', $data);
        $customer_id = $this->db->insert_id();
        echo $customer_id;
    }

    public function save_customer()
    {
        $data = $_POST;
        $customer_id = $this->input->post('customer_id');
        $save = $this->input->post('save');
        unset($data['customer_id']);
        unset($data['save']);

        if (!is_admin()) {
            $data['company_id'] = user_company();
        }
        if ($customer_id != "") {
            $this->db->where('id', $customer_id);
            $this->db->update('customers', $data);
        } else {
            $data['created_by'] = user_name();
            $this->db->insert('customers', $data);
            $customer_id = $this->db->insert_id();
        }
        if ($save == 'Save') {
            redirect('Customer/customers_list');
        } else {
            redirect('Opportunity/add_opportunity?customer_id=' . $customer_id);
        }
    }

    public function save_opportunity()
    {
        $data = $_POST;
        $opportunity_id = $this->input->post('opportunity_id');
        unset($data['opportunity_id']);
        if ($data['customer_id'] == '') {
            $data['customer_id'] = $data['created_customer_id'];
        }
        $customer = $this->CustomerModel->get_customer($data['customer_id']);
        $data['company_id'] = $customer->company_id;
        if ($opportunity_id != "") {
            $this->db->where('id', $opportunity_id);
            $this->db->update('opportunities', $data);
        } else {
            $data['created_by'] = user_name();
            $data['status'] = 'New';
            $this->db->insert('opportunities', $data);

            $opportunity_id = $this->db->insert_id();

            $managers = $this->UserModel->getManagersByCompanyID($customer->company_id);

            foreach ($managers as $manager) {
                $this->send_email_to_manager($opportunity_id, $manager);
            }
        }

        redirect('Opportunity/opportunity_list');
    }

    private function send_email_to_manager($oppor_id, $manager)
    {
        $userEmail = $manager->username;

        $subject = 'Please note a new Opportunity has been created in the system and pending for assignment';

        $config = array(
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'priority' => '1'
        );

        $this->load->library('email', $config);

        $this->email->set_newline("\r\n");

        $this->email->from('Urbanfence');
        $this->email->to($userEmail);
        $this->email->subject($subject);

        $oppor = $this->OpportunityModel->get_opportunity($oppor_id);
        $data['manager'] = $manager->name;
        $data['oppor_id'] = $oppor_id;
        $data['customer'] = $oppor->customer_name;
        $data['job_type'] = $oppor->job_type;

        $body = $this->load->view('emails/assigned_manager.php', $data, TRUE);
        $this->email->message($body);
        $this->email->send();
    }

    public function get_opportunities()
    {
        $data['data'] = $this->OpportunityModel->getOpportunities();
        echo json_encode($data);
    }

    public function change_sale_rep()
    {
        $oppor_id = $this->input->post('oppor_id');
        $sale_id = $this->input->post('user_id');
        $this->db->where('id', $oppor_id);
        $this->db->update('opportunities', array('sale_rep' => $sale_id, 'status' => 'Assigned'));
        $this->send_email_to_sale($oppor_id, $sale_id);
        echo 'Success';
    }

    private function send_email_to_sale($oppor_id, $sale_id)
    {
        $sale = $this->UserModel->get_user($sale_id);

        $userEmail = $sale->username;

        $subject = 'You have a new job assigned to you';

        $config = array(
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'priority' => '1'
        );

        $this->load->library('email', $config);

        $this->email->set_newline("\r\n");

        $this->email->from('Urbanfence');
        $this->email->to($userEmail);
        $this->email->subject($subject);

        $data['oppor'] = $this->OpportunityModel->get_opportunity($oppor_id);

        $body = $this->load->view('emails/assigned_sale.php', $data, TRUE);
        $this->email->message($body);
        $this->email->send();
    }

    public function get_search_customer()
    {
        $search = $this->input->get('search');
        $this->db->select('customers.id, customers.customer AS text');
        $this->db->from('customers');
        $this->db->like('customer', $search);
        if (!is_admin()) {
            $this->db->where('company_id', user_company());
        }
        $query = $this->db->get();
        echo json_encode($query->result());
    }

    public
    function get_customer()
    {
        $customer_id = $this->input->get('customer_id');
        $data = $this->CustomerModel->get_customer($customer_id);
        echo json_encode($data);
    }

    public
    function check_customer()
    {
        $customer = $this->input->get('customer');
        $data = $this->db->get_where('customers', array('customer' => $customer))->row();
        echo json_encode($data);
    }
}
