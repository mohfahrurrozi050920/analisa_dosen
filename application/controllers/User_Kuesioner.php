<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Kuesioner extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			$this->session->set_flashdata('auth-login', 'Action Not Completed');
			redirect(base_url("/"));
		}
		$this->load->model('M_Dosen');
		$this->load->model('M_Matakuliah');
		$this->load->model('M_User');
		$this->load->model('M_Pertanyaan');
	}
	public function index()
	{

		$data['pernyataan'] = $this->M_Pertanyaan->tampil_data()->result();
		$data['dosen'] = $this->M_Dosen->tampil_data()->result();
		$data['matakuliah'] = $this->M_Matakuliah->tampil_data()->result();
		$this->load->view('user/kuesioner', $data);
	}

	public function evaluasi()
	{
		$data['pernyataan'] = $this->M_Pertanyaan->tampil_data_evaluasi()->result();
		$this->load->view('user/evaluasi',$data);
	}
	public function saran()
	{
		$data['saran'] = $this->M_Pertanyaan->tampil_saran()->result();
		$this->load->view('user/saran',$data);
	}
	function proses()
	{
		$id_mahasiswa = $this->input->post('id_mahasiswa');
		$semester = $this->input->post('semester');
		$id_dosen = $this->input->post('id_dosen');
		$id_matakuliah = $this->input->post('id_matakuliah');
		$nilai = $this->input->post('nilai');
	
		$id_pernyataan = $this->input->post('id_pernyataan');

		foreach ($id_pernyataan as  $key=>$value) {
		$data = array(
			'id_mahasiswa' => $id_mahasiswa,
			'semester' => $semester,
			'id_dosen' => $id_dosen,
			'id_matakuliah' => $id_matakuliah,
			'nilai' => $nilai[$key],
			'id_pernyataan' => $value,

		);
		$this->M_User->input_data($data, 'nilai_kuesioner');
	
		}
		$this->session->set_flashdata('success-kuesioner', 'Action Not Completed');

		redirect('User_Kuesioner');
	}
	function proses_evaluasi()
	{
		$id_mahasiswa = $this->input->post('id_mahasiswa');
		$id_pernyataan = $this->input->post('id_pernyataan');
		$nilai = $this->input->post('nilai');
		
		foreach ($id_pernyataan as  $key=>$value) {
		$data = array(
			'id_mahasiswa' => $id_mahasiswa,
			'id_pernyataan' => $value,
			'nilai' => $nilai[$key],
		
		);
	
		$this->M_User->input_data($data, 'evaluasi');
	
		}
		$this->session->set_flashdata('success-kuesioner', 'Action Not Completed');

		redirect('User_Kuesioner/evaluasi');
	}

	function proses_saran()
	{
		$id_mahasiswa = $this->input->post('id_mahasiswa');
		$id_matakuliah = $this->input->post('id_matakuliah');
		$saran = $this->input->post('saran');
		
		
		$data = array(
			'id_mahasiswa' => $id_mahasiswa,
			'id_matakuliah' => $id_matakuliah,
			'saran' => $saran,
		
		);
	
		$this->M_User->input_data($data, 'saran');
	
		
		$this->session->set_flashdata('success-kuesioner', 'Action Not Completed');

		redirect('User_Kuesioner/saran');
	}

}
