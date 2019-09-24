<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Priv extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_privilages');
		$this->template->if_admin();
		$this->template->set("title","welcome to adminlte");
        $this->_init();
	}

	public function index()
	{
        $data = array();
		$this->template->adminlte('admin/v_privilages',$data, 'admin/v_privilages_js');
	}

	function _init()
    {
        $this->template->css('assets/themes/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');
        $this->template->js('assets/themes/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js');
        $this->template->js('assets/themes/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');
    }

    public function ajax_list()
    {
        $list = $this->M_privilages->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $id = "";
        foreach ($list as $u) {
            $row = array();
            $id = $u->id_priv;
            $row[] = $id;
            $row[] = $u->desc_priv;
            $row[] = $u->desc_priv_more;
            $row[] =    "<button class='btn btn-sm btn-primary btn-flat' data-toggle='tooltip' data-placement='top' title='edit data' onclick=\"edit('".$id."')\"><i class='fa fa-edit'></i></button> ";
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_privilages->count_all(),
                        "recordsFiltered" => $this->M_privilages->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($id)
    {
        $query = $this->M_privilages->show(array('id_priv'=>$id))->row();
        $data = array(
            'result' => $query
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        // echo json_encode($data);
    }

    public function add_priv()
    {
        // $this->input->post('inputIdPriv');
        $this->form_validation->set_rules('inputDescPriv', 'Desc Privilages', 'required|max_length[32]');
        $desc = $this->input->post('inputDescPriv');
        $this->form_validation->set_rules('inputDescPrivMore', 'Desc Privilages More', 'required|max_length[64]');
        $desc_more = $this->input->post('inputDescPrivMore');
        $result = array();
        if ($this->form_validation->run() == FALSE) {
            $result['status'] = 'warning';
            $result['ket'] = validation_errors();
        }else{
            if (!empty($desc) or !empty($desc_more) or isset($desc) or isset($desc_more) or $desc == '' or $desc_more == '' ) {
                $data = array(
                'desc_priv' => $desc,
                'desc_priv_more' => $desc_more
                );
                $query = $this->M_privilages->insert_priv($data);
                if ($query >= 1) {
                    $result['status'] = 'success';
                    $result['ket'] = "saving success";
                }
                else{
                    $result['status'] = 'warning';
                    $result['ket'] = "saving error";
                }
            }
            else{
                $result['status'] = 'warning';
                $result['ket'] = "Data Not Set";
            } 
        } 
        $this->output->set_content_type('application/json')->set_output(json_encode($result));
    }

    public function update()
    {

        $this->form_validation->set_rules('inputIdPriv', 'ID Desc Privilages', 'required|numeric');
        $id = $this->input->post('inputIdPriv');
        $this->form_validation->set_rules('inputDescPriv', 'Desc Privilages', 'required|max_length[32]');
        $desc = $this->input->post('inputDescPriv');
        $this->form_validation->set_rules('inputDescPrivMore', 'Desc Privilages More', 'required|max_length[64]');
        $desc_more = $this->input->post('inputDescPrivMore');
        if ($this->form_validation->run() == FALSE) {
            $result['status'] = 'warning';
            $result['ket'] = validation_errors();
        }else{
            $data = array(
                'desc_priv' => $desc,
                'desc_priv_more' => $desc_more
                );
            $query = $this->M_privilages->update_priv($id , $data);
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

/* End of file Priv.php */
/* Location: ./application/controllers/admin/Priv.php */