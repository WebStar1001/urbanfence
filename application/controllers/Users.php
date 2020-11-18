<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('UserModel');
//        $this->load->library('auth');
//        $this->load->library('session');
//        $this->auth->check_admin_auth();
    }

    public function users_list()
    {
        $data['users'] = $this->UserModel->getUsers();
        $this->load->view('inc/header');
        $this->load->view('users/user_list', $data);
        $this->load->view('inc/footer');

    }

    public function add_user()
    {
        $user = '';
        if (isset($_GET['user_id'])) {
            $user = $this->UserModel->get_user($_GET['user_id']);
        }
        $this->load->view('inc/header');
        $this->load->view('users/add_user', array('user' => $user));
        $this->load->view('inc/footer');
    }

    public function save_user()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $name = $this->input->post('name');
        $access_level = $this->input->post('access_level');
        $user_id = $this->input->post('user_id');
        if($user_id){
            $this->db->where('id', $user_id);
            $this->db->update('users', array(
                'username' => $username,
                'password' => $password,
                'name' => $name,
                'access_level' => $access_level
            ));
        }else{
            $user = $this->UserModel->get_user_by_email($username);
            $data = array();
            if ($user) {
                $data['error'] = 'User Name Already Exists';
            } else {
                $this->db->insert('users', array(
                    'username' => $username,
                    'password' => $password,
                    'name' => $name,
                    'access_level' => $access_level
                ));
                $data['user_id'] = $this->db->insert_id();
            }
        }
        redirect('Users/users_list');
    }
}