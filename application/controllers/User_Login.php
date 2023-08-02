<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Login extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Login');

	}
	
	public function proses()
    {
		$nim = $this->input->post('nim');
		$password = $this->input->post('password');
		
		$where = array(
			'nim' => $nim,
			'password' => $password,
		);

		$cek = $this->M_Login->cek_login("mahasiswa", $where)->row_array();
		if ($cek > 0) {

			$data_session = array(
				'nim' => $nim,
				'status' => "login",
				'id' => $cek['id'],
				'nama' => $cek['nama'],
				'semester' => $cek['semester']

			);

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('success', 'Login Sukses');
			redirect(base_url("User_Kuesioner"));
		} else {
			$this->session->set_flashdata('error', 'NIM dan password salah !');
			redirect(base_url("/"));
		}
    }
	function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('logout', 'Berhail Keluar');
		redirect(base_url('/'));
	}
}
