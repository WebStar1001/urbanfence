<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quotes extends CI_Controller
{


    function __construct()
    {

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
        if (isset($_GET['opportunity_id'])) {
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

    public function save_quote()
    {
        $opportunity_id = $this->input->post('opportunity_id');
        $payment_term = $this->input->post('payment_term');
        $calc_mode = $this->input->post('calc_mode');
        $customer_id = $this->input->post('customer_id');
        $company_id = $this->input->post('company_id');

        $mat_category = $this->input->post('material_category');
        $material_code = $this->input->post('material_code');
        $mat_quantity = $this->input->post('mat_quantity');
        $labor_type = $this->input->post('labor_type');
        $labor_total_days = $this->input->post('labor_total_days');
        $misc_desc = $this->input->post('misc_desc');
        $misc_unit_price = $this->input->post('misc_unit_price');
        $misc_quantity = $this->input->post('misc_quantity');
        $addon_desc = $this->input->post('addon_desc');
        $addon_unit_price = $this->input->post('addon_unit_price');
        $addon_quantity = $this->input->post('addon_quantity');

        $quoteData = array(
            'company_id' => $company_id,
            'customer_id' => $customer_id,
            'oppor_id' => $opportunity_id,
            'payment_term' => $payment_term,
            'calc_mode' => $calc_mode,
            'mat_net' => 1,
            'lab_net' => 1,
            'misc_net' => 1,
            'ads_on_net' => 1,
            'mat_factor' => $this->input->post('material_markup_percent'),
            'lab_factor' => $this->input->post('labor_markup_percent'),
            'misc_factor' => $this->input->post('misc_markup_percent'),
            'ads_on_factor' => $this->input->post('adson_markup_percent'),
            'discount_set' => $this->input->post('discount_percent'),
            'hst' => 0
        );
        $this->db->insert('quotes', $quoteData);
        $quote_id = $this->db->insert_id();

        if(sizeof($mat_category) > 0){

        }
    }

} 