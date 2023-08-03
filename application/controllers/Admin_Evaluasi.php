<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Evaluasi extends CI_Controller {
	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin_Login"));
		}
	}
	public function index()
	{
		$querdy['evaluasi'] = $this->db->query("SELECT * FROM evaluasi LEFT JOIN mahasiswa ON mahasiswa.id=evaluasi.id_mahasiswa")->result();
		$this->load->view('admin/evaluasi/index',$querdy);
	}
}
