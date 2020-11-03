<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class OpportunityModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

    }

    public function getOpportunities()
    {
        $job_type = $this->input->get('job_type');
        $oppor_per_month = $this->input->get('oppor_per_month');
        $sale_source = $this->input->get('sale_source');
        $status = $this->input->get('status');
        $sale_rep = $this->input->get('sale_rep');
        $customer = $this->input->get('customer');
        $id = $this->input->get('id');
        $customer_id = $this->input->get('customer_id');
        $date = $this->input->get('date');
        $job_city = $this->input->get('job_city');
        $urgency = $this->input->get('urgency');
        $this->db->select('opportunities.*, customers.customer AS customer');
        $this->db->from('opportunities');
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
        if ($job_city) {
            $this->db->where('job_city', $job_city);
        }
        if ($urgency) {
            $this->db->where('urgency', $urgency);
        }
        $this->db->join('customers', 'customers.id=opportunities.customer_id', 'inner');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_opportunity($opportunity_id){
        $this->db->select('opportunities.*, users.name as sale_rep');
        $this->db->from('opportunities');
        $this->db->where('opportunities.id', $opportunity_id);
        $this->db->join('users', 'opportunities.sale_rep=users.id', 'left');
        $query = $this->db->get();
        return $query->row();
    }
}
