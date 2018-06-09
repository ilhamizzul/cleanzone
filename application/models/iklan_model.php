<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iklan_model extends CI_Model {

	public function get_iklan()
	{
		$tipe = 'iklan';
		return $this->db->select('*')
						->from('tb_info')
						->where('tipe', $tipe)
						->get()
						->result();
	}


	public function tambah_iklan($foto_iklan)
	{
		$data = array(
			'nama_informasi' => $this->input->post('nama_informasi'),
			'gambar' => $foto_iklan['file_name'],
			'tipe' => $this->input->post('tipe') 
		);

		return $this->db->insert('tb_info', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function hapus_iklan($id)
	{
		return $this->db->where('id_informasi', $id)->delete('tb_info');

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}


	public function get_iklan_by_id($id_informasi)
	{
		return $this->db->where('id_informasi', $id_informasi)
						->get('tb_info')
						->row();
	}

	public function ubah_iklan_with_foto($foto_iklan)
	{
		$data = array(
			'nama_informasi' => $this->input->post('nama_informasi'),
			'gambar' => $foto_iklan['file_name'] 
		);

		$this->db->where('id_informasi', $this->input->post('id_informasi'))
				->update('tb_info', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function ubah_iklan()
	{
		$data = array(
			'nama_informasi' => $this->input->post('nama_informasi')
		);

		$this->db->where('id_informasi', $this->input->post('id_informasi'))
				->update('tb_info', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

}

/* End of file iklan_model.php */
/* Location: ./application/models/iklan_model.php */