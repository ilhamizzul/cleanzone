<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('order_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/order_view';
			$data['JSON'] = 'JSON/order';
			$data['get_order'] = $this->order_model->get_order();
			$this->load->view('admin/index', $data);
		} else {
			redirect('login');
		}
		
		
	}

	public function get_order_by_id($id_order)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data_order_by_id = $this->order_model->get_order_by_id($id_order);

			echo json_encode($data_order_by_id);
		} else {
			redirect('login');
		}
		
	}

	public function tambah()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->order_model->tambah_order() == TRUE) {
				$this->session->set_flashdata('success', 'Tambah Order Berhasil');
				redirect('order');
			} else {
				$this->session->set_flashdata('failed', 'Tambah Order Gagal, Silahkan Coba Lagi');
				redirect('order');
			}
			
		} else {
			redirect('login');
		}
		
	}

	public function ubah_order()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->order_model->ubah_order() == TRUE) {
				$this->session->set_flashdata('success', 'Data Order Berhasil Diubah');
				redirect('order');
			} else {
				$this->session->set_flashdata('failed', 'Data Order Gagal Diubah, Silahkan Coba Lagi');
				redirect('order');
			}
			
		} else {
			redirect('login');
		}
		
	}

	public function delete($id)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->order_model->hapus_order($id) == TRUE) {
				$this->session->set_flashdata('success', 'Data Order Berhasil Dihapus');
				redirect('order');
			}
		} else {
			redirect('login');
		}
		
	}

	public function ubah_status_menunggu($id)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->order_model->ubah_status_menunggu($id) == TRUE) {
				$this->session->set_flashdata('success', 'Status Berhasil Diubah');
				redirect('order');
			}
			
		} else {
			redirect('login');
		}
		
	}

	public function ubah_status_dijemput($id)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->order_model->ubah_status_dijemput($id) == TRUE) {
				$this->session->set_flashdata('success', 'Status Berhasil Diubah');
				redirect('order');
			}
			
		} else {
			redirect('login');
		}
		
	}

	public function ubah_status_proses($id)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->order_model->ubah_status_diproses($id) == TRUE) {
				$this->session->set_flashdata('success', 'Status Berhasil Diubah');
				redirect('order');
			}
			
		} else {
			redirect('login');
		}
		
	}

	public function ubah_status_diantar($id)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->order_model->ubah_status_diantar($id) == TRUE) {
				$this->session->set_flashdata('success', 'Status Berhasil Diubah');
				redirect('order');
			}
			
		} else {
			redirect('login');
		}
		
	}

}

/* End of file order.php */
/* Location: ./application/controllers/order.php */