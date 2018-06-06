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
		$data['main_view'] = 'admin/dashboard_view';
		$this->load->view('admin/index', $data);	
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */