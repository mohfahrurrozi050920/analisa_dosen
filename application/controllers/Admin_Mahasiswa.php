<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Mahasiswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Mahasiswa');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin_Login"));
		}
	}
	public function index()
	{
		$data['mahasiswa'] = $this->M_Mahasiswa->tampil_data()->result();

		$this->load->view('admin/mahasiswa/index', $data);
	}
	public function tambah()
	{
		$this->load->view('admin/mahasiswa/tambah');
	}
	function edit($id)
	{
		$where = array('id' => $id);
		$data['mahasiswa'] = $this->M_Mahasiswa->edit_data($where, 'mahasiswa')->result();
		$this->load->view('admin/mahasiswa/edit', $data);
	}
	function tambah_aksi()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$semester = $this->input->post('semester');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$alamat = $this->input->post('alamat');
		$password = $this->input->post('password');
		
		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'jk' => $jk,
			'semester' => $semester,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'alamat' => $alamat,
			'password' => $password,


		);
		$this->M_Mahasiswa->input_data($data, 'mahasiswa');
		// $this->session->swal('success', 'Success!!!');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_Mahasiswa');
		// swal("Berhasil!", "Tambah Data Mahasiswa)", "success");

	}

	function update()
	{
		$id = $this->input->post('id');
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$semester = $this->input->post('semester');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$alamat = $this->input->post('alamat');
		$password = $this->input->post('password');
	
		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'jk' => $jk,
			'semester' => $semester,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'alamat' => $alamat,
			'password' => $password,


		);
		$where = array(
			'id' => $id
		);
		$this->M_Mahasiswa->update_data($where, $data, 'mahasiswa');

		// $this->session->swal('success', 'Success!!!');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_Mahasiswa');
		// swal("Berhasil!", "Tambah Data Mahasiswa)", "success");

	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_Mahasiswa->hapus_data($where, 'mahasiswa');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_Mahasiswa');
	}
}
