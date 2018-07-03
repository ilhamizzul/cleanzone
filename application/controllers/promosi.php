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

	public function tambah()
	{
		$config['upload_path'] = './assets/uploads/promosi/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '6100';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto_promosi')){
			$this->session->set_flashdata('failed', $this->upload->display_errors());
			redirect('promosi');
		}
		else{
			if ($this->promosi_model->tambah_promosi($this->upload->data()) == TRUE) {
				$this->session->set_flashdata('success', 'Tambah Data Promosi Berhasil');
				redirect('promosi');
			} else {
				$this->session->set_flashdata('failed', 'Tambah Data Promosi Gagal, Silahkan Coba Lagi');
				redirect('promosi');
			}
			
		}
	}

	public function get_promosi_by_id($id_informasi)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data_promosi_by_id = $this->promosi_model->get_promosi_by_id($id_informasi);

			echo json_encode($data_promosi_by_id);
		} else {
			redirect('login');
		}
	}

	public function ubah_promosi()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$config['upload_path'] = './assets/uploads/promosi/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']  = '6100';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('foto_promosi')){
				// $error = array('error' => $this->upload->display_errors());
				if ($this->promosi_model->ubah_promosi() == TRUE) {
					$this->session->set_flashdata('success', 'Ubah Data Promosi Berhasil');
					redirect('promosi');
				} else {
					$this->session->set_flashdata('failed', 'Ubah Data Promosi Gagal, Silahkan Coba Lagi');
					redirect('promosi');
				}
			}
			else{
				// $data = array('upload_data' => $this->upload->data());
				// echo "success";

				if ($this->promosi_model->ubah_promosi_with_foto($this->upload->data()) == TRUE) {
					$this->session->set_flashdata('success', 'Ubah Data Promosi Berhasil');
					redirect('promosi');
				} else {
					$this->session->set_flashdata('failed', 'Ubah Data Promosi Gagal, Silahkan Coba Lagi');
					redirect('promosi');
				}
				
			}
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