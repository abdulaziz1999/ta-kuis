<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Model_login extends CI_model{
   
    
     function getlogin($u,$p){
     	$pwd = md5($p);
     	$this->db->where('username',$u);
        $this->db->where('password',$pwd);
        $query = $this->db->get('admin');
        if ($query->num_rows()>0){
        	foreach ($query->result() as $login) {
        		$sesi = array(
        			'id_admin' => $login->id_admin,
        			'nama' => $login->nama,
        			'password' => $login->password,
        			'email' => $login->email,
        			'level' => $login->level, );
        		$this->session->set_userdata($sesi);
        	}
        }
        if($this->session->userdata('level') == 'admin')
            {
                redirect('dashboard');
            }
        if($this->session->userdata('level') == 'mahasantri')
            {
                redirect('dashboard1');
            }
        if($this->session->userdata('level') == 'dosen')
            {
                redirect('dashboard2');
            }
        
        else{
        	redirect('login');
        }
    }

    
 }
