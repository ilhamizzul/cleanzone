<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/dashboard_view';
			$data['JSON'] = 'JSON/dashboard';
			$data['count_iklan'] = $this->dashboard_model->count_iklan();
			$data['count_promosi'] = $this->dashboard_model->count_promosi();
			$data['count_galeri'] = $this->dashboard_model->count_galeri();
			$data['count_order'] = $this->dashboard_model->count_order();
			$data['count_marker'] = $this->dashboard_model->count_marker();
			$this->load->view('admin/index', $data);	
		} else {
			redirect('login');
		}
		
		
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */