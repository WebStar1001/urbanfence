<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CustomerModel extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    public function getCustomers(){

        $customer = $this->input->get('customer');
        $customer_id = $this->input->get('customer_id');
        $company_id = $this->input->get('company_id');
        $status = $this->input->get('status');
        $contact_person = $this->input->get('contact_person');
        $city = $this->input->get('city');
        $last_job_type = $this->input->get('last_job_type');
        $last_sale_rep = $this->input->get('last_sale_rep');
        $last_quote_id = $this->input->get('last_quote_id');
        $last_job_id = $this->input->get('last_job_id');
        $this->db->select('customers.*, companies.name AS company');
        $this->db->from('customers');
        if($customer){
            $this->db->like('customer', $customer);
        }
        if($customer_id){
            $this->db->where('customers.id', $customer_id);
        }
        if(is_manager()){
            $user_company = user_company();
            $this->db->where('customers.company_id', $user_company);
        }else{
            if($company_id){
                $this->db->where('customers.company_id', $company_id);
            }
        }
        if($status){
            $this->db->where('status', $status);
        }
        if($contact_person){
            $this->db->like('contact_person', $contact_person);
        }
        if($city){
            $this->db->like('city', $city);
        }
        if($last_job_id){
            $this->db->where('last_job_id', $last_job_id);
        }
        if($last_quote_id){
            $this->db->where('last_quote_id', $last_quote_id);
        }
        $this->db->join('companies', 'customers.company_id=companies.id', 'left');
        $this->db->order_by('customer');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_customer($customer_id){
        $query = $this->db->get_where('customers', array('id'=>$customer_id));
        return $query->row();
    }
}
