<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multi_marker extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('multi_marker_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/marker_view';
			$data['JSON'] = 'JSON/marker';
			$data['get_marker'] = $this->multi_marker_model->get_marker();
			$this->load->view('admin/index', $data);
		} else {
			redirect('login');
		}		
	}

	public function get_marker_by_id($id)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data_marker_by_id = $this->multi_marker_model->get_marker_by_id($id);

			echo json_encode($data_marker_by_id); 
		} else {
			redirect('login');
		}
			
		
	}

	public function tambah()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->multi_marker_model->tambah_marker() == TRUE) {
				$this->session->set_flashdata('success', 'Data Marker Berhasil Ditambah');
				redirect('multi_marker');
			} else {
				$this->session->set_flashdata('failed', 'Data Marker Gagal Ditambah, Silahkan Coba Lagi');
				redirect('multi_marker');
			}
			
		} else {
			redirect('login');
		}
		
	}

	public function ubah_marker()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->multi_marker_model->ubah_marker() == TRUE) {
				$this->session->set_flashdata('success', 'Ubah Data Marker Berhasil');
				redirect('multi_marker');
			} else {
				$this->session->set_flashdata('failed', 'Ubah Data Gagal, Silahkan Coba Lagi');
				redirect('multi_marker');
			}
			
		} else {
			redirect('login');
		}
		
	}

	public function hapus($id)
	{
		if ($this->multi_marker_model->hapus_marker($id) == TRUE) {
			$this->session->set_flashdata('success', 'Lokasi Berhasil Dihapus');
			redirect('multi_marker');	
		}
		
	}

}

/* End of file multi_marker.php */
/* Location: ./application/controllers/multi_marker.php */