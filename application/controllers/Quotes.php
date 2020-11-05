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
        $this->load->view('quotes/view_quote');
        $this->load->view('inc/footer');

    }

    public function save_quote()
    {
        $opportunity_id = $this->input->post('opportunity_id');
        $payment_term = $this->input->post('payment_term');
        $calc_mode = $this->input->post('calc_mode');
        $customer_id = $this->input->post('customer_id');
        $company_id = $this->input->post('company_id');
        $quote_id = $this->input->post('quote_id');

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
        $total_markup_percent = $this->input->post('total_markup_percent');


        $quoteData = array(
            'company_id' => $company_id,
            'customer_id' => $customer_id,
            'oppor_id' => $opportunity_id,
            'payment_term' => $payment_term,
            'calc_mode' => $calc_mode,
            'mat_net' => 1,
            'labour_net' => 1,
            'misc_net' => 1,
            'ads_on_net' => 1,
            'mat_factor' => $this->input->post('material_markup_percent'),
            'lab_factor' => $this->input->post('labor_markup_percent'),
            'misc_factor' => $this->input->post('misc_markup_percent'),
            'ads_on_factor' => $this->input->post('adson_markup_percent'),
            'discount_set' => $this->input->post('discount_percent'),
            'hst' => 0
        );

        if ($total_markup_percent) {
            $quoteData['mat_factor'] = $this->input->post('total_markup_percent');
            $quoteData['lab_factor'] = $this->input->post('total_markup_percent');
            $quoteData['misc_factor'] = $this->input->post('total_markup_percent');
            $quoteData['ads_on_factor'] = $this->input->post('total_markup_percent');
        }

        if ($quote_id) {
            $this->db->where('id', $quote_id);
            $this->db->update('quotes', $quoteData);
        } else {
            $this->db->insert('quotes', $quoteData);
            $quote_id = $this->db->insert_id();
        }

        if (sizeof($mat_category) > 0) {
            foreach ($mat_category as $key => $category) {
                $mat_data = array(
                    'quote_id' => $quote_id,
                    'mat_category' => $category,
                    'code' => $material_code[$key],
                    'quantity' => $mat_quantity[$key],
                    'company_id' => $company_id
                );
                $this->db->insert('mat_details', $mat_data);
                $mat_net = $this->db->insert_id();
            }
        }
        if (sizeof($labor_type) > 0) {
            foreach ($labor_type as $key => $type) {
                $lab_data = array(
                    'quote_id' => $quote_id,
                    'labour_type' => $type,
                    'total_days' => $labor_total_days[$key],
                    'company_id' => $company_id
                );
                $this->db->insert('lab_details', $lab_data);
                $labour_net = $this->db->insert_id();
            }
        }
        if (sizeof($misc_desc) > 0) {
            foreach ($misc_desc as $key => $desc) {
                $misc_data = array(
                    'quote_id' => $quote_id,
                    'misc_description' => $desc,
                    'quantity' => $misc_quantity[$key],
                    'price_per_unit' => $misc_unit_price[$key],
                    'company_id' => $company_id
                );
                $this->db->insert('misc_details', $misc_data);
            }
        }
        if (sizeof($addon_desc) > 0) {
            foreach ($addon_desc as $key => $add_desc) {
                $addon_data = array(
                    'quote_id' => $quote_id,
                    'add_on_description' => $add_desc,
                    'quantity' => $addon_quantity[$key],
                    'net_price_per_unit' => $addon_unit_price[$key],
                    'company_id' => $company_id
                );
                $this->db->insert('add_on_details', $addon_data);
            }
        }
        redirect('Quotes/quotes_list');
    }

} 