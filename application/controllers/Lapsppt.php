<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lapsppt extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lapsppt_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $lapsppt = $this->Lapsppt_model->get_all();

        $data = array(
            'lapsppt_data' => $lapsppt
        );

        $this->load->view('lapsppt_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Lapsppt_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'namapmt' => $row->namapmt,
		'nolc' => $row->nolc,
		'amt' => $row->amt,
		'nmspt' => $row->nmspt,
		'loktnh' => $row->loktnh,
		'nosppt' => $row->nosppt,
		'lstnh' => $row->lstnh,
		'klstn' => $row->klstn,
		'sprktn' => $row->sprktn,
		'pjkip' => $row->pjkip,
		'sbbrk' => $row->sbbrk,
	    );
            $this->load->view('lapsppt_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('lapsppt'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('lapsppt/create_action'),
	    'id' => set_value('id'),
	    'namapmt' => set_value('namapmt'),
	    'nolc' => set_value('nolc'),
	    'amt' => set_value('amt'),
	    'nmspt' => set_value('nmspt'),
	    'loktnh' => set_value('loktnh'),
	    'nosppt' => set_value('nosppt'),
	    'lstnh' => set_value('lstnh'),
	    'klstn' => set_value('klstn'),
	    'sprktn' => set_value('sprktn'),
	    'pjkip' => set_value('pjkip'),
	    'sbbrk' => set_value('sbbrk'),
	);
        $this->load->view('lapsppt_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'namapmt' => $this->input->post('namapmt',TRUE),
		'nolc' => $this->input->post('nolc',TRUE),
		'amt' => $this->input->post('amt',TRUE),
		'nmspt' => $this->input->post('nmspt',TRUE),
		'loktnh' => $this->input->post('loktnh',TRUE),
		'nosppt' => $this->input->post('nosppt',TRUE),
		'lstnh' => $this->input->post('lstnh',TRUE),
		'klstn' => $this->input->post('klstn',TRUE),
		'sprktn' => $this->input->post('sprktn',TRUE),
		'pjkip' => $this->input->post('pjkip',TRUE),
		'sbbrk' => $this->input->post('sbbrk',TRUE),
	    );

            $this->Lapsppt_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('lapsppt'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Lapsppt_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('lapsppt/update_action'),
		'id' => set_value('id', $row->id),
		'namapmt' => set_value('namapmt', $row->namapmt),
		'nolc' => set_value('nolc', $row->nolc),
		'amt' => set_value('amt', $row->amt),
		'nmspt' => set_value('nmspt', $row->nmspt),
		'loktnh' => set_value('loktnh', $row->loktnh),
		'nosppt' => set_value('nosppt', $row->nosppt),
		'lstnh' => set_value('lstnh', $row->lstnh),
		'klstn' => set_value('klstn', $row->klstn),
		'sprktn' => set_value('sprktn', $row->sprktn),
		'pjkip' => set_value('pjkip', $row->pjkip),
		'sbbrk' => set_value('sbbrk', $row->sbbrk),
	    );
            $this->load->view('lapsppt_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('lapsppt'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'namapmt' => $this->input->post('namapmt',TRUE),
		'nolc' => $this->input->post('nolc',TRUE),
		'amt' => $this->input->post('amt',TRUE),
		'nmspt' => $this->input->post('nmspt',TRUE),
		'loktnh' => $this->input->post('loktnh',TRUE),
		'nosppt' => $this->input->post('nosppt',TRUE),
		'lstnh' => $this->input->post('lstnh',TRUE),
		'klstn' => $this->input->post('klstn',TRUE),
		'sprktn' => $this->input->post('sprktn',TRUE),
		'pjkip' => $this->input->post('pjkip',TRUE),
		'sbbrk' => $this->input->post('sbbrk',TRUE),
	    );

            $this->Lapsppt_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('lapsppt'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Lapsppt_model->get_by_id($id);

        if ($row) {
            $this->Lapsppt_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('lapsppt'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('lapsppt'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('namapmt', 'namapmt', 'trim|required');
	$this->form_validation->set_rules('nolc', 'nolc', 'trim|required');
	$this->form_validation->set_rules('amt', 'amt', 'trim|required');
	$this->form_validation->set_rules('nmspt', 'nmspt', 'trim|required');
	$this->form_validation->set_rules('loktnh', 'loktnh', 'trim|required');
	$this->form_validation->set_rules('nosppt', 'nosppt', 'trim|required');
	$this->form_validation->set_rules('lstnh', 'lstnh', 'trim|required');
	$this->form_validation->set_rules('klstn', 'klstn', 'trim|required');
	$this->form_validation->set_rules('sprktn', 'sprktn', 'trim|required');
	$this->form_validation->set_rules('pjkip', 'pjkip', 'trim|required');
	$this->form_validation->set_rules('sbbrk', 'sbbrk', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "lapsppt.xls";
        $judul = "lapsppt";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Namapmt");
	xlsWriteLabel($tablehead, $kolomhead++, "Nolc");
	xlsWriteLabel($tablehead, $kolomhead++, "Amt");
	xlsWriteLabel($tablehead, $kolomhead++, "Nmspt");
	xlsWriteLabel($tablehead, $kolomhead++, "Loktnh");
	xlsWriteLabel($tablehead, $kolomhead++, "Nosppt");
	xlsWriteLabel($tablehead, $kolomhead++, "Lstnh");
	xlsWriteLabel($tablehead, $kolomhead++, "Klstn");
	xlsWriteLabel($tablehead, $kolomhead++, "Sprktn");
	xlsWriteLabel($tablehead, $kolomhead++, "Pjkip");
	xlsWriteLabel($tablehead, $kolomhead++, "Sbbrk");

	foreach ($this->Lapsppt_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namapmt);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nolc);
	    xlsWriteLabel($tablebody, $kolombody++, $data->amt);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nmspt);
	    xlsWriteLabel($tablebody, $kolombody++, $data->loktnh);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nosppt);
	    xlsWriteNumber($tablebody, $kolombody++, $data->lstnh);
	    xlsWriteLabel($tablebody, $kolombody++, $data->klstn);
	    xlsWriteLabel($tablebody, $kolombody++, $data->sprktn);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pjkip);
	    xlsWriteLabel($tablebody, $kolombody++, $data->sbbrk);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=lapsppt.doc");

        $data = array(
            'lapsppt_data' => $this->Lapsppt_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('lapsppt_doc',$data);
    }

}

/* End of file Lapsppt.php */
/* Location: ./application/controllers/Lapsppt.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-13 02:19:40 */
/* http://harviacode.com */