<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Matakuliah extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Dosen');
		$this->load->model('M_Matakuliah');
		$this->load->model('M_Mahasiswa');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin_Login"));
		}
	}
	public function index()
	{
		$data['matakuliah'] = $this->M_Matakuliah->tampil_data()->result();
		$this->load->view('admin/matakuliah/index',$data);
	}
	public function tambah()
	{
		$data['dosen'] = $this->M_Dosen->tampil_data()->result();
		$data['mahasiswa'] = $this->M_Mahasiswa->tampil_data()->result();


		$this->load->view('admin/matakuliah/tambah',$data);
	}
	function tambah_aksi()
	{
		$id_dosen = $this->input->post('id_dosen');
		$id_mahasiswa = $this->input->post('id_mahasiswa');
		$kode_matakuliah = $this->input->post('kode_matakuliah');
		$matakuliah = $this->input->post('matakuliah');
	
		
		$data = array(
			'id_dosen' => $id_dosen,
			'id_mahasiswa' => $id_mahasiswa,
			'kode_matakuliah' => $kode_matakuliah,
			'matakuliah' => $matakuliah,
		


		);
		$this->M_Matakuliah->input_data($data, 'matakuliah');
		// $this->session->swal('success', 'Success!!!');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_Matakuliah');
		// swal("Berhasil!", "Tambah Data Mahasiswa)", "success");

	}
	function edit($id)
	{
		$where = array('id' => $id);
		$data['dosen'] = $this->M_Dosen->tampil_data()->result();
		$data['mahasiswa'] = $this->M_Mahasiswa->tampil_data()->result();
		$data['matakuliah'] = $this->M_Matakuliah->edit_data($where, 'matakuliah')->result();
		$this->load->view('admin/matakuliah/edit', $data);
	}


	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_Matakuliah->hapus_data($where, 'matakuliah');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_Matakuliah');
	}

	function update()
	{
		$id = $this->input->post('id');
		$id_dosen = $this->input->post('id_dosen');
		$id_mahasiswa = $this->input->post('id_mahasiswa');
		$kode_matakuliah = $this->input->post('kode_matakuliah');
		$matakuliah = $this->input->post('matakuliah');
	
		
		$data = array(
			'id_dosen' => $id_dosen,
			'id_mahasiswa' => $id_mahasiswa,
			'kode_matakuliah' => $kode_matakuliah,
			'matakuliah' => $matakuliah,
		


		);
		$where = array(
			'id' => $id
		);
		$this->M_Matakuliah->update_data($where, $data, 'matakuliah');

		// $this->session->swal('success', 'Success!!!');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_Matakuliah');
		// swal("Berhasil!", "Tambah Data Mahasiswa)", "success");

	}
}
