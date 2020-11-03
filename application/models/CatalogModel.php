<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CatalogModel extends CI_Model
{


    public function __construct()
    {

        parent::__construct();

    }

    public function getCatalogs()
    {
        $this->db->select('*');
        $this->db->from('product_catalogs');
        $query = $this->db->get();
        return $query->result();
    }
    public function getProductCategories()
    {
        $this->db->select('*');
        $this->db->from('product_catalogs');
        $this->db->group_by('product_category');
        $query = $this->db->get();
        return $query->result();
    }


    public function get_user($customer_id)
    {
        $query = $this->db->get_where('users', array('id' => $customer_id));
        return $query->row();
    }

    public function getCatalogOptions()
    {
        $catalogs = $this->getCatalogs();
        $optionsHtml = '';
        foreach ($catalogs as $item) {
            $optionsHtml .= '<option value="' . $item->id . '">' . $item->product_category . '</option>';
        }
        return $optionsHtml;
    }
    public function getMetacodeOptions()
    {
        $catalogs = $this->getCatalogs();
        $optionsHtml = '';
        foreach ($catalogs as $item) {
            $optionsHtml .= '<option value="' . $item->id . '">' . $item->mat_code . '</option>';
        }
        return $optionsHtml;
    }
}
