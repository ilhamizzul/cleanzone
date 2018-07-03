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

}

/* End of file galeri_model.php */
/* Location: ./application/models/galeri_model.php */