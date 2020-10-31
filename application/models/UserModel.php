<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    public function getUsers(){
        $query = $this->db->get('users');
        return $query->result();
    }
    public function get_user($customer_id){
        $query = $this->db->get_where('users', array('id'=>$customer_id));
        return $query->row();
    }
}
