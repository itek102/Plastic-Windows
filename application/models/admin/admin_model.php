<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model {
    
      function login($login,$pass) {

$this->db->where('login', $login);
$this->db->where('passwd', $pass);
$query = $this->db->get('user');
if($query->num_rows() > 0){
  return true;
}else {
  return false;
}
}

    
}