<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Nilai_Evaluasi extends CI_Controller {
	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin_Login"));
		}
	}
	public function index()
	{
		$data['evaluasi'] = $this->db->query("SELECT  * FROM evaluasi LEFT JOIN mahasiswa ON mahasiswa.id=evaluasi.id_mahasiswa ")->result();
		$data['jm_pengisi'] = $this->db->query("SELECT * FROM evaluasi")->num_rows();
		$this->load->view('admin/evaluasi_nilai/index',$data);
	}
}
