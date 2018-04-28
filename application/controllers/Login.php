<?php
Class Login extends CI_Controller{
    function __construct() {
         parent::__construct();
    }
    
     function index(){
        $id_admin = $this->session->userdata('id_admin');
     	if(!empty($id_admin))
            {
                redirect('dashboard');
            }
        else{
            $this->load->view('login');
        }
       
    }

    function getlogin(){
    	$u = $this->input->post('username');
    	$p = $this->input->post('password');
    	$this->load->model('model_login','mlogin');
    	$this->mlogin->getlogin($u,$p);
    }
}









// Class Example extends CI_Controller{
    
//     function __construct() {
//         parent::__construct();
//     }
    
//     function index(){
//         //$this->load->view('template');
//         $this->template->load('template','table');
//     }
