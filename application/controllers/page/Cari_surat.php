<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari_surat extends CI_Controller {

	public function index()
	{
		$this->load->model('M_bidang');
		$data = array();
		$data['kode'] = 1;
		$data['error'] = 1;
		$data['bidang'] = $this->M_bidang->show()->result();
		$this->form_validation->set_rules('jenis', 'jenis surat', 'trim|required|min_length[1]|max_length[2]|numeric');
		$this->form_validation->set_rules('dasar', 'dasar', 'trim|required|min_length[1]|max_length[2]|numeric');
		$jenis = $this->input->post("jenis");
		$dasar = $this->input->post("dasar");
		if ($this->form_validation->run() == TRUE) {
			# code...
			if ($jenis == 1) {
				# code...
				$this->load->model('M_keluar');
				if ($dasar == 1) {
					$this->form_validation->set_rules('no', 'no Surat', 'trim|min_length[1]|max_length[32]|required');
					$no = $this->input->post("no");
					if ($this->form_validation->run() == FALSE) {
						# code...
						$data['error'] = validation_errors();
					} else {
						# code...
						$data['kode'] =2;
						// $data['hasil'] = $this->M_
					}
				}
				if ($dasar == 2) {
					$this->form_validation->set_rules('bidang', 'bidang', 'trim|min_length[1]|max_length[2]|numeric|required');
					$bidang = $this->input->post("bidang");
					if ($this->form_validation->run() == FALSE) {
						# code...
						$data['error'] = validation_errors();
					} else {
						# code...
						$data['kode'] =2;
					}
				}
				if ($dasar == 3) {
					$this->load->model('M_keluar');
					$this->form_validation->set_rules('tgl', 'tgl', 'trim|min_length[10]|max_length[10]|required');
					$tgl = $this->input->post("tgl");
					if ($this->form_validation->run() == FALSE) {
						# code...
						$data['error'] = validation_errors();
					} else {
						# code...
						$data['kode'] =2;
						$data['j'] = 1;
						$data['hasil'] = $this->M_keluar->show_group(array("DATE_FORMAT(a.tanggal_sulur,'%d-%m-%Y')" => $tgl))->result();
						$data['surat'] = "Surat Keluar";
						// $data['hasil'] = array();
					}
				}
			}
			if ($jenis == 2) {
				# code...
				# code...
				$this->load->model('M_masuk');
				if ($dasar == 1) {
					$this->form_validation->set_rules('no', 'no Surat', 'trim|min_length[1]|max_length[32]|required');
					$no = $this->input->post("no");
					if ($this->form_validation->run() == FALSE) {
						# code...
						$data['error'] = validation_errors();
					} else {
						# code...
						$data['kode'] =2;
					}
				}
				if ($dasar == 2) {
					$this->form_validation->set_rules('bidang', 'bidang', 'trim|min_length[1]|max_length[2]|numeric|required');
					$bidang = $this->input->post("bidang");
					if ($this->form_validation->run() == FALSE) {
						# code...
						$data['error'] = validation_errors();
					} else {
						# code...
						$data['kode'] =2;
					}
				}
				if ($dasar == 3) {
					$this->form_validation->set_rules('tgl', 'tgl', 'trim|min_length[10]|max_length[10]|required');
					$tgl = $this->input->post("tgl");
					if ($this->form_validation->run() == FALSE) {
						# code...show_group()->
						$data['error'] = validation_errors();
					} else {
						# code...
						$data['surat'] = "Surat Masuk";
						$data['j'] = 2;
						$data['hasil'] = $this->M_masuk->show_group(array("DATE_FORMAT(a.tgl_suma,'%d-%m-%Y')"=> $tgl))->result();
						$data['kode'] =2;
					}
				}
			}
		} else {
			# code...
			$data['error'] = validation_errors();
		}
		$this->load->view('surat/home', $data);
	}

}

/* End of file Cari_surat.php */
/* Location: ./application/controllers/page/Cari_surat.php */