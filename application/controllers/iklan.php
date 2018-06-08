<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iklan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('iklan_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/iklan_view';
			$data['get_iklan'] = $this->iklan_model->get_iklan();
			$this->load->view('admin/index', $data);	
		} else {
			redirect('login');
		}
		
		
	}

	public function tambah()
	{
		$config['upload_path'] = './assets/uploads/iklan/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '6100';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto_iklan')){
			$this->session->set_flashdata('failed', $this->upload->display_errors());
			redirect('iklan');
		}
		else{
			if ($this->iklan_model->tambah_iklan($this->upload->data()) == TRUE) {
				$this->session->set_flashdata('success', 'Tambah Data Iklan Berhasil');
				redirect('iklan');
			} else {
				$this->session->set_flashdata('failed', 'Tambah Data Iklan Gagal, Silahkan Coba Lagi');
				redirect('iklan');
			}
			
		}
	}

	public function delete($id)
	{
		if ($this->iklan_model->hapus_iklan($id) == TRUE) {
			$this->session->set_flashdata('success', 'Data Iklan Berhasil Dihapus');
			redirect('iklan');
		}
	}

}

/* End of file info.php */
/* Location: ./application/controllers/info.php */