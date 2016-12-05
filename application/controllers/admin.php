<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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
		$user = $this->session->userdata('user');
		if(!$user) {
			if($this->input->post('enter')) {
				$login = htmlspecialchars($this->input->post('login'));
$pass = htmlspecialchars($this->input->post('pass'));
$pass = md5($pass);
$this->load->model('admin/admin_model');
$check = $this->admin_model->login($login,$pass);

if($check == TRUE){

$ses_data = array('user' => $login);
$this->session->set_userdata($ses_data);
$this->load->view('admin/content_view');
}
	
			}
			else {
			$this->load->view('top_view');
			$this->load->view('admin/login');
			$this->load->view('bottom_view');
			}
			
		} else {
			$this->load->view('admin/top_view');
			$this->load->view('admin/content_view');
			$this->load->view('admin/bottom_view');
		}
	}

	public function base_setting() {
		if ($this->input->post('save')) {
			$query = $this->db->get('general');
			$query = $query->result();
			foreach ($query as $item) {
				$data['value'] = $this->input->post($item->parametr);
				$this->db->where('parametr',$item->parametr);
				$this->db->update('general',$data);
			}
			$this->session->set_flashdata('update', '1');
		}
			$query = $this->db->get('general');
			$data['general'] = $query->result_array();
			$data['update'] = $this->session->flashdata('update');
			$this->load->view('admin/top_view');
			$this->load->view('admin/bs_view',$data);
			$this->load->view('admin/bottom_view');
	}

	public function slider() {
		$this->db->order_by('position','ASC');
		$query = $this->db->get('slider');
		$data['slider'] = $query->result_array();
		$this->load->view('admin/top_view');
			$this->load->view('admin/slider_view',$data);
			$this->load->view('admin/bottom_view');
	}
}
