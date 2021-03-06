<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username', $username)->where('password', $password)->get('tb_admin');

		if ($this->db->affected_rows() > 0) {
			$data = $query->row_array();

			$session = array(
				'logged_in' => TRUE,
				'id_admin' => $data['id_admin'],
				'username' => $data['username'],
				'nama_admin' => $data['nama_admin'],
				'foto_profil' => $data['foto_profil'] 
			);
			
			$this->session->set_userdata( $session );

			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */