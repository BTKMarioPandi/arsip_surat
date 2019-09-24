<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
        $this->template->if_admin();
		$this->template->set('title',"Pengaturan Bidang");
        $this->_init();
        $this->load->model('M_bidang');
	}

	function _init()
    {
        $this->template->css('assets/themes/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');
        $this->template->js('assets/themes/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js');
        $this->template->js('assets/themes/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');
    }

	public function index()
	{
		$data = array();
		$this->template->adminlte('setting/bidang/view',$data,'setting/bidang/j_view');
	}

	public function ajax_list()
    {
        $list = $this->M_bidang->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $id = "";
        foreach ($list as $u) {
            $row = array();
            $id = $u->id_bidang;
            $row[] = $id;
            $row[] = $u->nama_bidang;
            $row[] =    "<button class='btn btn-sm btn-primary btn-flat' data-toggle='tooltip' data-placement='top' title='edit data' onclick=\"edit('".$id."')\"><i class='fa fa-edit'></i></button> ";
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_bidang->count_all(),
                        "recordsFiltered" => $this->M_bidang->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function add()
    {
        // $this->input->post('inputIdPriv');
        $this->form_validation->set_rules('namabidang', 'Nama Bidang', 'required|max_length[128]');
        $desc = $this->input->post('namabidang');
        $result = array();
        if ($this->form_validation->run() == FALSE) {
            $result['status'] = 'warning';
            $result['ket'] = validation_errors();
        }else{
        	$data = array(
        		'nama_bidang' => $desc
        		);
        	$query = $this->M_bidang->insert($data);
            if ($query >= 1) {
                $result['status'] = 'success';
                $result['ket'] = 'Saving '.$query.' Data Success';
            }
            else{
                $result['status'] = 'warning';
                $result['ket'] = 'Saving '.$query.' Data Success';
            }
        } 
        $this->output->set_content_type('application/json')->set_output(json_encode($result));
    }

    public function edit($id)
    {
        $query = $this->M_bidang->show(array('id_bidang'=>$id))->row();
        $data = array(
            'result' => $query
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        // echo json_encode($data);
    }

    public function update($value='')
	{
		$this->form_validation->set_rules('id', 'ID', 'required|numeric|max_length[11]');
		$this->form_validation->set_rules('namabidang', 'Nama Bidang', 'required|alpha_numeric_spaces|max_length[32]');
        $nama = $this->input->post("namabidang");
        $id = $this->input->post('id');
        if ($this->form_validation->run() == FALSE) {
            $result['status'] = 'warning';
            $result['ket'] = validation_errors();
        }else{
            $data = array(
                'nama_bidang' => $nama
                );
            $query = $this->M_bidang->update($id,$data);
            $result = array();
            if ($query >= 1) {
                $result['status'] = 'success';
                $result['ket'] = 'Updating '.$query.' Data Success';
            }
            else{
                $result['status'] = 'warning';
                $result['ket'] = 'Updating '.$query.' Data Success';
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

}

/* End of file Bidang.php */
/* Location: ./application/controllers/setting/Bidang.php */