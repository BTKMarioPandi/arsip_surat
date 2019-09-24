<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fa extends CI_Model {
	var $table = 'tbl_fa';

	public function show($x,$y)
	{
		$this->db->select('font');
		$query = $this->db->get($this->table,$x,$y);
		$this->db->order_by('id_font', 'asc');
		return $query;
	}

}

/* End of file M_fa.php */
/* Location: ./application/models/M_fa.php */