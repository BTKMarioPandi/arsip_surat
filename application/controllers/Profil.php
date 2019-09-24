<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_profil');
		$this->load->model('M_user');
		$this->template->authlogin();
		$this->template->set("title","welcome to adminlte");
	}

	public function index()
	{
		$this->template->adminlte('admin/profil',array(), 'admin/profil_js');
	}

	public function setting()
	{
		$this->form_validation->set_rules('inputFullName', 'Fullname', 'required|alpha_numeric_spaces');
		$this->form_validation->set_rules('inputEmail', 'Email', 'valid_email');
		$this->form_validation->set_rules('inputAddress', 'Address', 'alpha_numeric_spaces');
		$fullname = $this->input->post('inputFullName');
		$email = $this->input->post('inputEmail');
		$address = $this->input->post('inputAddress');
		$data = array(
			// 'id_user' => $this->session->userdata('id')
			);
		$log = array();
		if ($this->form_validation->run() == FALSE) {
			$log['status'] = 'warning';
			$log['ket'] = validation_errors();
		}
		else{
			if (isset($fullname) or !empty($fullname) or $fullname != '') {
				$data['user_fullname'] = $fullname;
			}
			if (isset($email) or !empty($email) or $email != '') {
				$data['user_email'] = $email;
			}
			if (isset($address)  or !empty($address) or $address != '') {
				$data['user_address'] = $address;
			}
			$log = array(
				'fullname' => $fullname
				);
			$query = '';
			$cek = $this->M_profil->cek(array('id_user'=>$this->session->userdata('id')))->num_rows();
			if ($cek == 1) {
				$query = $this->M_profil->update_profil($this->session->userdata('id'),$data);
			}
			else {
				$data['id_user'] = $this->session->userdata('id');
				$query = $this->M_profil->add_profil($data);
			}
			if ($query >= 1) {
				$log['status'] = 'success';
				$log['ket'] = 'Update Success';
			}
			else{
				$log['status'] = 'warning';
				$log['ket'] = 'Null Data Update '.$cek;
			}
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($log));
	}

	public function view()
	{
		$data = array(
			'result' => $this->_view()
			);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	private function _view()
	{
		$query = $this->M_profil->view($this->session->userdata('id'))->row();
		return $query;
	}

	public function change_password()
	{
		$old = $this->input->post('inputOldPassword');
		$this->form_validation->set_rules('inputOldPassword', 'Old Password', 'required');
		$this->form_validation->set_rules('inputNewPassword', 'New Password', 'required');
		$old = md5($old);
		$new = $this->input->post('inputNewPassword');
		$new = md5($new);
		$log = array();
		if ($this->form_validation->run() == FALSE) {
			$log['status'] = 'warning';
			$log['ket'] = validation_errors();
		} else {
			$where = array(
				'password' => $old,
				'b.session' => $this->session->userdata('session')
				);
			$data = array(
				'password' => $new
				);
			$cek = $this->M_user->lihat($where)->num_rows();
			if ($cek < 1) {
				$log['ket'] ="Old Password Not Same";
				$log['status'] = 'warning';
			}
			else{
				$this->M_user->update_user($this->session->userdata('id'), $data);
				$log['ket'] ="Update Password Success";
				$log['status'] = 'success';
			}
		}		
		$this->output->set_content_type('application/json')->set_output(json_encode($log));
	}

	public function change_photo()
	{
		$config['upload_path'] = './assets/image/profil';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '2000';
		$config['file_name']  = $this->session->userdata('id').date('d_m_Y_H_i_s');
		$config['overwrite']  = TRUE;
		
		$this->load->library('upload', $config);
		$data = array();
		$cek = $this->M_profil->cek(array('id_user'=>$this->session->userdata('id')));
		if ($cek->num_rows() == 1) {
			$cek_row = $cek->row();
			$remove = './assets/image/profil/'.$cek_row->photo;
			// $data['log'] = $cek_row;
			if (file_exists($remove)) {
				unlink($remove);
			}
			// unlink($remove);
			if ( ! $this->upload->do_upload('profil_photo')){
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['stat'] = 0;
			}
			else{
				$upload_data = $this->upload->data();
				// $data['result'] = array('upload_data' => $this->upload->data());
				$data['stat'] = 1;
				$update = array(
					'photo' => $upload_data['file_name']
					);
				$data['result'] = base_url().'assets/image/profil/'.$upload_data['file_name'];
				$this->M_profil->update_profil($this->session->userdata('id'), $update);
			}
		}
		else{
			$data['error'] = array('error' => 'You Must Set Profil First !');
			$data['stat'] = 0;
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
}

/* End of file Profil.php */
/* Location: ./application/controllers/admin/Profil.php */