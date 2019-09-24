<?php
/**
* 
*/
class Template
{
	private $CI;
	private $_js = array();
	private $_css = array();
	private $_meta = array();
	private $_canonical = array();
	private $_js_view = 'layouts/js_view';
	var $template_data = array();
	private $sidebar_data = array();
	
	public function __construct()
	{
		$this->CI =& get_instance(); 
	}

	public function set($content_area, $value)
	{
		$this->template_data[$content_area] = $value;
	}

	public function section($name='', $view = '',$view_data = array())
	{
		$this->set($name, $this->CI->load->view($view, $view_data, TRUE));
	}

	public function css()
	{
		$css_files = func_get_args();
		foreach ($css_files as $value) {
			$this->_css[] = $value;
		}
		return;
	}

	public function js()
	{
		$js_files = func_get_args();
		foreach ($js_files as $value) {
			$this->_js[] = $value;
		}
		return;
	}

	public function set_meta($name, $content){
		$this->_meta[$name] = $content;
		return true;
	}

	public function set_canonical($url)
    {
       $this->_canonical = $url;
    }

	public function load($template = '', $name='', $view = '',$view_data = array(),$return = FALSE)
	{
		$this->template_data['js'] = $this->_js;
		$this->template_data['css'] = $this->_css;
		$this->template_data['meta'] = $this->_meta;
		$this->set($name, $this->CI->load->view($view, $view_data, TRUE));
		$this->CI->load->view('layouts/'.$template , $this->template_data); 
	}

	// take your custom template setting in here

	public function adminlte($content, $data= array(),$js_view=NULL, $return= FALSE)
	{
		if ($js_view != NULL) {
			$this->_js_view = $js_view;
		}
		$this->section('sidebar','layouts/sidebar', $this->sidebar_data);
		// $this->section('control_sidebar','layouts/control_sidebar');
		$this->section('js_view',$this->_js_view);
		$this->load('default','content',$content, $data);
	}

	private function auth($where)
	{
		$CI =& get_instance();
		$CI->load->model('M_user');
		$CI->load->model('M_online');
		$CI->load->model('M_nav_menu');
		$query = $CI->M_user->lihat($where);
		$cek = $query->row();
		if($query->num_rows() != 1){
			redirect(base_url("login"));
		}
		$data= array(
			'id_user' => $cek->id_user,
			'session' => $CI->session->userdata('session'),
			'date_time' => date('Y-m-d H:i:s')
			);
		$CI->M_online->online($data);
		// $menu = $CI->M_nav_menu->show()->result();
		// $this->sidebar_data['menu'] = $menu;
		$this->template_data['name'] = $CI->session->userdata('username');
		$this->sidebar_data['priv'] = $cek->privilages_user;
		$this->template_data['fullname'] = $cek->user_fullname;
		$this->sidebar_data['fullname'] = $cek->user_fullname;
		$this->template_data['photo'] = base_url().'assets/image/profil/'.$cek->photo;
		$this->sidebar_data['photo'] = base_url().'assets/image/profil/'.$cek->photo;
		return;
	}

	public function authlogin()
	{
		$CI =& get_instance();
		$where = array(
			'b.session' => $CI->session->userdata('session'),
			'a.flag'=> 0
			);
		$this->auth($where);
	}

	public function if_admin()
	{
		$CI =& get_instance();
		$where = array(
			'b.session' => $CI->session->userdata('session'),
			'a.privilages_user' => 1,
			'a.flag'=> 0
			);
		$this->auth($where);
	}
}
?>