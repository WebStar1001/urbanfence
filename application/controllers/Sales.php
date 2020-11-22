<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sales extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('UserModel');
        $this->load->model('CompanyModel');
        $this->load->model('JobModel');
        $this->load->model('QuoteModel');
        $this->load->library('auth');
        $this->load->library('session');
        $this->auth->check_permission();
    }

    public function sales_list()
    {
        $data['companies'] = $this->CompanyModel->getCompanies();
        $data['sales'] = $this->UserModel->getUserByAccessLevel('Sales');
        $data['installers'] = $this->UserModel->getUserByAccessLevel('User');
        $this->load->view('inc/header');
        $this->load->view('sales/view_sales', $data);
        $this->load->view('inc/footer');

    }

    public function get_sales()
    {
        $sales = $this->JobModel->getSalesData();
        $profit_filter = $this->input->get('profit');
        $retAry = array();
        for ($i = 0; $i < count($sales); $i++) {
            $total_pay_amount = $this->JobModel->getPayamountByJobID($sales[$i]['id']);

            $profit = $this->QuoteModel->getProfitByQuoteID($sales[$i]['quote_id']);

            if ($profit_filter) {
                if ($profit < $profit_filter * 1) {
                    continue;
                }
            }
            $retAry[$i] = $sales[$i];
            $retAry[$i]['job_total'] = $sales[$i]['job_balance'];
            $retAry[$i]['profit'] = $this->QuoteModel->getProfitByQuoteID($sales[$i]['quote_id']);
            $retAry[$i]['job_balance'] = round($sales[$i]['job_balance'] * 1 - $total_pay_amount * 1, 2);
        }
        $data['data'] = $retAry;
        echo json_encode($data);
    }
}