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
echo 'Success!';
}
	
			}
			else {
			$this->load->view('top_view');
			$this->load->view('admin/login');
			$this->load->view('bottom_view');
			}
			
		} else {
			echo 'Yes session';
		}
	}
}
