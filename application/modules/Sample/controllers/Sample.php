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
    $this->_module = 'index.php/sample/sample';




    }
    
	public function index(){
	//	echo "test";
	


		$id= "1";

		//$hasil =$this->md->getdata($id)->row();
	//	print_r($hasil);
	 //   $data['nama'] 	= $hasil->nama;
	//	$data['alamat']	= $hasil->alamat;
	
		$data['action'] = $this->_module."/simpan";
		$this->md->loaddata()->result();
		$hasil = $this->md->loaddata()->result();
		//$hasil = $this->md->loaddata()->result_array();
		
		$data['hasil']= $hasil;
		$this->load->view("Dataku",$data);
		//print_r($hasil);
	}
	public function simpan(){
		

		$nama= $this->input->post("nama");
		$alamat= $this->input->post("alamat");
		//echo $nama;
		//echo"--".$alamat;
		$data=array("nama"=>$nama,"alamat"=>$alamat);

		$this->md->simpan($data);

		redirect ($this->_module,'refresh');
		//redirect(base_url()."/index.php/sample/sample");

	}    

	public function tes(){
		$nama 	= "Update na";
		$alamat	= "Update t";
		$id 	= "2";

		$data 	=array("nama"=>$nama,"alamat"=>$alamat);
		$a=$this->md->edit($id,$data);
		if($a){
		echo "sukses update yoo";	
		}
		else{
			echo "gagal maning";
		}
	}
}