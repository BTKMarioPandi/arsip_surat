<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model {
	var $table = 'tbl_user_desc';

	public function cek($value)
	{
		$this->db->select('id_user, photo');
		$this->db->where($value);
		$query = $this->db->get($this->table);
		return $query;
	}

	public function update_profil($id, $data)
	{
		$this->db->where('id_user', $id);
		$this->db->update($this->table, $data);
		return $this->db->affected_rows();
	}

	public function add_profil($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->affected_rows();
	}

	public function view($id)
	{
		$this->db->where('id_user', $id);
		return $this->db->get($this->table, 1);
	}

}

/* End of file M_profil.php */
/* Location: ./application/models/M_profil.php */