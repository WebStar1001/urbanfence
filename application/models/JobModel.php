<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class JobModel extends CI_Model
{

    public function __construct()
    {

        parent::__construct();

    }

    public function getJobByJobID($job_id)
    {
        $query = $this->db->get_where('jobs', array('id' => $job_id));
        return $query->row();
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

        $this->db->select('jobs.*, customers.customer AS customer, customers.contact_person AS contact_person,
        opportunities.job_type AS job_type,opportunities.site_address AS site_address,opportunities.contact_onsite AS contact_onsite,
        opportunities.site_city AS site_city, opportunities.site_desc AS site_desc');
        $this->db->from('jobs');
        if ($job_id) {
            $this->db->where('jobs.id', $job_id);
        }
        if ($status) {
            $this->db->where('jobs.status', $status);
        }
        if ($quote_id) {
            $this->db->where('jobs.quote_id', $quote_id);
        }
        if ($installer) {
            $this->db->where('jobs.installer', $installer);
        }
        if ($job_balance) {
            $this->db->where('job_balance', $job_balance);
        }
        if ($customer) {
            $this->db->like('customers.customer', $customer);
        }
        if ($customer_id) {
            $this->db->where('jobs.customer_id', $customer_id);
        }
        if ($sale_rep) {
            $this->db->where('opportunities.sale_rep', $sale_rep);
        }
        if ($start_date) {
            $this->db->where('start_date', $start_date);
        }
        if ($site_city) {
            $this->db->where('site_city', $site_city);
        }
        $this->db->join('customers', 'customers.id=jobs.customer_id', 'inner');
        $this->db->join('opportunities', 'opportunities.id=jobs.oppor_id', 'inner');
        $query = $this->db->get();
        return $query->result_array();
    }

}
