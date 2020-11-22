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


    public function getUserByAccessLevel($access_level)
    {
        $this->db->select('*')
            ->from('users')
            ->where('status != "Disabled"', null, false)
            ->where('access_level', $access_level);

        if(!is_admin()){
            $this->db->where('company_id', user_company());
        }
        $query = $this->db->get();

        return $query->result();
    }

    function check_valid_user($username, $password)
    {

        $password = md5("gil" . $password);
        $this->db->where(array('username' => $username, 'password' => $password, 'status' => 1));

        $query = $this->db->get('users');
        $user = $query->row();

        if (is_object($user)) {
            return $user;
        }
        return false;
    }
}
