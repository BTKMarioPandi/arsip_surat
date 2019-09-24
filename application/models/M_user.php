<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	
	var $table = 'tbl_user';
	var $column_order = array(null, 'a.username','a.privilages_user','a.create_at','b.desc_priv'); //set column field database for datatable orderable
	var $column_search = array('a.username','a.privilages_user','a.create_at','b.desc_priv'); //set column field database for datatable searchable 
	var $order = array('a.id_user' => 'asc'); // default order 

	public function lihat($Value)
	{
		$this->db->select('a.id_user,a.username,a.privilages_user, c.user_fullname,c.photo, a.flag');
		$this->db->join('tbl_online b', 'a.id_user = b.id_user', 'left');
		$this->db->join('tbl_user_desc c', 'a.id_user = c.id_user', 'left');
		$this->db->where($Value);
		return $this->db->get('tbl_user a');
	}

	public function insert_User($data)
	{
		$this->db->insert($this->table, $data);
		return true;
	}

	public function update_user($where, $data)
	{
		$this->db->where('id_user', $where);
		$this->db->update('tbl_user', $data);
		return $this->db->affected_rows();
	}
 
    private function _get_datatables_query()
	{
		$this->db->select('a.id_user, a.username, a.privilages_user, a.create_at,DATE_FORMAT(a.create_at,"%d/%m/%Y %H:%i:%s") as create_at, b.desc_priv');
		$this->db->from($this->table.' a');
		$this->db->join('tbl_privilages b', 'a.privilages_user = b.id_priv', 'left');
		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

}

/* End of file M_contoh.php */
/* Location: ./application/models/M_contoh.php */