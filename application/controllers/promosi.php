<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promosi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('promosi_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/promosi_view';
			$data['get_promosi'] = $this->promosi_model->get_promosi();
			$this->load->view('admin/index', $data);	
		} else {
			redirect('login');
		}
		
			
	}

	public function delete($id)
	{
		if ($this->promosi_model->hapus_promosi($id) == TRUE) {
			$this->session->set_flashdata('success', 'Data Promosi Berhasil Dihapus');
			redirect('promosi');
		}
		
	}

}

/* End of file promosi.php */
/* Location: ./application/controllers/promosi.php */