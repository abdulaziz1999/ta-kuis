<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_jawaban extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_jawaban_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $tb_jawaban = $this->Tb_jawaban_model->get_all_query();

        $data = array(
            'tb_jawaban_data' => $tb_jawaban
        );

        $this->template->load('template','jawaban/tb_jawaban_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_jawaban_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_jawaban' => $row->id_jawaban,
		'id_mahasantri' => $row->id_mahasantri,
		'id_pertanyaan' => $row->id_pertanyaan,
		'jawaban' => $row->jawaban,
	    );
            $this->template->load('template','jawaban/tb_jawaban_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_jawaban'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_jawaban/create_action'),
	    'id_jawaban' => set_value('id_jawaban'),
	    'id_mahasantri' => set_value('id_mahasantri'),
	    'id_pertanyaan' => set_value('id_pertanyaan'),
	    'jawaban' => set_value('jawaban'),
	);
        $this->template->load('template','jawaban/tb_jawaban_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_mahasantri' => $this->input->post('id_mahasantri',TRUE),
		'id_pertanyaan' => $this->input->post('id_pertanyaan',TRUE),
		'jawaban' => $this->input->post('jawaban',TRUE),
	    );

            $this->Tb_jawaban_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_jawaban'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_jawaban_model->get_by_id($id);

        if ($row) {
            $data = array(
        'button' => 'Update',
        'action' => site_url('tb_jawaban/update_action'),
		'id_jawaban' => set_value('id_jawaban', $row->id_jawaban),
		'id_mahasantri' => set_value('id_mahasantri', $row->id_mahasantri),
		'id_pertanyaan' => set_value('id_pertanyaan', $row->id_pertanyaan),
		'jawaban' => set_value('jawaban', $row->jawaban),
	    );
            $this->template->load('template','jawaban/tb_jawaban_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_jawaban'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_jawaban', TRUE));
        } else {
            $data = array(
		'id_mahasantri' => $this->input->post('id_mahasantri',TRUE),
		'id_pertanyaan' => $this->input->post('id_pertanyaan',TRUE),
		'jawaban' => $this->input->post('jawaban',TRUE),
	    );

            $this->Tb_jawaban_model->update($this->input->post('id_jawaban', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_jawaban'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_jawaban_model->get_by_id($id);

        if ($row) {
            $this->Tb_jawaban_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_jawaban'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_jawaban'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_mahasantri', 'id mahasantri', 'trim|required');
	$this->form_validation->set_rules('id_pertanyaan', 'id pertanyaan', 'trim|required');
	$this->form_validation->set_rules('jawaban', 'jawaban', 'trim|required');

	$this->form_validation->set_rules('id_jawaban', 'id_jawaban', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tb_jawaban.php */
/* Location: ./application/controllers/Tb_jawaban.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-18 08:13:59 */
/* http://harviacode.com */