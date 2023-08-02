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
		$this->load->view('admin/evaluasi_nilai/index');
	}
}
