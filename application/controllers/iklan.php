<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iklan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['main_view'] = 'admin/iklan_view';
		$this->load->view('admin/index', $data);	
	}

}

/* End of file info.php */
/* Location: ./application/controllers/info.php */