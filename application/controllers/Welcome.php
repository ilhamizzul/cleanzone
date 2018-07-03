<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('client/index');	
	}

}

/* End of file client_main.php */
/* Location: ./application/controllers/client/client_main.php */