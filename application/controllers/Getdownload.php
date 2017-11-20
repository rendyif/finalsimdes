<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Getdownload extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('download'));				
	}
 
	public function index(){		
		$this->load->view('surat');
	}
 
	public function blangkosurat(){				
		force_download('assets/SURAT/BLANGKO_SURAT.docx',NULL);
	}	
	public function suratahliwaris(){				
		force_download('assets/SURAT/SURAT_KET_AHLI_WARIS.doc',NULL);
	}	
	public function suratketkelahiran(){				
		force_download('assets/SURAT/BLANGKO SURAT KET. KELAHIRAN.doc',NULL);
	}	
 
}