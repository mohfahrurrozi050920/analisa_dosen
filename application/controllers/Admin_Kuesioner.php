<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Kuesioner extends CI_Controller {
	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin_Login"));
		}
	}
	public function index()
	{
		$querdy['kuesioner'] = $this->db->query("SELECT * FROM nilai_kuesioner LEFT JOIN mahasiswa ON mahasiswa.id=nilai_kuesioner.id_mahasiswa")->result();
		$this->load->view('admin/kuesioner/index',$querdy);
	}
}
