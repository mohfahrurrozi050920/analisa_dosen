<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Home extends CI_Controller {
	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin_Login"));
		}
	}
	public function index()
	{
	
		$data['mahasiswa'] = $this->db->get('mahasiswa')->num_rows();
		$data['kuesioner'] = $this->db->get('nilai_kuesioner')->num_rows();
		$data['evaluasi'] =  $this->db->get('evaluasi')->num_rows();
		$data['dosen'] =  $this->db->get('dosen')->num_rows();
		$this->load->view('admin/home',$data);
	}
}
