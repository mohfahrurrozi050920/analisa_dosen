<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Evaluasi extends CI_Controller {
	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin_Login"));
		}
		$this->load->model('M_Mahasiswa');
	}
	public function index()
	{
		$querdy['evaluasi'] = $this->db->query("SELECT * FROM evaluasi LEFT JOIN mahasiswa ON mahasiswa.id=evaluasi.id_mahasiswa")->result();
		$this->load->view('admin/evaluasi/index',$querdy);
	}
	public function tambah()
	{
		$querdy['evaluasi'] = $this->db->query("SELECT * FROM pernyataan_evaluasi ")->result();
		
		$this->load->view('admin/pernyataan/Evaluasi',$querdy);
	}
	function simpan()
	{
		$pertanyaan = $this->input->post('pertanyaan');
	
		$data = array(
			'pertanyaan' => $pertanyaan,
		


		);
		$this->M_Mahasiswa->input_data($data, 'pernyataan_evaluasi');
		// $this->session->swal('success', 'Success!!!');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_Evaluasi/tambah');
		// swal("Berhasil!", "Tambah Data Mahasiswa)", "success");

	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_Mahasiswa->hapus_data($where, 'pernyataan_evaluasi');
		$this->session->set_flashdata('success', 'Action Not Completed');

		redirect('Admin_Evaluasi/tambah');
	}
}
