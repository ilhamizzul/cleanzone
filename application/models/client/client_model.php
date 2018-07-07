<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model {

	public function get_iklan()
	{
		$tipe = 'iklan';
		return $this->db->select('*')
						->from('tb_info')
						->where('tipe', $tipe)
						->limit(3)
						->get()
						->result();
	}

	public function get_promosi()
	{
		$tipe = 'promosi';
		return $this->db->select('*')
						->from('tb_info')
						->where('tipe', $tipe)
						->limit(3)
						->get()
						->result();
	}

}

/* End of file client_model.php */
/* Location: ./application/models/client/client_model.php */