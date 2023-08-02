<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Login extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Login');

	}
	public function index()
	{
		$this->load->view('admin/login');
	}

	public function proses()
    {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$where = array(
			'username' => $username,
			'password' => $password,
		);

		$cek = $this->M_Login->cek_login("user", $where)->row_array();
		if ($cek > 0) {

			$data_session = array(
				'username' => $username,
				'status' => "login",
				'id' => $cek['id']

			);

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('success', 'Login Sukses');
			redirect(base_url("Admin_Home"));
		} else {
			$this->session->set_flashdata('error', 'Username dan password salah !');
			redirect(base_url("Admin_Login"));
		}
    }
	function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('logout', 'Berhail Keluar');
		redirect(base_url('/'));
	}
}
