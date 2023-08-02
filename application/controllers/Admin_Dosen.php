<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Dosen extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Dosen');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin_Login"));
		}
	}
	public function index()
	{
		$data['dosen'] = $this->M_Dosen->tampil_data()->result();

		$this->load->view('admin/dosen/index', $data);
	}
	public function tambah()
	{
		$this->load->view('admin/dosen/tambah');
	}
	function edit($id)
	{
		$where = array('id' => $id);
		$data['dosen'] = $this->M_Dosen->edit_data($where, 'dosen')->result();
		$this->load->view('admin/dosen/edit', $data);
	}
	function tambah_aksi()
	{
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$alamat = $this->input->post('alamat');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'jk' => $jk,
			'alamat' => $alamat,
			'username' => $username,
			'password' => $password,


		);
		$this->M_Dosen->input_data($data, 'dosen');
		// $this->session->swal('success', 'Success!!!');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_Dosen');
		// swal("Berhasil!", "Tambah Data dosen)", "success");

	}

	function update()
	{
		$id = $this->input->post('id');
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$alamat = $this->input->post('alamat');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'jk' => $jk,
			'alamat' => $alamat,
			'username' => $username,
			'password' => $password,


		);
		$where = array(
			'id' => $id
		);
		$this->M_Dosen->update_data($where, $data, 'dosen');

		// $this->session->swal('success', 'Success!!!');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_Dosen');
		// swal("Berhasil!", "Tambah Data dosen)", "success");

	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_Dosen->hapus_data($where, 'dosen');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_Dosen');
	}
}
