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

	public function tambah()
	{
		$config['upload_path'] = './assets/uploads/galeri/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '6100';
		$config['max_width']  = '400';
		$config['max_height']  = '300';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
			$this->session->set_flashdata('failed', $this->upload->display_errors());
			redirect('galeri');
		}
		else{
			if ($this->galeri_model->tambah_foto($this->upload->data()) == TRUE) {
				$this->session->set_flashdata('success', 'Tambah Galeri Berhasil');
				redirect('galeri');
			} else {
				$this->session->set_flashdata('failed', 'Tambah Galeri Foto Gagal, Silahkan Coba Lagi');
				redirect('galeri');
			}
		}
	}

	public function get_gambar_by_id($id_gambar)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data_gambar_by_id = $this->galeri_model->get_gambar_by_id($id_gambar);

			echo json_encode($data_gambar_by_id);
		} else {
			redirect('login');
		}
		
	}

	public function ubah_gambar()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$config['upload_path'] = './assets/uploads/galeri/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']  = '5100';
			$config['max_width']  = '400';
			$config['max_height']  = '300';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('foto')){
				if ($this->galeri_model->ubah_data_gambar() == TRUE) {
					$this->session->set_flashdata('success', 'Ubah Data Gambar Berhasil');
					redirect('galeri');
				} else {
					$this->session->set_flashdata('failed', 'Ubah Data Gambar Gagal, Silahkan Coba Lagi');
					redirect('galeri');
				}
				
			}
			else{
				if ($this->galeri_model->ubah_gambar($this->upload->data()) == TRUE) {
					$this->session->set_flashdata('success', 'Ubah Data Gambar Berhasil');
					redirect('galeri');
				} else {
					$this->session->set_flashdata('failed', $this->upload->display_errors());
					redirect('galeri');
				}
			}
		} else {
			redirect('login');
		}
		
	}

	public function hapus($id)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->galeri_model->hapus_gambar($id) == TRUE) {
				$this->session->set_flashdata('success', 'Hapus Galeri Berhasil');
				redirect('galeri');
			} else {
				$this->session->set_flashdata('failed', 'Hapus Data Gagal, Silahkan Coba Lagi');
				redirect('galeri');
			}
			
		} else {
			redirect('login');
		}
		
	}

}

/* End of file galeri.php */
/* Location: ./application/controllers/galeri.php */