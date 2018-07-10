<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {

	public function get_order()
	{
		return $this->db->select('*')
						->from('tb_order')
						->order_by('status', 'asc')
						->get()
						->result();
	}

	public function get_order_by_id($id_order)
	{
		return $this->db->where('id_order', $id_order)
						->get('tb_order')
						->row();
	}

	public function tambah_order()
	{
		$data = array(
			'invoice_order' => $this->input->post('invoice_order'), 
			'alamat' => $this->input->post('alamat'), 
			'cash' => $this->input->post('cash'), 
			'total' => $this->input->post('total'), 
			'status' => $this->input->post('status')
		);

		return $this->db->insert('tb_order', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function ubah_order()
	{
		$data = array(
			'invoice_order' => $this->input->post('invoice_order'), 
			'alamat' => $this->input->post('alamat'), 
			'cash' => $this->input->post('cash'), 
			'total' => $this->input->post('total')
		);

		return $this->db->where('id_order', $this->input->post('id_order'))
				->update('tb_order', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function hapus_order($id)
	{
		return $this->db->where('id_order', $id)
						->delete('tb_order');

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

//UBAH STATUS
	public function ubah_status_menunggu($id)
	{
		$data = array('status' => 'dijemput' );

		return $this->db->where('id_order', $id)
						->update('tb_order' , $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function ubah_status_dijemput($id)
	{
		$data = array('status' => 'proses' );

		return $this->db->where('id_order', $id)
						->update('tb_order', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function ubah_status_diproses($id)
	{
		$data = array('status' => 'diantar' );

		return $this->db->where('id_order', $id)
						->update('tb_order', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function ubah_status_diantar($id)
	{
		$data = array('status' => 'selesai' );

		return $this->db->where('id_order', $id)
						->update('tb_order', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

}

/* End of file order_model.php */
/* Location: ./application/models/order_model.php */