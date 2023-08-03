<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Nilai_Kuesioner extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Kuesioner');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin_Login"));
		}
	}
	public function index()
	{
		// $data['nilai_kuesioner'] = $this->M_Kuesioner->tampil_data()->result();
		$data['nilai_kuesioner'] = $this->db->query("SELECT  nilai_kuesioner.*,mahasiswa.*,dosen.nama as nama_dosen,matakuliah.* FROM nilai_kuesioner LEFT JOIN mahasiswa ON mahasiswa.id=nilai_kuesioner.id_mahasiswa 
		LEFT JOIN matakuliah ON matakuliah.id=nilai_kuesioner.id_matakuliah LEFT JOIN dosen ON dosen.id=matakuliah.id_dosen")->result();
		$data['jm_pengisi'] = $this->db->query("SELECT * FROM nilai_kuesioner")->num_rows();
		$this->load->view('admin/kuesioner_nilai/index',$data);
	}
}
