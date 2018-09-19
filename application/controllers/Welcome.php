<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('client/client_model');
		$this->load->model('galeri_model');
		$this->load->model('multi_marker_model');
	}

	public function index()
	{
		$data['data_galeri'] = $this->galeri_model->get_galeri();
		$data['data_iklan'] = $this->client_model->get_iklan();
		$data['data_promosi'] = $this->client_model->get_promosi();
		$data['data_lokasi'] = $this->multi_marker_model->get_marker();
		$this->load->view('client/index2', $data);	
	}

}

/* End of file client_main.php */
/* Location: ./application/controllers/client/client_main.php */