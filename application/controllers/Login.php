<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->auth->is_logged()) {
            $this->output->set_header("Location: " . base_url() . 'Dashboard', TRUE, 302);
        } else {

            $this->load->view('login/index');
        }
    }

    public function do_login()
    {
        $error = '';
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($username == '' || $password == '' || $this->auth->login($username, $password) === FALSE) {
            $error = 'Wrong Username Or Password';
        }
        if ($error != '') {
            $this->session->set_userdata(array('error_message' => $error));
            $this->output->set_header("Location: " . base_url() . 'Login', TRUE, 302);
        } else {
            $this->output->set_header("Location: " . base_url(). 'Dashboard', TRUE, 302);
        }
    }
    public function do_logout(){
        if($this->auth->logout()){
            $this->output->set_header("Location: " . base_url() . 'Login', TRUE, 302);
        }
    }
    public function go_to_error_page(){
        $this->load->view('inc/header');
        $this->load->view('inc/error');
        $this->load->view('inc/footer');
    }
}
