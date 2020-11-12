<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class QuoteModel extends CI_Model
{

    public function __construct()
    {

        parent::__construct();

    }

    public function getQuoteList()
    {
        $quote_id = $this->input->get('quote_id');
        $status = $this->input->get('status');
        $customer_id = $this->input->get('customer_id');
        $quote_selling_total = $this->input->get('selling_total');
        $job_type = $this->input->get('job_type');
        $quote_date = $this->input->get('quote_date');
        $sales_rep = $this->input->get('sales_rap');
        $customer = $this->input->get('customer');
        $oppor_id = $this->input->get('oppor_id');
        $site_city = $this->input->get('site_city');
        $this->db->select('quotes.*,date(quotes.created_at) AS quote_date, customers.customer AS customer, users.name AS sale_rep, 
        opportunities.job_type AS job_type, opportunities.site_city AS site_city, opportunities.site_address AS site_address,
        customers.contact_person AS contact_person, opportunities.site_desc AS site_desc');
        $this->db->from('quotes');
        $this->db->join('customers', 'quotes.customer_id = customers.id', 'inner');
        $this->db->join('opportunities', 'quotes.oppor_id = opportunities.id', 'inner');
        $this->db->join('users', 'opportunities.sale_rep = users.id', 'left');
        if ($quote_id) {
            $this->db->where('quotes.id', $quote_id);
        }
        if ($status) {
            $this->db->where('quotes.status', $status);
        }
        if ($customer_id) {
            $this->db->where('quotes.customer_id', $customer_id);
        }
        if ($job_type) {
            $this->db->where('opportunities.job_type', $job_type);
        }
        if ($quote_date) {
            list($start_date, $end_date) = explode('-', $quote_date);
            $this->db->where('date(opportunities.created_at) BETWEEN "' . date('Y-m-d', strtotime($start_date)) . '" AND "' . date('Y-m-d', strtotime($end_date)) . '"', "", FALSE);
        }
        if ($sales_rep) {
            $this->db->where('opportunities.sale_rep', $sales_rep);
        }
        if ($customer) {
            $this->db->like('customers.customer', $customer);
        }
        if ($oppor_id) {
            $this->db->where('quotes.oppor_id', $oppor_id);
        }
        if ($site_city) {
            $this->db->like('opportunities.site_city', $site_city);
        }
        if ($quote_selling_total) {

        }
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_quote($quote_id)
    {
        $query = $this->db->get_where('quotes', array('id' => $quote_id));
        return $query->row();
    }

    public function get_matinfo($quote_id){
        $this->db->select('*, product_catalogs.mat_description AS mat_description');
        $this->db->from('mat_details');
        $this->db->join('product_catalogs', 'mat_details.code=product_catalogs.mat_code', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_labinfo($quote_id){
        $query = $this->db->get_where('lab_details', array('quote_id' => $quote_id));
        return $query->result();
    }
    public function get_miscinfo($quote_id){
        $query = $this->db->get_where('misc_details', array('quote_id' => $quote_id));
        return $query->result();
    }
    public function get_add_oninfo($quote_id){
        $query = $this->db->get_where('add_on_details', array('quote_id' => $quote_id));
        return $query->result();
    }
    public function getQuoteDatas($quote_id){
        $this->db->select('quotes.*,companies.name AS company_name,customers.customer AS customer_name
        ,opportunities.site_address AS site_address, opportunities.site_city AS site_city,opportunities.job_type AS job_type
        , opportunities.site_postal_code AS site_postal_code');
        $this->db->from('quotes');
        $this->db->where('quotes.id', $quote_id);
        $this->db->join('companies', 'quotes.company_id=companies.id', 'left');
        $this->db->join('customers', 'quotes.customer_id=customers.id', 'left');
        $this->db->join('opportunities', 'quotes.oppor_id=opportunities.id', 'left');
        $query = $this->db->get();
        return $query->row();
    }
}
