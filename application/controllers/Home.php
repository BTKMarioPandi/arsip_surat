<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->template->authlogin();
	}

	public function index()
	{
		$data = array(
			'hi' => "katakan HI"
			);
		$this->template->set('title',"home bro");
		$this->template->adminlte('layouts/home', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */