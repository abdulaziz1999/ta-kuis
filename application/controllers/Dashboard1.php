<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard1 extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == 'mahasantri')
		{
			redirect('login');
		}
	}

	public function index(){
		
		$this->template->load('halsantri/template_santri','halsantri/dashboard1');

	}
}