<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PaymentModel extends CI_Model
{


    public function __construct()
    {

        parent::__construct();

    }

    public function getPaymentByInvoiceID($invoice_id)
    {
        $this->db->select('*');
        $this->db->from('payments');
        $this->db->where('invoice_id', $invoice_id);
        $query = $this->db->get();
        return $query->result();
    }

}
