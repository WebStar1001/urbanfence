<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserModel extends CI_Model
{

    public function __construct()
    {

        parent::__construct();

    }

    public function getUsers()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function get_user($user_id)
    {
        $query = $this->db->get_where('users', array('id' => $user_id));
        return $query->row();
    }

    public function get_user_by_email($email)
    {
        $query = $this->db->get_where('users', array('username' => $email));
        return $query->row();
    }

    public function getSaleUsers()
    {

        $query = $this->db->get_where('users', array('access_level' => 'Sales'));
        return $query->result();
    }

    public function getUserByAccessLevel($access_level)
    {
        $query = $this->db->get_where('users', array('access_level' => $access_level));
        return $query->result();
    }
}
