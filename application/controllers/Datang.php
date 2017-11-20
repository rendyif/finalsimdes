<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Datang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Datang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $datang = $this->Datang_model->get_all();

        $data = array(
            'datang_data' => $datang
        );

        $this->load->view('datang_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Datang_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nik' => $row->nik,
		'namal' => $row->namal,
		'tempt' => $row->tempt,
		'tgl' => $row->tgl,
		'jkl' => $row->jkl,
		'kwg' => $row->kwg,
		'dtg' => $row->dtg,
		'ttlskrg' => $row->ttlskrg,
		'tgl2' => $row->tgl2,
		'ket' => $row->ket,
	    );
            $this->load->view('datang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('datang'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('datang/create_action'),
	    'id' => set_value('id'),
	    'nik' => set_value('nik'),
	    'namal' => set_value('namal'),
	    'tempt' => set_value('tempt'),
	    'tgl' => set_value('tgl'),
	    'jkl' => set_value('jkl'),
	    'kwg' => set_value('kwg'),
	    'dtg' => set_value('dtg'),
	    'ttlskrg' => set_value('ttlskrg'),
	    'tgl2' => set_value('tgl2'),
	    'ket' => set_value('ket'),
	);
        $this->load->view('datang_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nik' => $this->input->post('nik',TRUE),
		'namal' => $this->input->post('namal',TRUE),
		'tempt' => $this->input->post('tempt',TRUE),
		'tgl' => $this->input->post('tgl',TRUE),
		'jkl' => $this->input->post('jkl',TRUE),
		'kwg' => $this->input->post('kwg',TRUE),
		'dtg' => $this->input->post('dtg',TRUE),
		'ttlskrg' => $this->input->post('ttlskrg',TRUE),
		'tgl2' => $this->input->post('tgl2',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Datang_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('datang'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Datang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('datang/update_action'),
		'id' => set_value('id', $row->id),
		'nik' => set_value('nik', $row->nik),
		'namal' => set_value('namal', $row->namal),
		'tempt' => set_value('tempt', $row->tempt),
		'tgl' => set_value('tgl', $row->tgl),
		'jkl' => set_value('jkl', $row->jkl),
		'kwg' => set_value('kwg', $row->kwg),
		'dtg' => set_value('dtg', $row->dtg),
		'ttlskrg' => set_value('ttlskrg', $row->ttlskrg),
		'tgl2' => set_value('tgl2', $row->tgl2),
		'ket' => set_value('ket', $row->ket),
	    );
            $this->load->view('datang_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('datang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nik' => $this->input->post('nik',TRUE),
		'namal' => $this->input->post('namal',TRUE),
		'tempt' => $this->input->post('tempt',TRUE),
		'tgl' => $this->input->post('tgl',TRUE),
		'jkl' => $this->input->post('jkl',TRUE),
		'kwg' => $this->input->post('kwg',TRUE),
		'dtg' => $this->input->post('dtg',TRUE),
		'ttlskrg' => $this->input->post('ttlskrg',TRUE),
		'tgl2' => $this->input->post('tgl2',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Datang_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('datang'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Datang_model->get_by_id($id);

        if ($row) {
            $this->Datang_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('datang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('datang'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('namal', 'namal', 'trim|required');
	$this->form_validation->set_rules('tempt', 'tempt', 'trim|required');
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
	$this->form_validation->set_rules('jkl', 'jkl', 'trim|required');
	$this->form_validation->set_rules('kwg', 'kwg', 'trim|required');
	$this->form_validation->set_rules('dtg', 'dtg', 'trim|required');
	$this->form_validation->set_rules('ttlskrg', 'ttlskrg', 'trim|required');
	$this->form_validation->set_rules('tgl2', 'tgl2', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "datang.xls";
        $judul = "datang";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nik");
	xlsWriteLabel($tablehead, $kolomhead++, "Namal");
	xlsWriteLabel($tablehead, $kolomhead++, "Tempt");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl");
	xlsWriteLabel($tablehead, $kolomhead++, "Jkl");
	xlsWriteLabel($tablehead, $kolomhead++, "Kwg");
	xlsWriteLabel($tablehead, $kolomhead++, "Dtg");
	xlsWriteLabel($tablehead, $kolomhead++, "Ttlskrg");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl2");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket");

	foreach ($this->Datang_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tempt);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jkl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kwg);
	    xlsWriteLabel($tablebody, $kolombody++, $data->dtg);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ttlskrg);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ket);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=datang.doc");

        $data = array(
            'datang_data' => $this->Datang_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('datang_doc',$data);
    }

}

/* End of file Datang.php */
/* Location: ./application/controllers/Datang.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-11 00:44:27 */
/* http://harviacode.com */