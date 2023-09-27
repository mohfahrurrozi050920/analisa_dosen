<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Kuesioner extends CI_Controller {
	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin_Login"));
		}
		$this->load->model('M_Mahasiswa');
	}
	public function index()
	{
		$querdy['kuesioner'] = $this->db->query("SELECT * FROM nilai_kuesioner LEFT JOIN mahasiswa ON mahasiswa.id=nilai_kuesioner.id_mahasiswa")->result();
		$this->load->view('admin/kuesioner/index',$querdy);
	}
	public function tambah()
	{
		$querdy['kuesioner'] = $this->db->query("SELECT * FROM pertanyaan_kuesioner ")->result();
		
		$this->load->view('admin/pernyataan/Kuesioner',$querdy);
	}
	function simpan()
	{
		$pertanyaan = $this->input->post('pertanyaan');
	
		$data = array(
			'pertanyaan' => $pertanyaan,
		


		);
		$this->M_Mahasiswa->input_data($data, 'pertanyaan_kuesioner');
		// $this->session->swal('success', 'Success!!!');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_Kuesioner/tambah');
		// swal("Berhasil!", "Tambah Data Mahasiswa)", "success");

	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_Mahasiswa->hapus_data($where, 'pertanyaan_kuesioner');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_Kuesioner/tambah');
	}
}
