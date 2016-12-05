<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
function navigation() {
	$this->db->order_by('position', 'ASC');
	$query = $this->db->get('navigation');
	return $query->result_array();

}

function slider() {
	$this->db->order_by('position', 'ASC');
	$query = $this->db->get('slider');
	return $query->result_array();
}
function slider_num() {
	$query = $this->db->get('slider');
	return $query->num_rows();
}

public function generals() {
	$query = $this->db->get('general');
	
	foreach ($query->result() as $item) {
	$data[$item->parametr] = $item->value;
	}
	return $data;


}

}
