<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Saran extends CI_Controller {
	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin_Login"));
		}
		$this->load->model('M_Saran');
	}
	public function index()
	{
		$data['saran'] = $this->M_Saran->tampil_data()->result();
		$this->load->view('admin/saran/index',$data);
	}
}
