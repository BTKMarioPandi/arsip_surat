<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
        $this->template->authlogin();
		$this->template->set('title',"Laporan");
        $this->_init();
        $this->load->model('M_laporan');
	}

	function _init()
    {
        $this->template->css('assets/themes/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');
        $this->template->js('assets/themes/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');
    	// $this->template->js('assets/themes/adminlte/bower_components/chart.js/Chart.js');
    }

	public function index()
	{
		$this->form_validation->set_rules('tgl', 'TGL', 'trim|required|min_length[2]|max_length[10]');
		$this->form_validation->set_rules('jenis', 'jenis', 'trim|required|min_length[1]|max_length[1]|numeric');
		$tgl = $this->input->post("tgl");
		$jenis = $this->input->post("jenis");
		$data = array(
			);
		if ($this->form_validation->run() == FALSE) {
			# code...
			$data['kode'] =1;
			echo validation_errors();
		} else {
			$e = explode('-', $tgl);
			$d=cal_days_in_month(CAL_GREGORIAN,$e[0], $e[1]);
			$start = 2;
			$q = "SELECT 1 AS Date UNION ALL ";
			while ($start <= $d) {
				# code...
				if ($start == $d) {
					$q .= "SELECT ".$start;
				}
				else{
					$q .= "SELECT ".$start." UNION ALL ";
				}
				$start++;
			}
			// print_r($q);
			$query = '';
			$ket = '';
			if ($jenis == 2) {
				$query = $this->M_laporan->surat_masuk($e[0], $e[1], $q)->result();
				$ket = 'Chart Surat Masuk Bulan '.$e[0].' Tahun '.$e[1];
			}

			if ($jenis == 1) {
				# code...
				$query = $this->M_laporan->surat_keluar($e[0], $e[1], $q)->result();
				$ket = 'Chart Surat Keluar Bulan '.$e[0].' Tahun '.$e[1];
			}
			// print_r($query);
			$data['hasil'] = $query;
			$data['b'] = $tgl;
			$data['jenis'] = $jenis;
			$data['kode'] = 2;
			$data['ket2'] = $ket;
		}
		$this->template->adminlte('surat/laporan/view',$data,'surat/laporan/j_view');
	}

	public function excel($jenis, $tgl)
	{
		# code...
		$this->load->library('PHPExcel');
		$data = array();
		$query = '';
		$e = explode('-', $tgl);
		if ($jenis == 2) {
			$ket = 'Laporan Surat Masuk Bulan '.$e[0].' Tahun '.$e[1];
			$this->load->model('M_masuk');
			$query = $this->M_masuk->lihat(array("DATE_FORMAT(a.tgl_suma,'%m-%Y')"=>$tgl))->result();
			$data['hasil'] = $query;
			$data['ket'] = $ket;
			$this->load->view('surat/laporan/excel_masuk', $data);
		}

		if ($jenis == 1) {
			# code...
			$ket = 'Laporan Surat Keluar Bulan '.$e[0].' Tahun '.$e[1];
			$this->load->model('M_keluar');
			$query = $this->M_keluar->lihat(array("DATE_FORMAT(a.tanggal_sulur,'%m-%Y')"=>$tgl))->result();
			$data['hasil'] = $query;
			$data['ket'] = $ket;
			$this->load->view('surat/laporan/excel_keluar', $data);
		}
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/surat/Laporan.php */