<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class JobModel extends CI_Model
{

    public function __construct()
    {

        parent::__construct();

    }
    public function getJobs()
    {
        $job_id = $this->input->get('job_id');
        $status = $this->input->get('status');
        $quote_id = $this->input->get('quote_id');
        $installer = $this->input->get('installer');
        $job_balance = $this->input->get('job_balance');
        $customer_id = $this->input->get('customer_id');
        $customer = $this->input->get('customer');
        $sale_rep = $this->input->get('sale_rep');
        $start_date = $this->input->get('start_date');
        $end_date = $this->input->get('start_date');
        $site_city = $this->input->get('site_city');

        $this->db->select('jobs.*, customers.customer AS customer, customers.contact_person AS contact_person, quotes.id AS quote_id');
        $this->db->from('jobs');
        if($job_id){
            $this->db->where('jobs.id', $id);
        }
        if ($job_type) {
            $this->db->where('job_type', $job_type);
        }
        if ($sale_source) {
            $this->db->where('sale_source', $sale_source);
        }
        if ($status) {
            $this->db->where('opportunities.status', $status);
        }
        if ($sale_rep) {
            $this->db->where('sale_rep', $sale_rep);
        }
        if ($customer) {
            $this->db->like('customer', $customer);
        }
        if ($customer_id) {
            $this->db->where('customer_id', $customer_id);
        }
        if ($oppor_per_month) {
            $this->db->where("date BETWEEN '" . date('Y-' . $oppor_per_month . '-01') . "' AND '" . date('Y-' . $oppor_per_month . '-31') . "'", "", FALSE);
        } else {
            if ($date) {
                list($start_date, $end_date) = explode('-', $date);
                $this->db->where("date BETWEEN '" . date('Y-m-d', strtotime($start_date)) . "' AND '" . date('Y-m-d', strtotime($end_date)) . "'", "", FALSE);
            }
        }
        if ($site_city) {
            $this->db->where('site_city', $site_city);
        }
        if ($urgency) {
            $this->db->where('urgency', $urgency);
        }
        $this->db->join('customers', 'customers.id=opportunities.customer_id', 'inner');
        $this->db->join('quotes', 'quotes.oppor_id=opportunities.id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

}
