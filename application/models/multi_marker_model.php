<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multi_marker_model extends CI_Model {

	public function get_marker()
	{
		return $this->db->get('tb_location')
				->result();
	}

	public function get_marker_by_id($id)
	{
		return $this->db->where('id', $id)
						->get('tb_location')
						->result();
	}

	public function tambah_marker()
	{
		$data = array(
			'alamat' => $this->input->post('alamat'),
			'nomor_telepon' => $this->input->post('nomor_telepon'),
			'lat' => $this->input->post('lat'),
			'lng' => $this->input->post('lng') 
		);

		return $this->db->insert('tb_location', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function hapus_marker($id)
	{
		return $this->db->where('id', $id)
						->delete('tb_location');

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

}

/* End of file multi_marker_model.php */
/* Location: ./application/models/multi_marker_model.php */