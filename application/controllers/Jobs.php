<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jobs extends CI_Controller
{
    function __construct()
    {

        parent::__construct();

        $this->load->model('UserModel');
        $this->load->model('JobModel');
        $this->load->model('OpportunityModel');
        $this->load->model('CustomerModel');
        $this->load->model('QuoteModel');
        $this->load->model('InvoiceModel');
        $this->load->model('PaymentModel');
//        $this->load->library('auth');
//        $this->load->library('session');
//        $this->auth->check_admin_auth();
    }

    public function jobs_list()
    {
        $data['sales'] = $this->UserModel->getSaleUsers();
        $data['installers'] = $this->UserModel->getUserByAccessLevel('Customer');
        $this->load->view('inc/header');
        $this->load->view('jobs/view_job', $data);
        $this->load->view('inc/footer');
    }

    public function job_detail()
    {
        $job_id = '';
        $customer = '';
        $opportunity = '';
        $job = '';
        $quote = '';
        $mat_info = '';
        if (isset($_GET['job_id'])) {
            $job_id = $_GET['job_id'];
            $job = $this->JobModel->getJobByJobID($job_id);
            if (is_object($job)) {
                $opportunity = $this->OpportunityModel->get_opportunity($job->oppor_id);
                $customer = $this->CustomerModel->get_customer($job->customer_id);
                $quote = $this->QuoteModel->get_quote($job->quote_id);
                $mat_info = $this->QuoteModel->get_matinfo($job->quote_id);
            }
        }
        $data = array('job' => $job, 'oppor' => $opportunity, 'customer' => $customer, 'quote' => $quote, 'mat_info' => $mat_info);
        $data['installers'] = $this->UserModel->getUserByAccessLevel('Customer');
        $this->load->view('inc/header');
        $this->load->view('jobs/job_detail', $data);
        $this->load->view('inc/footer');
    }


    public function get_jobs()
    {
        $data['data'] = $this->JobModel->getJobs();
        echo json_encode($data);
    }

    function search_job()
    {
        $job_id = $this->input->get('job_id');
        $job = $this->JobModel->getJobByJobID($job_id);
        $opportunity = $this->OpportunityModel->get_opportunity($job->oppor_id);
        $customer = $this->CustomerModel->get_customer($job->customer_id);
        $retAry = array('job' => $job, 'oppor' => $opportunity, 'customer' => $customer);
        echo json_encode($retAry);
    }

    public function set_mat_collect()
    {
        $mat_ids = $this->input->post('mat_id');
        $item_collects = $this->input->post('collected_quantity');
        $job_id = $this->input->post('job_id');
        $mat_item_status = 'MAT Collected';
        for ($i = 0; $i < count($mat_ids); $i++) {
            $matRow = $this->db->get_where('mat_details', array('id' => $mat_ids[$i]))->row();
            $this->db->where('id', $mat_ids[$i]);
            $this->db->update('mat_details', array('items_collected_for_job' => $item_collects[$i]));
            if ($matRow->quantity > $item_collects[$i]) {
                $mat_item_status = 'MAT Missing in Stock';
            }
        }
        $this->db->where('id', $job_id);
        $this->db->update('jobs', array('status' => $mat_item_status));

        redirect('Jobs/job_detail?job_id=' . $job_id);
    }

    public function set_job_settings()
    {
        $job_id = $this->input->post('job_id');
        $start_date = $this->input->post('start_date');
        $installer = $this->input->post('installer');
        $end_date = $this->input->post('end_date');
        $status = 'New';
        if ($start_date) {
            $status = 'In progress';
        } elseif ($end_date) {
            $status = 'Completed';
        }
        $this->db->where('id', $job_id);
        $this->db->update('jobs', array('start_date' => $start_date, 'end_date' => $end_date, 'installer' => $installer, 'status' => $status));
        echo $status;
    }

    public function create_payment()
    {
        $job_id = $this->input->post('job_id');
        $customer_id = $this->input->post('customer_id');
        $invoice_number = $this->input->post('invoice_number');
        $payment_amount = $this->input->post('payment_amount');
        $payment_method = $this->input->post('payment_method');
        $date = date('Y-m-d');
        $this->db->insert('payments', array(
            'job_id' => $job_id,
            'invoice_id' => $invoice_number,
            'customer_id' => $customer_id,
            'payment_amount' => $payment_amount,
            'payment_date' => $date,
            'payment_method' => $payment_method
        ));
        echo $this->db->insert_id();
    }

    public function generate_invoice()
    {
        $job_id = $this->input->post('job_id');
        $invoice_id = $this->input->post('invoice_id');
        $customer_id = $this->input->post('customer_id');
        $company_id = $this->input->post('company_id');
        $invoice_amount = $this->input->post('invoice_amount');
        $invoice_due_date = $this->input->post('invoice_due_date');
//        $date = date('Y-m-d');
        $this->db->insert('invoices', array(
            'id' => $invoice_id,
            'job_id' => $job_id,
            'company_id' => $company_id,
            'customer_id' => $customer_id,
            'invoice_amount' => $invoice_amount,
            'due_date' => date('Y-m-d', strtotime($invoice_due_date))
        ));
        echo $this->db->insert_id();
    }

    public function credits_debits_tracking()
    {
        $job_id = $this->input->get('job_id');
        $job = $this->JobModel->getJobByJobID($job_id);
        $invoices = $this->InvoiceModel->getInvoicesByJobID($job_id);
        $retAry = array();
        $i = 0;
        $job_balance = $job->job_balance;
        foreach ($invoices as $inv) {
            $total_pay_amount = 0;
            $invoice_total = $inv->invoice_amount;
            $j = $i + 1;
            $retAry[$i]['invoice_id'] = $inv->id;
            $retAry[$i]['payment_id'] = '';
            $retAry[$i]['debit'] = $inv->invoice_amount;
            $retAry[$i]['credit'] = '';
            $retAry[$i]['job_balance'] = $job_balance;
            $retAry[$i]['account_balance'] = $invoice_total;
            $retAry[$i]['due_date'] = $inv->due_date;
            $payments = $this->PaymentModel->getPaymentByInvoiceID($inv->id);
            foreach ($payments as $pay) {
                $retAry[$j]['invoice_id'] = '';
                $retAry[$j]['payment_id'] = $pay->id;
                $retAry[$j]['debit'] = '';
                $retAry[$j]['credit'] = $pay->payment_amount;
                $retAry[$j]['due_date'] = date('Y-m-d', strtotime($pay->payment_date));
                $retAry[$j]['job_balance'] = $job_balance - $pay->payment_amount;
                $retAry[$j]['account_balance'] = $invoice_total - $pay->payment_amount;
                $retAry[$j]['payment_method'] = $pay->payment_method;
                $retAry[$j]['payment_date'] = date('Y-m-d', strtotime($pay->payment_date));
                $retAry[$j]['notes'] = '';
                $total_pay_amount += $pay->payment_amount;
                $job_balance -= $pay->payment_amount;
                $invoice_total -= $pay->payment_amount;
                if ($invoice_total <= 0) {
                    $retAry[$j]['notes'] = '<span style="color:green;">Job Paid Fully</span>';
                }
                $j++;
            }
            $retAry[$i]['notes'] = '';
            if ($inv->due_date < date('Y-m-d')) {
                $retAry[$i]['notes'] = '<span style="color:red;">Invoice Past Due</span>';
            }
            $i = $j;
        }
        $data['data'] = $retAry;
        echo json_encode($data);
    }


}

