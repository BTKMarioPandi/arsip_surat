<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_fa');
		$this->load->model('M_nav_menu');
		$this->template->if_admin();
		$this->template->set("title","welcome to adminlte");
        $this->_init();
	}

	public function index()
	{
		$this->template->adminlte('admin/menu');
	}

	private function _init()
    {
        $this->template->css('assets/themes/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');
        $this->template->js('assets/themes/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js');
        $this->template->js('assets/themes/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');
    }

    public function ajax_nav_list()
    {
        $list = $this->M_nav_menu->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $id = "";
        foreach ($list as $u) {
            $row = array();
            $id = $u->id_nav;
            $row[] = $u->desc_nav;
            $row[] = "<i class='fa ".$u->fa."'></i>";
            $row[] =    "<button class='btn btn-sm btn-primary btn-flat' data-toggle='tooltip' data-placement='top' title='edit data' onclick=\"edit('".$id."')\"><i class='fa fa-edit'></i></button> ";
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_nav_menu->count_all(),
                        "recordsFiltered" => $this->M_nav_menu->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function coba($y=null)
    {
    	$data = array();
    	$x = 10;
    	$page = ($y >= 1) ? ($x*$y) : 0;
    	$data['hasil'] = $this->M_fa->show($x,$page)->result();
    	$data['page'] = $page;
    	print_r($data);
    }

}

/* End of file Menu.php */
/* Location: ./application/controllers/admin/Menu.php */