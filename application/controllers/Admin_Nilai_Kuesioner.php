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
		$data['nilai_kuesioner'] = $this->M_Kuesioner->tampil_data()->result();
		$this->load->view('admin/kuesioner_nilai/index',$data);
	}
}
