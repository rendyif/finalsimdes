<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kematian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kematian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $kematian = $this->Kematian_model->get_all();

        $data = array(
            'kematian_data' => $kematian
        );

        $this->load->view('kematian_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kematian_model->get_by_id($id);
        if ($row) {
            $data = array(
		'Id' => $row->Id,
		'nkkm' => $row->nkkm,
		'nikm' => $row->nikm,
		'namam' => $row->namam,
		'jklkm' => $row->jklkm,
		'umurkm' => $row->umurkm,
		'pkjaan' => $row->pkjaan,
		'wktum' => $row->wktum,
		'sbbm' => $row->sbbm,
		'tmptm' => $row->tmptm,
		'blokm' => $row->blokm,
		'rtm' => $row->rtm,
		'rwm' => $row->rwm,
	    );
            $this->load->view('kematian_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kematian'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kematian/create_action'),
	    'Id' => set_value('Id'),
	    'nkkm' => set_value('nkkm'),
	    'nikm' => set_value('nikm'),
	    'namam' => set_value('namam'),
	    'jklkm' => set_value('jklkm'),
	    'umurkm' => set_value('umurkm'),
	    'pkjaan' => set_value('pkjaan'),
	    'wktum' => set_value('wktum'),
	    'sbbm' => set_value('sbbm'),
	    'tmptm' => set_value('tmptm'),
	    'blokm' => set_value('blokm'),
	    'rtm' => set_value('rtm'),
	    'rwm' => set_value('rwm'),
	);
        $this->load->view('kematian_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nkkm' => $this->input->post('nkkm',TRUE),
		'nikm' => $this->input->post('nikm',TRUE),
		'namam' => $this->input->post('namam',TRUE),
		'jklkm' => $this->input->post('jklkm',TRUE),
		'umurkm' => $this->input->post('umurkm',TRUE),
		'pkjaan' => $this->input->post('pkjaan',TRUE),
		'wktum' => $this->input->post('wktum',TRUE),
		'sbbm' => $this->input->post('sbbm',TRUE),
		'tmptm' => $this->input->post('tmptm',TRUE),
		'blokm' => $this->input->post('blokm',TRUE),
		'rtm' => $this->input->post('rtm',TRUE),
		'rwm' => $this->input->post('rwm',TRUE),
	    );

            $this->Kematian_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kematian'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kematian_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kematian/update_action'),
		'Id' => set_value('Id', $row->Id),
		'nkkm' => set_value('nkkm', $row->nkkm),
		'nikm' => set_value('nikm', $row->nikm),
		'namam' => set_value('namam', $row->namam),
		'jklkm' => set_value('jklkm', $row->jklkm),
		'umurkm' => set_value('umurkm', $row->umurkm),
		'pkjaan' => set_value('pkjaan', $row->pkjaan),
		'wktum' => set_value('wktum', $row->wktum),
		'sbbm' => set_value('sbbm', $row->sbbm),
		'tmptm' => set_value('tmptm', $row->tmptm),
		'blokm' => set_value('blokm', $row->blokm),
		'rtm' => set_value('rtm', $row->rtm),
		'rwm' => set_value('rwm', $row->rwm),
	    );
            $this->load->view('kematian_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kematian'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('Id', TRUE));
        } else {
            $data = array(
		'nkkm' => $this->input->post('nkkm',TRUE),
		'nikm' => $this->input->post('nikm',TRUE),
		'namam' => $this->input->post('namam',TRUE),
		'jklkm' => $this->input->post('jklkm',TRUE),
		'umurkm' => $this->input->post('umurkm',TRUE),
		'pkjaan' => $this->input->post('pkjaan',TRUE),
		'wktum' => $this->input->post('wktum',TRUE),
		'sbbm' => $this->input->post('sbbm',TRUE),
		'tmptm' => $this->input->post('tmptm',TRUE),
		'blokm' => $this->input->post('blokm',TRUE),
		'rtm' => $this->input->post('rtm',TRUE),
		'rwm' => $this->input->post('rwm',TRUE),
	    );

            $this->Kematian_model->update($this->input->post('Id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kematian'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kematian_model->get_by_id($id);

        if ($row) {
            $this->Kematian_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kematian'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kematian'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nkkm', 'nkkm', 'trim|required');
	$this->form_validation->set_rules('nikm', 'nikm', 'trim|required');
	$this->form_validation->set_rules('namam', 'namam', 'trim|required');
	$this->form_validation->set_rules('jklkm', 'jklkm', 'trim|required');
	$this->form_validation->set_rules('umurkm', 'umurkm', 'trim|required');
	$this->form_validation->set_rules('pkjaan', 'pkjaan', 'trim|required');
	$this->form_validation->set_rules('wktum', 'wktum', 'trim|required');
	$this->form_validation->set_rules('sbbm', 'sbbm', 'trim|required');
	$this->form_validation->set_rules('tmptm', 'tmptm', 'trim|required');
	$this->form_validation->set_rules('blokm', 'blokm', 'trim|required');
	$this->form_validation->set_rules('rtm', 'rtm', 'trim|required');
	$this->form_validation->set_rules('rwm', 'rwm', 'trim|required');

	$this->form_validation->set_rules('Id', 'Id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "kematian.xls";
        $judul = "kematian";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nkkm");
	xlsWriteLabel($tablehead, $kolomhead++, "Nikm");
	xlsWriteLabel($tablehead, $kolomhead++, "Namam");
	xlsWriteLabel($tablehead, $kolomhead++, "Jklkm");
	xlsWriteLabel($tablehead, $kolomhead++, "Umurkm");
	xlsWriteLabel($tablehead, $kolomhead++, "Pkjaan");
	xlsWriteLabel($tablehead, $kolomhead++, "Wktum");
	xlsWriteLabel($tablehead, $kolomhead++, "Sbbm");
	xlsWriteLabel($tablehead, $kolomhead++, "Tmptm");
	xlsWriteLabel($tablehead, $kolomhead++, "Blokm");
	xlsWriteLabel($tablehead, $kolomhead++, "Rtm");
	xlsWriteLabel($tablehead, $kolomhead++, "Rwm");

	foreach ($this->Kematian_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nkkm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nikm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namam);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jklkm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->umurkm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pkjaan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->wktum);
	    xlsWriteLabel($tablebody, $kolombody++, $data->sbbm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tmptm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->blokm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->rtm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->rwm);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=kematian.doc");

        $data = array(
            'kematian_data' => $this->Kematian_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('kematian_doc',$data);
    }

}

/* End of file Kematian.php */
/* Location: ./application/controllers/Kematian.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-09 12:31:30 */
/* http://harviacode.com */