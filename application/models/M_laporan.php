<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

	public function surat_masuk($b, $t, $q)
	{
		# code...
		return $this->db->query("
			SELECT MonthDate.Date, COUNT(id_suma) AS Total
			FROM ( ".$q.") AS MonthDate
			LEFT JOIN tbl_suma AS T1
			ON MonthDate.Date = DAY(T1.tgl_suma)
			AND MONTH(T1.tgl_suma) = ".$b." AND YEAR(T1.tgl_suma) = ".$t."
			GROUP BY MonthDate.Date
			");
	}

	public function surat_keluar($b, $t, $q)
	{
		# code...
		return $this->db->query("
			SELECT MonthDate.Date, COUNT(id_sulur) AS Total
			FROM ( ".$q.") AS MonthDate
			LEFT JOIN tbl_surat_keluar AS T1
			ON MonthDate.Date = DAY(T1.tanggal_sulur)
			AND MONTH(T1.tanggal_sulur) = ".$b." AND YEAR(T1.tanggal_sulur) = ".$t."
			GROUP BY MonthDate.Date
			");
	}

}

/* End of file M_laporan.php */
/* Location: ./application/models/M_laporan.php */