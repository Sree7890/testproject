<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
    class Export_model extends CI_Model
    {
 
        public function __construct()
        {
            $this->load->database();
        }
        
        public function exportList() 
        {
            //$this->db->select(array('id', 'name', 'price', 'sale_price', 'sale_count', 'sale_date'));
            //$this->db->from('products');
            $this->db->select(array('id', 'first_name', 'last_name', 'phone', 'email'));
            $this->db->from('emp');
            $query = $this->db->get();
            return $query->result();
        }
    }
?>