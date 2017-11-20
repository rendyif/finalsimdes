<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kkdanktp extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kkdanktp_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $kkdanktp = $this->Kkdanktp_model->get_all();

        $data = array(
            'kkdanktp_data' => $kkdanktp
        );

        $this->load->view('kkdanktp_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kkdanktp_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'namak' => $row->namak,
		'jkktp' => $row->jkktp,
		'tglk' => $row->tglk,
		'nkktp' => $row->nkktp,
		'kettp' => $row->kettp,
	    );
            $this->load->view('kkdanktp_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kkdanktp'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kkdanktp/create_action'),
	    'id' => set_value('id'),
	    'namak' => set_value('namak'),
	    'jkktp' => set_value('jkktp'),
	    'tglk' => set_value('tglk'),
	    'nkktp' => set_value('nkktp'),
	    'kettp' => set_value('kettp'),
	);
        $this->load->view('kkdanktp_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'namak' => $this->input->post('namak',TRUE),
		'jkktp' => $this->input->post('jkktp',TRUE),
		'tglk' => $this->input->post('tglk',TRUE),
		'nkktp' => $this->input->post('nkktp',TRUE),
		'kettp' => $this->input->post('kettp',TRUE),
	    );

            $this->Kkdanktp_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kkdanktp'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kkdanktp_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kkdanktp/update_action'),
		'id' => set_value('id', $row->id),
		'namak' => set_value('namak', $row->namak),
		'jkktp' => set_value('jkktp', $row->jkktp),
		'tglk' => set_value('tglk', $row->tglk),
		'nkktp' => set_value('nkktp', $row->nkktp),
		'kettp' => set_value('kettp', $row->kettp),
	    );
            $this->load->view('kkdanktp_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kkdanktp'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'namak' => $this->input->post('namak',TRUE),
		'jkktp' => $this->input->post('jkktp',TRUE),
		'tglk' => $this->input->post('tglk',TRUE),
		'nkktp' => $this->input->post('nkktp',TRUE),
		'kettp' => $this->input->post('kettp',TRUE),
	    );

            $this->Kkdanktp_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kkdanktp'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kkdanktp_model->get_by_id($id);

        if ($row) {
            $this->Kkdanktp_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kkdanktp'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kkdanktp'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('namak', 'namak', 'trim|required');
	$this->form_validation->set_rules('jkktp', 'jkktp', 'trim|required');
	$this->form_validation->set_rules('tglk', 'tglk', 'trim|required');
	$this->form_validation->set_rules('nkktp', 'nkktp', 'trim|required');
	$this->form_validation->set_rules('kettp', 'kettp', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "kkdanktp.xls";
        $judul = "kkdanktp";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Namak");
	xlsWriteLabel($tablehead, $kolomhead++, "Jkktp");
	xlsWriteLabel($tablehead, $kolomhead++, "Tglk");
	xlsWriteLabel($tablehead, $kolomhead++, "Nkktp");
	xlsWriteLabel($tablehead, $kolomhead++, "Kettp");

	foreach ($this->Kkdanktp_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namak);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jkktp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tglk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nkktp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kettp);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=kkdanktp.doc");

        $data = array(
            'kkdanktp_data' => $this->Kkdanktp_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('kkdanktp_doc',$data);
    }

}

/* End of file Kkdanktp.php */
/* Location: ./application/controllers/Kkdanktp.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-11 07:17:05 */
/* http://harviacode.com */