<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Klanak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Klanak_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $klanak = $this->Klanak_model->get_all();

        $data = array(
            'klanak_data' => $klanak
        );

        $this->load->view('klanak_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Klanak_model->get_by_id($id);
        if ($row) {
            $data = array(
		'IDA' => $row->IDA,
		'nanak' => $row->nanak,
		'wktla' => $row->wktla,
		'tmel' => $row->tmel,
		'jklh' => $row->jklh,
		'bbdn' => $row->bbdn,
		'pjbdn' => $row->pjbdn,
		'ankke' => $row->ankke,
		'tmptkll' => $row->tmptkll,
		'namasu' => $row->namasu,
		'agma' => $row->agma,
		'umro' => $row->umro,
		'pkjan' => $row->pkjan,
		'naist' => $row->naist,
		'agmas' => $row->agmas,
		'umris' => $row->umris,
		'pkjanis' => $row->pkjanis,
		'blok' => $row->blok,
		'rtort' => $row->rtort,
		'rworts' => $row->rworts,
	    );
            $this->load->view('klanak_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('klanak'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('klanak/create_action'),
	    'IDA' => set_value('IDA'),
	    'nanak' => set_value('nanak'),
	    'wktla' => set_value('wktla'),
	    'tmel' => set_value('tmel'),
	    'jklh' => set_value('jklh'),
	    'bbdn' => set_value('bbdn'),
	    'pjbdn' => set_value('pjbdn'),
	    'ankke' => set_value('ankke'),
	    'tmptkll' => set_value('tmptkll'),
	    'namasu' => set_value('namasu'),
	    'agma' => set_value('agma'),
	    'umro' => set_value('umro'),
	    'pkjan' => set_value('pkjan'),
	    'naist' => set_value('naist'),
	    'agmas' => set_value('agmas'),
	    'umris' => set_value('umris'),
	    'pkjanis' => set_value('pkjanis'),
	    'blok' => set_value('blok'),
	    'rtort' => set_value('rtort'),
	    'rworts' => set_value('rworts'),
	);
        $this->load->view('klanak_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nanak' => $this->input->post('nanak',TRUE),
		'wktla' => $this->input->post('wktla',TRUE),
		'tmel' => $this->input->post('tmel',TRUE),
		'jklh' => $this->input->post('jklh',TRUE),
		'bbdn' => $this->input->post('bbdn',TRUE),
		'pjbdn' => $this->input->post('pjbdn',TRUE),
		'ankke' => $this->input->post('ankke',TRUE),
		'tmptkll' => $this->input->post('tmptkll',TRUE),
		'namasu' => $this->input->post('namasu',TRUE),
		'agma' => $this->input->post('agma',TRUE),
		'umro' => $this->input->post('umro',TRUE),
		'pkjan' => $this->input->post('pkjan',TRUE),
		'naist' => $this->input->post('naist',TRUE),
		'agmas' => $this->input->post('agmas',TRUE),
		'umris' => $this->input->post('umris',TRUE),
		'pkjanis' => $this->input->post('pkjanis',TRUE),
		'blok' => $this->input->post('blok',TRUE),
		'rtort' => $this->input->post('rtort',TRUE),
		'rworts' => $this->input->post('rworts',TRUE),
	    );

            $this->Klanak_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('klanak'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Klanak_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('klanak/update_action'),
		'IDA' => set_value('IDA', $row->IDA),
		'nanak' => set_value('nanak', $row->nanak),
		'wktla' => set_value('wktla', $row->wktla),
		'tmel' => set_value('tmel', $row->tmel),
		'jklh' => set_value('jklh', $row->jklh),
		'bbdn' => set_value('bbdn', $row->bbdn),
		'pjbdn' => set_value('pjbdn', $row->pjbdn),
		'ankke' => set_value('ankke', $row->ankke),
		'tmptkll' => set_value('tmptkll', $row->tmptkll),
		'namasu' => set_value('namasu', $row->namasu),
		'agma' => set_value('agma', $row->agma),
		'umro' => set_value('umro', $row->umro),
		'pkjan' => set_value('pkjan', $row->pkjan),
		'naist' => set_value('naist', $row->naist),
		'agmas' => set_value('agmas', $row->agmas),
		'umris' => set_value('umris', $row->umris),
		'pkjanis' => set_value('pkjanis', $row->pkjanis),
		'blok' => set_value('blok', $row->blok),
		'rtort' => set_value('rtort', $row->rtort),
		'rworts' => set_value('rworts', $row->rworts),
	    );
            $this->load->view('klanak_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('klanak'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('IDA', TRUE));
        } else {
            $data = array(
		'nanak' => $this->input->post('nanak',TRUE),
		'wktla' => $this->input->post('wktla',TRUE),
		'tmel' => $this->input->post('tmel',TRUE),
		'jklh' => $this->input->post('jklh',TRUE),
		'bbdn' => $this->input->post('bbdn',TRUE),
		'pjbdn' => $this->input->post('pjbdn',TRUE),
		'ankke' => $this->input->post('ankke',TRUE),
		'tmptkll' => $this->input->post('tmptkll',TRUE),
		'namasu' => $this->input->post('namasu',TRUE),
		'agma' => $this->input->post('agma',TRUE),
		'umro' => $this->input->post('umro',TRUE),
		'pkjan' => $this->input->post('pkjan',TRUE),
		'naist' => $this->input->post('naist',TRUE),
		'agmas' => $this->input->post('agmas',TRUE),
		'umris' => $this->input->post('umris',TRUE),
		'pkjanis' => $this->input->post('pkjanis',TRUE),
		'blok' => $this->input->post('blok',TRUE),
		'rtort' => $this->input->post('rtort',TRUE),
		'rworts' => $this->input->post('rworts',TRUE),
	    );

            $this->Klanak_model->update($this->input->post('IDA', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('klanak'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Klanak_model->get_by_id($id);

        if ($row) {
            $this->Klanak_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('klanak'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('klanak'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nanak', 'nanak', 'trim|required');
	$this->form_validation->set_rules('wktla', 'wktla', 'trim|required');
	$this->form_validation->set_rules('tmel', 'tmel', 'trim|required');
	$this->form_validation->set_rules('jklh', 'jklh', 'trim|required');
	$this->form_validation->set_rules('bbdn', 'bbdn', 'trim|required');
	$this->form_validation->set_rules('pjbdn', 'pjbdn', 'trim|required');
	$this->form_validation->set_rules('ankke', 'ankke', 'trim|required');
	$this->form_validation->set_rules('tmptkll', 'tmptkll', 'trim|required');
	$this->form_validation->set_rules('namasu', 'namasu', 'trim|required');
	$this->form_validation->set_rules('agma', 'agma', 'trim|required');
	$this->form_validation->set_rules('umro', 'umro', 'trim|required');
	$this->form_validation->set_rules('pkjan', 'pkjan', 'trim|required');
	$this->form_validation->set_rules('naist', 'naist', 'trim|required');
	$this->form_validation->set_rules('agmas', 'agmas', 'trim|required');
	$this->form_validation->set_rules('umris', 'umris', 'trim|required');
	$this->form_validation->set_rules('pkjanis', 'pkjanis', 'trim|required');
	$this->form_validation->set_rules('blok', 'blok', 'trim|required');
	$this->form_validation->set_rules('rtort', 'rtort', 'trim|required');
	$this->form_validation->set_rules('rworts', 'rworts', 'trim|required');

	$this->form_validation->set_rules('IDA', 'IDA', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "klanak.xls";
        $judul = "klanak";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nanak");
	xlsWriteLabel($tablehead, $kolomhead++, "Wktla");
	xlsWriteLabel($tablehead, $kolomhead++, "Tmel");
	xlsWriteLabel($tablehead, $kolomhead++, "Jklh");
	xlsWriteLabel($tablehead, $kolomhead++, "Bbdn");
	xlsWriteLabel($tablehead, $kolomhead++, "Pjbdn");
	xlsWriteLabel($tablehead, $kolomhead++, "Ankke");
	xlsWriteLabel($tablehead, $kolomhead++, "Tmptkll");
	xlsWriteLabel($tablehead, $kolomhead++, "Namasu");
	xlsWriteLabel($tablehead, $kolomhead++, "Agma");
	xlsWriteLabel($tablehead, $kolomhead++, "Umro");
	xlsWriteLabel($tablehead, $kolomhead++, "Pkjan");
	xlsWriteLabel($tablehead, $kolomhead++, "Naist");
	xlsWriteLabel($tablehead, $kolomhead++, "Agmas");
	xlsWriteLabel($tablehead, $kolomhead++, "Umris");
	xlsWriteLabel($tablehead, $kolomhead++, "Pkjanis");
	xlsWriteLabel($tablehead, $kolomhead++, "Blok");
	xlsWriteLabel($tablehead, $kolomhead++, "Rtort");
	xlsWriteLabel($tablehead, $kolomhead++, "Rworts");

	foreach ($this->Klanak_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nanak);
	    xlsWriteLabel($tablebody, $kolombody++, $data->wktla);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tmel);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jklh);
	    xlsWriteNumber($tablebody, $kolombody++, $data->bbdn);
	    xlsWriteNumber($tablebody, $kolombody++, $data->pjbdn);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ankke);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tmptkll);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namasu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->agma);
	    xlsWriteLabel($tablebody, $kolombody++, $data->umro);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pkjan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->naist);
	    xlsWriteLabel($tablebody, $kolombody++, $data->agmas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->umris);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pkjanis);
	    xlsWriteLabel($tablebody, $kolombody++, $data->blok);
	    xlsWriteLabel($tablebody, $kolombody++, $data->rtort);
	    xlsWriteLabel($tablebody, $kolombody++, $data->rworts);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=klanak.doc");

        $data = array(
            'klanak_data' => $this->Klanak_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('klanak_doc',$data);
    }

}

/* End of file Klanak.php */
/* Location: ./application/controllers/Klanak.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-10 10:45:32 */
/* http://harviacode.com */