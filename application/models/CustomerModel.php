<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CustomerModel extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    public function getCustomers(){
        $query = $this->db->get('customers');
        return $query->result();
    }
    public function get_customer($customer_id){
        $query = $this->db->get_where('customers', array('id'=>$customer_id));
        return $query->row();
    }
}
