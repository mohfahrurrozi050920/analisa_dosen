<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_User extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_User');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin_Login"));
		}
	}
	public function index()
	{
		$data['user'] = $this->M_User->tampil_data()->result();

		$this->load->view('admin/user/index',$data);
	}
	public function tambah()
	{
		$this->load->view('admin/user/tambah');
	}
	function edit($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->M_User->edit_data($where, 'user')->result();
		$this->load->view('admin/user/edit', $data);
	}
	function tambah_aksi()
	{
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$data = array(
		
			'username' => $username,
			'Password' => $password,


		);
		$this->M_User->input_data($data, 'user');
		// $this->session->swal('success', 'Success!!!');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_User');
		// swal("Berhasil!", "Tambah Data user)", "success");

	}

	function update()
	{
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$data = array(
		
			'username' => $username,
			'Password' => $password,


		);
		$where = array(
			'id' => $id
		);
		$this->M_User->update_data($where, $data, 'user');

		// $this->session->swal('success', 'Success!!!');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_User');
		// swal("Berhasil!", "Tambah Data user)", "success");

	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_User->hapus_data($where, 'user');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_User');
	}
}
