<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_online extends CI_Model {

	public function online($data)
	{
		$this->db->replace('tbl_online', $data);
		return $this->db->affected_rows();
	}

	public function delete_online($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('tbl_online');
		return $this->db->affected_rows();
	}

	public function log($data)
	{
		$this->db->insert('tbl_user_log', $data);
		return $this->db->affected_rows();
	}

}

/* End of file M_online.php */
/* Location: ./application/models/M_online.php */