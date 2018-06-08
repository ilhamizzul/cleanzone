<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/dashboard_view';
			$this->load->view('admin/index', $data);	
		} else {
			redirect('login');
		}
		
		
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */