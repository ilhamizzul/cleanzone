<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function count_iklan()
	{
		return $this->db->where('tipe', 'iklan')->count_all_results('tb_info');
	}	

	public function count_promosi()
	{
		return $this->db->where('tipe', 'promosi')->count_all_results('tb_info');
	}	

	public function count_galeri()
	{
		return $this->db->count_all_results('tb_galeri');
	}

	public function count_order()
	{
		return $this->db->count_all_results('tb_order');
	}

	public function count_marker()
	{
		return $this->db->count_all_results('tb_location');
	}	

}

/* End of file dashboard_model.php */
/* Location: ./application/models/dashboard_model.php */