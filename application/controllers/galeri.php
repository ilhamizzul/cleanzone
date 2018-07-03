<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('galeri_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
				$data['main_view'] = 'admin/galeri_view';
				$data['get_galeri'] = $this->galeri_model->get_galeri();
				$this->load->view('admin/index', $data);
			} else {
				redirect('login');
			}
				
	}

}

/* End of file galeri.php */
/* Location: ./application/controllers/galeri.php */