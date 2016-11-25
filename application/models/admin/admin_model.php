<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model {
    
    function get_material() {
        $query = $this->db->get('materials');
        return $query->result_array();
    }
    
}