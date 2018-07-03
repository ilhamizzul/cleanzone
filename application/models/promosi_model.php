<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promosi_model extends CI_Model {

	public function get_promosi()
	{
		$tipe = 'promosi';
		return $this->db->select('*')
						->from('tb_info')
						->where('tipe', $tipe)
						->get()
						->result();
	}

	public function tambah_promosi($foto_promosi)
	{
		$data = array(
			'nama_informasi' => $this->input->post('nama_informasi'),
			'gambar' => $foto_promosi['file_name'],
			'tipe' => $this->input->post('tipe') );

		return $this->db->insert('tb_info', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function get_promosi_by_id($id_informasi)
	{
		return $this->db->where('id_informasi', $id_informasi)
						->get('tb_info')
						->row();
	}

	public function ubah_promosi()
	{
		$data = array('nama_informasi' => $this->input->post('nama_informasi'));

		$this->db->where('id_informasi', $this->input->post('id_informasi'))
			->update('tb_info', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function ubah_promosi_with_foto($foto_promosi)
	{
		$data = array(
			'nama_informasi' => $this->input->post('nama_informasi'),
			'gambar' => $foto_promosi['file_name'] 
		);

		$this->db->where('id_informasi', $this->input->post('id_informasi'))
				->update('tb_info', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function hapus_promosi($id)
	{
		return $this->db->where('id_informasi', $id)->delete('tb_info');
		
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

}

/* End of file promosi_model.php */
/* Location: ./application/models/promosi_model.php */