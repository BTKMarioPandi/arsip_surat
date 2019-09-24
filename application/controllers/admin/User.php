<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->library('template');
        $this->template->if_admin();
		$this->template->set('title',"welcome to adminlte");
        $this->_init();
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
		$this->template->adminlte('user/user_view',$data,'user/user_view_js');
	}

    public function add_user()
    {
        $this->load->library('Uuid');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[1]|max_length[12]');
        $username = $this->input->post('username');
        $this->form_validation->set_rules('password', 'Password', 'required',
                array('required' => 'You must provide a %s.')
        );
        $password = $this->input->post('password');
        $password = md5($password);
        $priv = $this->input->post('priv');
        $this->form_validation->set_rules('priv', 'Privilages', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            echo json_encode(array('status'=> 0,'ket'=> validation_errors()));
        }else{
            $data = array(
                'id_user' => $this->uuid->v4(),
                'username' => $username,
                'password' => $password,
                'privilages_user' => $priv,
                'create_at' => date('Y-m-d H:i:s')
                );
            $query = $this->M_user->insert_user($data);
            echo json_encode(array('status'=> 1));
        }
    }

	public function ajax_list()
    {
        $list = $this->M_user->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $id = "";
        foreach ($list as $u) {
            $no++;
            $row = array();
            $id = "$u->id_user";
            $row[] = $no;
            $row[] = $u->username;
            $row[] = $u->desc_priv;
            $row[] = $u->create_at;
            $row[] =    "<button class='btn btn-sm btn-primary btn-flat' data-toggle='tooltip' data-placement='top' title='edit data' onclick=\"edit('".$u->id_user."')\"><i class='fa fa-edit'></i></button> ".
                        "<button class='btn btn-sm btn-danger btn-flat' data-toggle='tooltip' data-placement='top' title='reset password' onclick=\"reset('".$u->id_user."','".$u->username."')\"><i class='fa fa-key'></i></button>";
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_user->count_all(),
                        "recordsFiltered" => $this->M_user->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_privilages()
    {
        $data = array(
            'data' => $this->_privilages()
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        // echo json_encode($data);
    }

    private function _privilages()
    {
        $this->load->model('M_privilages');
        $result = $this->M_privilages->show()->result();
        return $result;
    }

    public function ajax_edit($id)
    {
        $query = $this->M_user->lihat(array('a.id_user'=>$id))->row();
        $data = array(
            'result' => $query,
            'data' => $this->_privilages()
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        // echo json_encode($data);
    }

    public function update()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $username = $this->input->post('username');
        $this->form_validation->set_rules('priv', 'Privilages', 'required|numeric');
        $priv = $this->input->post('priv');
        $this->form_validation->set_rules('id_user', 'ID User', 'required|max_length[36]');
        $id_user = $this->input->post('id_user');
        if ($this->form_validation->run() == FALSE) {
            echo json_encode(array('status'=> 0,'ket'=> validation_errors()));
        }else{
            $data = array(
                'username' => $username,
                'privilages_user' => $priv
                );
            $query = $this->M_user->update_user($id_user, $data);
            $this->output->set_content_type('application/json')->set_output(json_encode(array('status'=>'ok')));
        }
    }

    public function reset()
    {
        $new = $this->input->post('new');
        $retype = $this->input->post('retype');
        $id_user = $this->input->post('id_user');
        $data = array();
        if ($new != $retype) {
            $data['key'] = 0;
            $data['status'] = "password not same";
        }
        elseif (empty($new) || !isset($new) || empty($retype) || !isset($new) ) {
            $data['key'] = 0;
            $data['status'] = "password cannot null";
        }
        else{
            $update = array(
                'password' => md5($new)
                );
            $query = $this->M_user->update_user($id_user, $update);
            $key['key'] = 1;
            $data['status'] = "ok";
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    function coba()
    {
        $u = '\'u\'';
        echo $u;
    }

}

/* End of file User.php */
/* Location: ./application/controllers/backend/User.php */