<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard2 extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == 'dosen')
		{
			redirect('login');
		}
	}

	public function index(){
		$this->template->load('haldosen/template_dosen','haldosen/dashboard2');

	}
}