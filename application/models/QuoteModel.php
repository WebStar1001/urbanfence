<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class QuoteModel extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    public function getQuoteList(){
        $quote_id = $this->input->get('quote_id');
        $status = $this->input->get('status');
        $customer_id = $this->input->get('customer_id');
        $quote_selling_total = $this->input->get('selling_total');
        $job_type = $this->input->get('job_type');
        $quote_date = $this->input->get('quote_date');
        $sales_rep = $this->input->get('sales_rap');
        $customer = $this->input->get('customer');
        $oppor_id = $this->input->get('oppor_id');
        $job_city = $this->input->get('job_city');
        $this->db->select('quotes.*,date(quotes.created_at) AS quote_date, customers.customer AS customer, users.name AS sale_rep, 
        opportunities.job_type AS job_type, opportunities.job_city AS job_city, opportunities.job_address AS job_address,
        customers.contact_person AS contact_person, opportunities.job_site AS job_site');
        $this->db->from('quotes');
        $this->db->join('customers', 'quotes.customer_id = customers.id', 'inner');
        $this->db->join('opportunities', 'quotes.oppor_id = opportunities.id', 'inner');
        $this->db->join('users', 'opportunities.sale_rep = users.id', 'left');
        if($quote_id){
            $this->db->where('quotes.id', $quote_id);
        }
        if($status){
            $this->db->where('quotes.status', $status);
        }
        if($customer_id){
            $this->db->where('quotes.customer_id', $customer_id);
        }
        if($job_type){
            $this->db->where('opportunities.job_type', $job_type);
        }
        if($quote_date){
            list($start_date, $end_date) = explode('-', $quote_date);
            $this->db->where('date(opportunities.created_at) BETWEEN "'.date('Y-m-d', strtotime($start_date)).'" AND "'.date('Y-m-d', strtotime($end_date)).'"',"", FALSE);
        }
        if($sales_rep){
            $this->db->where('opportunities.sale_rep', $sales_rep);
        }
        if($customer){
            $this->db->where('customers.customer', $customer);
        }
        if($oppor_id){
            $this->db->where('quotes.oppor_id', $oppor_id);
        }
        if($job_city){
            $this->db->where('opportunities.job_type', $job_city);
        }
        if($quote_selling_total){

        }
        $query = $this->db->get();
        return $query->result_array();
    }
}
