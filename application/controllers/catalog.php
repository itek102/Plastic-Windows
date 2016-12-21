<?php
include('general.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends general {

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
	public function index()
	{
		$data['gen'] = $this->generals();
		$data['navigation'] = $this->navigation();
		$data['catalog'] = $this->catalog();
		$this->load->view('top_view');
		$this->load->view('top_nav',$data);
		$this->load->view('catalog_view');
		$this->load->view('about_window_view');
		$this->load->view('gallery_view');
		$this->load->view('bottom_nav');
		$this->load->view('bottom_view');
	}

	function description() {
		$id = $this->input->post('id');
		$this->db->where('id',$id);
		$query = $this->db->get('catalog');
		$data['description'] = $query->result_array();
		$this->load->view('modal_view',$data);
	}


}
