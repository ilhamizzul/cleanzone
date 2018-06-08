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