<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class 	Form extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	
	function index(){
		$this->load->view('v_form');
	}

	function aksi(){
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');
	
		if($this->form_validation->run() != false){
			$this->load->view('welcome_message');
		}
		else{
			$this->load->view('v_form');
		}
	}
	
}
?>