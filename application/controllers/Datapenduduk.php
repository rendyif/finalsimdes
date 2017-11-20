<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Datapenduduk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Datapenduduk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $datapenduduk = $this->Datapenduduk_model->get_all();

        $data = array(
            'datapenduduk_data' => $datapenduduk
        );

        $this->load->view('datapenduduk_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Datapenduduk_model->get_by_id($id);
        if ($row) {
            $data = array(
              'id' => $row->id,
              'kk' => $row->kk,
              'nik' => $row->nik,
              'namakk' => $row->namakk,
              'alamat' => $row->alamat,
              'tempatl' => $row->tempatl,
              'tanggallhr' => $row->tanggallhr,
          );
            $this->load->view('datapenduduk_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('datapenduduk'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('datapenduduk/create_action'),
            'id' => set_value('id'),
            'kk' => set_value('kk'),
            'nik' => set_value('nik'),
            'namakk' => set_value('namakk'),
            'alamat' => set_value('alamat'),
            'tempatl' => set_value('tempatl'),
            'tanggallhr' => set_value('tanggallhr'),
    
        );
        $this->load->view('datapenduduk_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
              'kk' => $this->input->post('kk',TRUE),
              'nik' => $this->input->post('nik',TRUE),
              'namakk' => $this->input->post('namakk',TRUE),
              'alamat' => $this->input->post('alamat',TRUE),
              'tempatl' => $this->input->post('tempatl',TRUE),
              'tanggallhr' => $this->input->post('tanggallhr',TRUE),
            
          );

            $this->Datapenduduk_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('datapenduduk'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Datapenduduk_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('datapenduduk/update_action'),
                'id' => set_value('id', $row->id),
                'kk' => set_value('kk', $row->id),
                'nik' => set_value('nik', $row->nik),
                'namakk' => set_value('namakk', $row->namakk),
                'alamat' => set_value('alamat', $row->alamat),
                'tempatl' => set_value('tempatl', $row->tempatl),
                'tanggallhr' => set_value('tanggallhr', $row->tanggallhr),
            );
            $this->load->view('datapenduduk_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('datapenduduk'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'kk' => $this->input->post('kk',TRUE),
                'nik' => $this->input->post('nik',TRUE),
                'namakk' => $this->input->post('namakk',TRUE),
                'alamat' => $this->input->post('alamat',TRUE),
                'tempatl' => $this->input->post('tempatl',TRUE),
                'tanggallhr' => $this->input->post('tanggallhr',TRUE),
               
            );

            $this->Datapenduduk_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('datapenduduk'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Datapenduduk_model->get_by_id($id);

        if ($row) {
            $this->Datapenduduk_model->delete($id);
            $this->session->set_flashdata('message', 'Hapus Data Sukses');
            redirect(site_url('datapenduduk'));
        } else {
            $this->session->set_flashdata('message', 'Data Tidak Ditemukan');
            redirect(site_url('datapenduduk'));
        }
    }

    public function _rules() 
    {
        $this->form_validation->set_rules('kk', 'kk', 'trim|required');
        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('namakk', 'namakk', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('tempatl', 'tempatl', 'trim|required');
        $this->form_validation->set_rules('tanggallhr', 'tanggallhr', 'trim|required');
        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "datapenduduk.xls";
        $judul = "datapenduduk";
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
        xlsWriteLabel($tablehead, $kolomhead++, "kk");
        xlsWriteLabel($tablehead, $kolomhead++, "nik");
        xlsWriteLabel($tablehead, $kolomhead++, "namakk");
        xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
        xlsWriteLabel($tablehead, $kolomhead++, "Tempatl");
        xlsWriteLabel($tablehead, $kolomhead++, "Tanggallhr");
      
        foreach ($this->Datapenduduk_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteNumber($tablebody, $kolombody++, $data->kk);
            xlsWriteLabel($tablebody, $kolombody++, $data->nik);
            xlsWriteLabel($tablebody, $kolombody++, $data->namakk);
            xlsWriteNumber($tablebody, $kolombody++, $data->alamat);
            xlsWriteLabel($tablebody, $kolombody++, $data->tempatl);
            xlsWriteLabel($tablebody, $kolombody++, $data->tanggallhr);
            
            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=datapenduduk.doc");

        $data = array(
            'datapenduduk_data' => $this->Datapenduduk_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('datapenduduk_doc',$data);
    }

}

/* End of file Datapenduduk.php */
/* Location: ./application/controllers/Datapenduduk.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-09 12:24:37 */
/* http://harviacode.com */