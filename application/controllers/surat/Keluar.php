<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
        $this->template->authlogin();
		$this->template->set('title',"Surat Keluar");
        $this->_init();
        $this->load->model('M_keluar');
	}

	function _init()
    {
        $this->template->css('assets/themes/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');
        $this->template->css('assets/themes/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');
        $this->template->js('assets/themes/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js');
        $this->template->js('assets/themes/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');
        $this->template->js('assets/themes/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');
    }

	public function index()
	{
		$data = array();
		$this->template->adminlte('surat/keluar/view',$data,'surat/keluar/j_view');
	}

	public function ajax_list()
    {
        $list = $this->M_keluar->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $id = "";
        $yey = 1;
        foreach ($list as $u) {
            $row = array();
            $id = $u->id_sulur;//a.id_sulur, a.nomer_sulur, a.kode_sulur, a.kepada_sulur, a.perihal_sulur, DATE_FORMAT(a.tanggal_sulur,'%d-%m-%Y') as tanggal_sulur, a.pengolah_sulur, b.nama_bidang
            $row[] = $yey;
            $row[] = $u->nomer_sulur;
            $row[] = $u->kode_sulur ;
            $row[] = $u->kepada_sulur ;
            $row[] = $u->perihal_sulur ;
            $row[] = $u->tanggal_sulur ;
            $row[] = $u->nama_bidang ;
            $row[] =    "<button class='btn btn-xs btn-primary btn-flat' data-toggle='tooltip' data-placement='top' title='edit data' onclick=\"edit('".$id."')\"><i class='fa fa-edit'></i></button> <button class='btn btn-xs btn-success btn-flat' data-toggle='tooltip' data-placement='top' title='upload file' onclick=\"upload('".$id."')\"><i class='fa fa-upload'></i></button> ";
            $data[] = $row;
            $yey = $yey+1;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_keluar->count_all(),
                        "recordsFiltered" => $this->M_keluar->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    private function _bid()
    {
        # code...
        $this->load->model('M_bidang');
        $bid = $this->M_bidang->show()->result();
        return $bid;
    }

    public function add_ajax()
    {
        $data = array(
            'bidang' => $this->_bid()
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        // echo json_encode($data);
    }

    public function edit($id)
    {
        $query = $this->M_keluar->lihat(array('a.id_sulur'=>$id))->row();
        $data = array(
            'result' => $query,
            'bidang' => $this->_bid()
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        // echo json_encode($data);
    }

    public function cek()
    {
        # code...
        $a = 1;
        $q = $this->M_keluar->cek();
        if ($q->num_rows() != 0 ) {
            # code...
            $query = $q->row();
            $a = $query->nomer_sulur + 1;
        }
        $data = array(
            'nomer' => $a
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function add($value='')
    {
        # code...
        $this->form_validation->set_rules('no', 'Nomer Surat', 'trim|required|numeric');
        $this->form_validation->set_rules('kode', 'Kode Surat', 'required|min_length[1]|max_length[12]');
        $this->form_validation->set_rules('kepada', 'kepada', 'trim|required|min_length[1]|max_length[128]');
        $this->form_validation->set_rules('perihal', 'perihal', 'trim|required|min_length[1]|max_length[128]');
        $this->form_validation->set_rules('pengolah', 'pengolah', 'trim|required|min_length[1]|max_length[2]|numeric');
        $this->form_validation->set_rules('tgl', 'Tanggal Surat', 'trim|required|min_length[5]|max_length[10]');
        $no = $this->input->post('no');
        $kode = $this->input->post('kode');
        $kepada = $this->input->post('kepada');
        $perihal = $this->input->post('perihal');
        $pengolah = $this->input->post('pengolah');
        $tgl = date('Y-m-d', strtotime($this->input->post("tgl")));
        $result = array();
        if ($this->form_validation->run() == FALSE) {
            # code...
            $result['status'] = 'warning';
            $result['ket'] = validation_errors();
            $result['kode'] = 1;
        } else {
            # code...
            $data = array(
                 'nomer_sulur'=> $no,
                 'kode_sulur'=> $kode,
                 'kepada_sulur'=> $kepada,
                 'perihal_sulur'=> $perihal,
                 'tanggal_sulur' => $tgl,
                 'pengolah_sulur' =>$pengolah
                );
            $query = $this->M_keluar->insert($data);
            if ($query >= 1) {
                $result['status'] = 'success';
                $result['ket'] = 'Saving Data Success';
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($result));
    }

    public function update($value='')
    {
        # code...
        $this->form_validation->set_rules('id', 'ID', 'trim|required|numeric');
        $this->form_validation->set_rules('no', 'Nomer Surat', 'trim|required|numeric');
        $this->form_validation->set_rules('kode', 'Kode Surat', 'required|min_length[1]|max_length[12]');
        $this->form_validation->set_rules('kepada', 'kepada', 'trim|required|min_length[1]|max_length[128]');
        $this->form_validation->set_rules('perihal', 'perihal', 'trim|required|min_length[1]|max_length[128]');
        $this->form_validation->set_rules('pengolah', 'pengolah', 'trim|required|min_length[1]|max_length[2]|numeric');
        $this->form_validation->set_rules('tgl', 'Tanggal Surat', 'trim|required|min_length[5]|max_length[10]');
        $id = $this->input->post('id');
        $no = $this->input->post('no');
        $kode = $this->input->post('kode');
        $kepada = $this->input->post('kepada');
        $perihal = $this->input->post('perihal');
        $pengolah = $this->input->post('pengolah');
        $tgl = date('Y-m-d', strtotime($this->input->post("tgl")));
        $result = array();
        if ($this->form_validation->run() == FALSE) {
            # code...
            $result['status'] = 'warning';
            $result['ket'] = validation_errors();
            $result['kode'] = 1;
        } else {
            # code...
            $data = array(
                 'nomer_sulur'=> $no,
                 'kode_sulur'=> $kode,
                 'kepada_sulur'=> $kepada,
                 'perihal_sulur'=> $perihal,
                 'tanggal_sulur' => $tgl,
                 'pengolah_sulur' =>$pengolah
                );
            $query = $this->M_keluar->update($id, $data);
            if ($query >= 1) {
                $result['status'] = 'success';
                $result['ket'] = 'Saving Data Success';
            }
            else{
                $result['status'] = 'success';
                $result['ket'] = 'Tidak Ada Update';
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($result));
    }

    public function upload()
    {
        $th = date('Y');
        $dir = './assets/image/surat/keluar/'.$th;
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
        $idnya = date('dmYHis');
        $config['upload_path'] = $dir;
        $config['allowed_types'] = 'pdf|jpg|png';
        $config['max_size']  = '2048';
        $config['file_name']  = $idnya;
        $config['overwrite']  = TRUE;
        $id = $this->input->post("id");
        $desc = $this->input->post("desc");
        $this->load->library('upload', $config);
        $data = array();
        if ( ! $this->upload->do_upload('file')){
            $data['error'] = array('error' => $this->upload->display_errors());
            $data['stat'] = 0;
        }
        else{
            $upload_data = $this->upload->data();
            // $data['result'] = array('upload_data' => $this->upload->data());
            $log = array(
                'id' => $idnya,
                'id_sulur'=> $id,
                'path'=> $th.'/'.$upload_data['file_name'],
                'deskripsi' => $desc
                );
            $this->M_keluar->insert_scan($log);
            $data['stat'] = 1;
            $data['photo'] = base_url().'assets/image/surat/keluar/'.$th.'/'.$upload_data['file_name'];
            $data['id'] = $idnya;
            $data['nama'] = $desc;
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function lihat_scan($value)
    {
        # code...
        $data = $this->M_keluar->lihat_scan(array('id_sulur'=> $value))->result();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function hapus_scan($value)
    {
        # code...
        $q = $this->M_keluar->lihat_scan(array('id'=>$value))->row();
        $u = './assets/image/surat/keluar/'.$q->path;
        if (file_exists($u)) {
            # code...
            unlink($u);
        }
        $result = array();
        $query = $this->M_keluar->hapus_scan($value);
        if ($query >= 1) {
            $result['status'] = 'success';
            $result['ket'] = 'delete file '.$value.' Berhasil';
            $result['id'] = $value;
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($result));
    }

}

/* End of file Keluar.php */
/* Location: ./application/controllers/surat/Keluar.php */