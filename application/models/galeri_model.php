<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_model extends CI_Model {

	public function get_galeri()
	{
		return $this->db->select('*')
						->from('tb_galeri')
						->get()
						->result();
	}	

	public function tambah_foto($foto)
	{
		$data = array(
			'deskripsi' => $this->input->post('deskripsi'),
			'sub_deskripsi' => $this->input->post('sub_deskripsi'),
			'gambar' => $foto['file_name'] );

		return $this->db->insert('tb_galeri', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function get_gambar_by_id($id_gambar)
	{
		return $this->db->where('id_gambar', $id_gambar)
						->get('tb_galeri')
						->row();
	}

	public function ubah_data_gambar()
	{
		$data = array(
			'deskripsi' => $this->input->post('deskripsi'),
			'sub_deskripsi' => $this->input->post('sub_deskripsi') );

		$this->db->where('id_gambar', $this->input->post('id_gambar'))
				->update('tb_galeri', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function hapus_gambar($id)
	{
		return $this->db->where('id_gambar', $id)->delete('tb_galeri');

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function ubah_gambar($foto)
	{
		$data = array(
			'deskripsi' => $this->input->post('deskripsi'),
			'sub_deskripsi' => $this->input->post('sub_deskripsi'),
			'gambar' => $foto['file_name'] );

		$this->db->where('id_gambar', $this->input->post('id_gambar'))
				->update('tb_galeri', $data);	

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

}

/* End of file galeri_model.php */
/* Location: ./application/models/galeri_model.php */