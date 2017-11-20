<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pindah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pindah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $pindah = $this->Pindah_model->get_all();

        $data = array(
            'pindah_data' => $pindah
        );

        $this->load->view('pindah_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pindah_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nik' => $row->nik,
		'namap' => $row->namap,
		'tempp' => $row->tempp,
		'tglp' => $row->tglp,
		'jklp' => $row->jklp,
		'kwgp' => $row->kwgp,
		'asalp' => $row->asalp,
		'tujuanp' => $row->tujuanp,
		'tglpp' => $row->tglpp,
		'kett' => $row->kett,
	    );
            $this->load->view('pindah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pindah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pindah/create_action'),
	    'id' => set_value('id'),
	    'nik' => set_value('nik'),
	    'namap' => set_value('namap'),
	    'tempp' => set_value('tempp'),
	    'tglp' => set_value('tglp'),
	    'jklp' => set_value('jklp'),
	    'kwgp' => set_value('kwgp'),
	    'asalp' => set_value('asalp'),
	    'tujuanp' => set_value('tujuanp'),
	    'tglpp' => set_value('tglpp'),
	    'kett' => set_value('kett'),
	);
        $this->load->view('pindah_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nik' => $this->input->post('nik',TRUE),
		'namap' => $this->input->post('namap',TRUE),
		'tempp' => $this->input->post('tempp',TRUE),
		'tglp' => $this->input->post('tglp',TRUE),
		'jklp' => $this->input->post('jklp',TRUE),
		'kwgp' => $this->input->post('kwgp',TRUE),
		'asalp' => $this->input->post('asalp',TRUE),
		'tujuanp' => $this->input->post('tujuanp',TRUE),
		'tglpp' => $this->input->post('tglpp',TRUE),
		'kett' => $this->input->post('kett',TRUE),
	    );

            $this->Pindah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pindah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pindah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pindah/update_action'),
		'id' => set_value('id', $row->id),
		'nik' => set_value('nik', $row->nik),
		'namap' => set_value('namap', $row->namap),
		'tempp' => set_value('tempp', $row->tempp),
		'tglp' => set_value('tglp', $row->tglp),
		'jklp' => set_value('jklp', $row->jklp),
		'kwgp' => set_value('kwgp', $row->kwgp),
		'asalp' => set_value('asalp', $row->asalp),
		'tujuanp' => set_value('tujuanp', $row->tujuanp),
		'tglpp' => set_value('tglpp', $row->tglpp),
		'kett' => set_value('kett', $row->kett),
	    );
            $this->load->view('pindah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pindah'));
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
		'namap' => $this->input->post('namap',TRUE),
		'tempp' => $this->input->post('tempp',TRUE),
		'tglp' => $this->input->post('tglp',TRUE),
		'jklp' => $this->input->post('jklp',TRUE),
		'kwgp' => $this->input->post('kwgp',TRUE),
		'asalp' => $this->input->post('asalp',TRUE),
		'tujuanp' => $this->input->post('tujuanp',TRUE),
		'tglpp' => $this->input->post('tglpp',TRUE),
		'kett' => $this->input->post('kett',TRUE),
	    );

            $this->Pindah_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pindah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pindah_model->get_by_id($id);

        if ($row) {
            $this->Pindah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pindah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pindah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('namap', 'namap', 'trim|required');
	$this->form_validation->set_rules('tempp', 'tempp', 'trim|required');
	$this->form_validation->set_rules('tglp', 'tglp', 'trim|required');
	$this->form_validation->set_rules('jklp', 'jklp', 'trim|required');
	$this->form_validation->set_rules('kwgp', 'kwgp', 'trim|required');
	$this->form_validation->set_rules('asalp', 'asalp', 'trim|required');
	$this->form_validation->set_rules('tujuanp', 'tujuanp', 'trim|required');
	$this->form_validation->set_rules('tglpp', 'tglpp', 'trim|required');
	$this->form_validation->set_rules('kett', 'kett', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "pindah.xls";
        $judul = "pindah";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Namap");
	xlsWriteLabel($tablehead, $kolomhead++, "Tempp");
	xlsWriteLabel($tablehead, $kolomhead++, "Tglp");
	xlsWriteLabel($tablehead, $kolomhead++, "Jklp");
	xlsWriteLabel($tablehead, $kolomhead++, "Kwgp");
	xlsWriteLabel($tablehead, $kolomhead++, "Asalp");
	xlsWriteLabel($tablehead, $kolomhead++, "Tujuanp");
	xlsWriteLabel($tablehead, $kolomhead++, "Tglpp");
	xlsWriteLabel($tablehead, $kolomhead++, "Kett");

	foreach ($this->Pindah_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nik);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namap);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tempp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tglp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jklp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kwgp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->asalp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tujuanp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tglpp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kett);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=pindah.doc");

        $data = array(
            'pindah_data' => $this->Pindah_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('pindah_doc',$data);
    }

}

/* End of file Pindah.php */
/* Location: ./application/controllers/Pindah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-11 06:56:57 */
/* http://harviacode.com */