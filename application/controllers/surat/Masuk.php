<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
        $this->template->authlogin();
		$this->template->set('title',"Surat Masuk");
        $this->_init();
        $this->load->model('M_masuk');
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
		$this->template->adminlte('surat/masuk/view',$data,'surat/masuk/j_view');
	}

	public function ajax_list()
    {
        $list = $this->M_masuk->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $id = "";
        $yey = 1;
        foreach ($list as $u) {
            $row = array();
            $id = $u->id_suma;
            $row[] = $yey;
            $row[] = $u->no_suma;
            $row[] = $u->pengirim_suma ;
            $row[] = $u->perihal_suma ;
            $row[] = $u->tgl_suma;
            $row[] = $u->diterima_suma ;
            $row[] = $u->disposisi ;
            $row[] = $u->nama_bidang ;
            $row[] =    "<button class='btn btn-xs btn-primary btn-flat' data-toggle='tooltip' data-placement='top' title='edit data' onclick=\"edit('".$id."')\"><i class='fa fa-edit'></i></button> <button class='btn btn-xs btn-success btn-flat' data-toggle='tooltip' data-placement='top' title='upload file' onclick=\"upload('".$id."')\"><i class='fa fa-upload'></i></button> ";
            $data[] = $row;
            $yey = $yey+1;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_masuk->count_all(),
                        "recordsFiltered" => $this->M_masuk->count_filtered(),
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
        $query = $this->M_masuk->lihat(array('a.id_suma'=>$id))->row();
        $data = array(
            'result' => $query,
            'bidang' => $this->_bid()
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        // echo json_encode($data);
    }

    public function add($value='')
    {
        # code...
        $this->form_validation->set_rules('no', 'Nomer Surat', 'trim|required|min_length[1]|max_length[128]');
        $this->form_validation->set_rules('pengirim', 'pengirim', 'trim|required|min_length[1]|max_length[256]');
        $this->form_validation->set_rules('perihal', 'perihal', 'trim|required|min_length[1]|max_length[256]');
        $this->form_validation->set_rules('pengolah', 'pengolah', 'trim|min_length[1]|max_length[2]|numeric');
        $this->form_validation->set_rules('tgl', 'Tanggal Surat', 'trim|required|min_length[5]|max_length[10]');
        $this->form_validation->set_rules('tgl_te', 'Tanggal Diterima', 'trim|required|min_length[5]|max_length[10]');
        $this->form_validation->set_rules('disposisi', 'disposisi', 'trim|min_length[1]|max_length[256]');
        $no = $this->input->post('no');
        $pengirim = $this->input->post('pengirim');
        $perihal = $this->input->post('perihal');
        $pengolah = $this->input->post('pengolah');
        $tgl = date('Y-m-d', strtotime($this->input->post("tgl")));
        $tgl_te = date('Y-m-d', strtotime($this->input->post("tgl_te")));
        $disposisi = $this->input->post('disposisi');
        $result = array();
        if ($this->form_validation->run() == FALSE) {
            # code...
            $result['status'] = 'warning';
            $result['ket'] = validation_errors();
            $result['kode'] = 1;
        } else {
            # code...
            $data = array(
                 'no_suma'=> $no,
                 'pengirim_suma'=> $pengirim,
                 'perihal_suma'=> $perihal,
                 'diterima_suma'=> $tgl_te,
                 'tgl_suma' => $tgl,
                 'bidang' =>$pengolah,
                 'disposisi' => $disposisi
                );
            $query = $this->M_masuk->insert($data);
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
        $this->form_validation->set_rules('id', 'id', 'trim|required|min_length[1]|max_length[12]|numeric');
        $this->form_validation->set_rules('no', 'Nomer Surat', 'trim|required|min_length[1]|max_length[128]');
        $this->form_validation->set_rules('pengirim', 'pengirim', 'trim|required|min_length[1]|max_length[256]');
        $this->form_validation->set_rules('perihal', 'perihal', 'trim|required|min_length[1]|max_length[256]');
        $this->form_validation->set_rules('pengolah', 'pengolah', 'trim|min_length[1]|max_length[2]|numeric');
        $this->form_validation->set_rules('tgl', 'Tanggal Surat', 'trim|required|min_length[5]|max_length[10]');
        $this->form_validation->set_rules('tgl_te', 'Tanggal Diterima', 'trim|required|min_length[5]|max_length[10]');
        $this->form_validation->set_rules('disposisi', 'disposisi', 'trim|min_length[1]|max_length[256]');
        $id = $this->input->post("id");
        $no = $this->input->post('no');
        $pengirim = $this->input->post('pengirim');
        $perihal = $this->input->post('perihal');
        $pengolah = $this->input->post('pengolah');
        $tgl = date('Y-m-d', strtotime($this->input->post("tgl")));
        $tgl_te = date('Y-m-d', strtotime($this->input->post("tgl_te")));
        $disposisi = $this->input->post('disposisi');
        $result = array();
        if ($this->form_validation->run() == FALSE) {
            # code...
            $result['status'] = 'warning';
            $result['ket'] = validation_errors();
            $result['kode'] = 1;
        } else {
            # code...
            $data = array(
                 'no_suma'=> $no,
                 'pengirim_suma'=> $pengirim,
                 'perihal_suma'=> $perihal,
                 'diterima_suma'=> $tgl_te,
                 'tgl_suma' => $tgl,
                 'bidang' =>$pengolah,
                 'disposisi' => $disposisi
                );
            $query = $this->M_masuk->update($id, $data);
            if ($query >= 1) {
                $result['status'] = 'success';
                $result['ket'] = 'Saving Data Success';
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($result));
    }

    public function lihat_scan($value)
    {
        # code...
        $data = $this->M_masuk->lihat_scan(array('id_suma'=> $value))->result();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function upload()
    {
        $th = date('Y');
        $dir = './assets/image/surat/masuk/'.$th;
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
                'id_suma'=> $id,
                'path'=> $th.'/'.$upload_data['file_name'],
                'deskripsi' => $desc
                );
            $this->M_masuk->insert_scan($log);
            $data['stat'] = 1;
            $data['photo'] = base_url().'assets/image/surat/masuk/'.$th.'/'.$upload_data['file_name'];
            $data['id'] = $idnya;
            $data['nama'] = $desc;
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function hapus_scan($value)
    {
        # code...
        $q = $this->M_masuk->lihat_scan(array('id'=>$value))->row();
        $u = './assets/image/surat/masuk/'.$q->path;
        if (file_exists($u)) {
            # code...
            unlink($u);
        }
        $result = array();
        $query = $this->M_masuk->hapus_scan($value);
        if ($query >= 1) {
            $result['status'] = 'success';
            $result['ket'] = 'delete file '.$value.' Berhasil';
            $result['id'] = $value;
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($result));
    }

}

/* End of file Masuk.php */
/* Location: ./application/controllers/surat/Masuk.php */