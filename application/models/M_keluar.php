<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keluar extends CI_Model {

	var $table = 'tbl_surat_keluar';
	var $column_order = array(null, 'nomer_sulur','kode_sulur','kepada_sulur','perihal_sulur','tanggal_sulur','b.nama_bidang'); //set column field database for datatable orderable
	var $column_search = array( 'nomer_sulur','kode_sulur','kepada_sulur','perihal_sulur','tanggal_sulur','b.nama_bidang'); //set column field database for datatable searchable 
	var $order = array('id_sulur' => 'desc'); // default order 

	private function _get_datatables_query()
	{
		$this->db->select("a.id_sulur, a.nomer_sulur, a.kode_sulur, a.kepada_sulur, a.perihal_sulur, DATE_FORMAT(a.tanggal_sulur,'%d-%m-%Y') as tanggal_sulur, a.pengolah_sulur, b.nama_bidang");
		$this->db->from($this->table.' a');
		$this->db->join('tbl_bidang b', 'a.pengolah_sulur = b.id_bidang', 'left');
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

	public function lihat($value=array())
	{
		# code...
		$this->db->select("a.id_sulur, a.nomer_sulur, a.kode_sulur, a.kepada_sulur, a.perihal_sulur, DATE_FORMAT(a.tanggal_sulur,'%d-%m-%Y') as tanggal_sulur, a.pengolah_sulur, b.nama_bidang");
		$this->db->from($this->table.' a');
		$this->db->join('tbl_bidang b', 'a.pengolah_sulur = b.id_bidang', 'left');
		$this->db->where($value);
		$this->db->order_by('a.id_sulur', 'desc');
		return $this->db->get();
	}

	public function cek()
	{
		# code...
		$this->db->select('id_sulur, nomer_sulur');
		$this->db->where("date_format(tgl_entri_sulur,'%Y')", date('Y'));
		$this->db->order_by('id_sulur', 'desc');
		return $this->db->get($this->table, 1);
	}

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->affected_rows();
	}

	public function update($where, $data)
	{
		$this->db->where('id_sulur', $where);
		$this->db->update($this->table, $data);
		return $this->db->affected_rows();
	}

	public function insert_scan($data)
	{
		$this->db->insert('tbl_scan_sulur', $data);
		return $this->db->affected_rows();
	}

	public function lihat_scan($value = array())
	{
		# code...
		$this->db->where($value);
		return $this->db->get('tbl_scan_sulur');
	}

	public function hapus_scan($value)
	{
		# code...
		$this->db->where('id', $value);
		$this->db->delete('tbl_scan_sulur');
		return $this->db->affected_rows();
	}

	public function show_group($value=array())
	{
		# code...
		$this->db->select("a.id_sulur, a.kode_sulur, a.nomer_sulur, a.kepada_sulur, a.perihal_sulur, 
			DATE_FORMAT(a.tanggal_sulur,'%d-%m-%Y') as tgl,b.nama_bidang, GROUP_CONCAT(c.deskripsi SEPARATOR '|') deskripsi, 
			GROUP_CONCAT(c.path SEPARATOR '|') as path");
		$this->db->from('tbl_surat_keluar as a');
		$this->db->join('tbl_bidang as b', 'a.pengolah_sulur = b.id_bidang', 'left');
		$this->db->join('tbl_scan_sulur as c', 'a.id_sulur = c.id_sulur', 'left');
		$this->db->where($value);
		$this->db->group_by('a.id_sulur');
		$this->db->order_by('a.id_sulur', 'desc');
		return $this->db->get();
	}

}

/* End of file M_keluar.php */
/* Location: ./application/models/M_keluar.php */