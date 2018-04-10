<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Kode extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->library('form_validation');
        //$this->_module = 'index.php/sample/sample';
        // $this->load->model('sample_model','m_sample');
   $this->load->model('Kode_models','km');
   $this->load->library('form_validation');
   $this->_module = 'index.php/master/master';
    
		}
	public function index(){
		$this->km->loadkode()->result();
		$hasil = $this->km->loadkode()->result();
		$data['hasil']= $hasil;
		//$this->load->view("Gudang2",$data);
		print_r($hasil);
		$this->load->view("Kode");

    }
}

?>