<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/register_view';
			$this->load->view('admin/index', $data);
		} else {
			redirect('login');
		}
		
					
	}

}

/* End of file register.php */
/* Location: ./application/controllers/register.php */