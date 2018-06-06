<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promosi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['main_view'] = 'admin/promosi_view';
		$this->load->view('admin/index', $data);	
	}

}

/* End of file promosi.php */
/* Location: ./application/controllers/promosi.php */