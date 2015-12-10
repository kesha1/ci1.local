<?php


class Products_model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get(){
        $query = $this->db->get('products');
        return $query->result_array();
    }

}