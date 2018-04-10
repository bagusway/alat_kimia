<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Sample extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->library('form_validation');
        // //$this->_module = 'index.php/sample/sample';
        
        // $this->load->model('sample_model','m_sample');
   $this->load->model('sample_model',"md");
   $this->load->library('form_validation');
   // $this->_module = 'index.php/sample/sample';
   $this->_module = 'index.php/welcome/welcome';



    }
    
	public function index(){
	//	echo "test";
	


		$id= "2";

		$hasil =$this->md->getdata($id)->row();
	//	print_r($hasil);
	 //   $data['nama'] 	= $hasil->nama;
	//	$data['alamat']	= $hasil->alamat;
	
		$data['action'] = $this->_module."/simpan";
		$this->md->loaddata()->result();
		$hasil2 = $this->md->loaddata()->result();
		$this->load->view("welcome_message",$data);
		//print_r($hasil2);
	}
	public function simpan(){
		

		$nama= $this->input->post("nama");
		$alamat= $this->input->post("alamat");
		//echo $nama;
		//echo"--".$alamat;
		$data=array("nama"=>$nama,"alamat"=>$alamat);

		$this->md->simpan($data);

		redirect ($this->_module,'refresh');
	}    
}