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
        $this->load->model('UserModel');
        $this->load->model('QuoteModel');
//        $this->load->library('auth');
//        $this->load->library('session');
//        $this->auth->check_admin_auth();
    }

    public function add_quote()
    {
        $data['opportunity'] = array();
        $data['quote'] = array();
        $data['mat_info'] = array();
        $data['lab_info'] = array();
        $data['misc_info'] = array();
        $data['add_on_info'] = array();

        if (isset($_GET['opportunity_id'])) {
            $data['opportunity'] = $this->OpportunityModel->get_opportunity($_GET['opportunity_id']);
        } elseif (isset($_GET['quote_id'])) {
            $data['quote'] = $this->QuoteModel->get_quote($_GET['quote_id']);
            $data['mat_info'] = $this->QuoteModel->get_matinfo($_GET['quote_id']);
            $data['lab_info'] = $this->QuoteModel->get_labinfo($_GET['quote_id']);
            $data['misc_info'] = $this->QuoteModel->get_miscinfo($_GET['quote_id']);
            $data['add_on_info'] = $this->QuoteModel->get_add_oninfo($_GET['quote_id']);
            $data['opportunity'] = $this->OpportunityModel->get_opportunity($data['quote']->oppor_id);
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
        $data['sales'] = $this->UserModel->getSaleUsers();
        $this->load->view('inc/header');
        $this->load->view('quotes/view_quote', $data);
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
        $action = $this->input->post('action');
        if ($action == 'save_new_quote') {
            $quoteData = array(
                'company_id' => $company_id,
                'customer_id' => $customer_id,
                'oppor_id' => $opportunity_id,
                'payment_term' => $payment_term,
                'calc_mode' => $calc_mode,
            );
        } elseif ($action == 'submit_new_quote') {
            $quoteData = array(
                'company_id' => $company_id,
                'customer_id' => $customer_id,
                'oppor_id' => $opportunity_id,
                'payment_term' => $payment_term,
                'calc_mode' => $calc_mode,
                'status' => 'Pending'
            );
        } elseif ($action == 'save_pending_quote') {
            $quoteData = array(
                'company_id' => $company_id,
                'customer_id' => $customer_id,
                'oppor_id' => $opportunity_id,
                'payment_term' => $payment_term,
                'calc_mode' => $calc_mode,
                'mat_net' => $this->input->post('mat_net'),
                'labour_net' => $this->input->post('labour_net'),
                'misc_net' => $this->input->post('misc_net'),
                'ads_on_net' => $this->input->post('add_on_net'),
                'mat_factor' => $this->input->post('mat_factor'),
                'lab_factor' => $this->input->post('lab_factor'),
                'misc_factor' => $this->input->post('misc_factor'),
                'ads_on_factor' => $this->input->post('ads_on_factor'),
                'discount_set' => $this->input->post('discount_percent'),
                'hst' => $this->input->post('hst')
            );
        } elseif ($action == 'approve_pending_quote') {
            $quoteData = array(
                'company_id' => $company_id,
                'customer_id' => $customer_id,
                'oppor_id' => $opportunity_id,
                'payment_term' => $payment_term,
                'calc_mode' => $calc_mode,
                'status' => 'Approved',
                'mat_net' => $this->input->post('mat_net'),
                'labour_net' => $this->input->post('labour_net'),
                'misc_net' => $this->input->post('misc_net'),
                'ads_on_net' => $this->input->post('add_on_net'),
                'mat_factor' => $this->input->post('mat_factor'),
                'lab_factor' => $this->input->post('lab_factor'),
                'misc_factor' => $this->input->post('misc_factor'),
                'ads_on_factor' => $this->input->post('ads_on_factor'),
                'discount_set' => $this->input->post('discount_percent'),
                'hst' => $this->input->post('hst')
            );
        } elseif ($action == 'reject_pending_quote') {
            $quoteData['status'] = 'New';
        } elseif ($action == 'save_approved_quote') {
            $quoteData = array(
                'additional_info' => $this->input->post('additional_info'),
                'ia_signed' => $this->input->post('ia_signed'),
                'form_signed' => $this->input->post('form_signed'),
                'credit_passed' => $this->input->post('credit_passed')
            );
        } elseif ($action == 'reject_approved_quote') {
            $quoteData['status'] = 'Pending';
        } else {
            $quoteData = array(
                'additional_info' => $this->input->post('additional_info'),
                'ia_signed' => $this->input->post('ia_signed'),
                'form_signed' => $this->input->post('form_signed'),
                'credit_passed' => $this->input->post('credit_passed'),
                'status' => 'Job'
            );
            $quote = $this->QuoteModel->get_quote($quote_id);
            $quote_total = $quote->mat_net * $quote->mat_factor + $quote->labour_net * $quote->lab_factor+
                + $quote->misc_net * $quote->misc_factor + $quote->ads_on_net * $quote->ads_on_factor;
            $discount_amount = $quote_total * $quote->discount_set / 100;
            $hst = $quote->hst;
            $jobData = array(
                'customer_id' => $customer_id,
                'oppor_id' => $opportunity_id,
                'quote_id' => $quote_id,
                'job_balance' => $quote_total - $discount_amount + $hst,
                'company_id' => $company_id
            );
            $this->db->insert('jobs', $jobData);
        }
        if ($quote_id) {
            $this->db->where('id', $quote_id);
            $this->db->update('quotes', $quoteData);
        } else {
            $this->db->insert('quotes', $quoteData);
            $quote_id = $this->db->insert_id();
        }
        if ($action == 'save_new_quote' || $action == 'submit_new_quote' || $action == 'save_pending_quote' || $action == 'approve_pending_quote') {
            $this->db->delete('mat_details', array('quote_id' => $quote_id));
            $this->db->delete('lab_details', array('quote_id' => $quote_id));
            $this->db->delete('misc_details', array('quote_id' => $quote_id));
            $this->db->delete('add_on_details', array('quote_id' => $quote_id));
            if ($mat_category) {
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
                    }
                }
            }
            if ($labor_type) {
                if (sizeof($labor_type) > 0) {
                    foreach ($labor_type as $key => $type) {
                        $lab_data = array(
                            'quote_id' => $quote_id,
                            'labour_type' => $type,
                            'total_days' => $labor_total_days[$key],
                            'company_id' => $company_id
                        );
                        $this->db->insert('lab_details', $lab_data);
                    }
                }
            }
            if ($misc_desc) {
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
            }
            if ($addon_desc) {
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
            }
        }
        redirect('Quotes/quotes_list');
    }

    public function get_quotes()
    {
        $data['data'] = $this->QuoteModel->getQuoteList();
        echo json_encode($data);
    }

    public function generate_ia()
    {
        $quote_id = $_GET['quote_id'];
//        $quote_id = 2;
        $quote = $this->QuoteModel->getQuoteDatas($quote_id);
        $this->load->view('quotes/generate_ia', array('quote' => $quote));

        $html = $this->output->get_output();

        // Load pdf library
        $this->load->library('Pdf');

        // Load HTML content
        $this->pdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $this->pdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $this->pdf->render();

        // Output the generated PDF (1 = download and 0 = preview)
        $this->pdf->stream("welcome.pdf", array("Attachment" => 0));
        echo 'success';
        exit;
    }

    public function generate_qa_form()
    {
        $quote_id = $_GET['quote_id'];
//        $quote_id = 2;
        $quote = $this->QuoteModel->getQuoteDatas($quote_id);
        $customer = $this->CustomerModel->get_customer($quote->customer_id);

        $this->load->view('quotes/qa_form', array('quote' => $quote, 'customer' => $customer));

        $html = $this->output->get_output();

        // Load pdf library
        $this->load->library('Pdf');

        // Load HTML content
        $this->pdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $this->pdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $this->pdf->render();

        // Output the generated PDF (1 = download and 0 = preview)
        $this->pdf->stream("welcome.pdf", array("Attachment" => 0));
        echo 'success';
        exit;
    }
} 