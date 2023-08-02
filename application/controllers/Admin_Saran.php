<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Saran extends CI_Controller {
	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin_Login"));
		}
	}
	public function index()
	{
		$this->load->view('admin/saran/index');
	}
}
