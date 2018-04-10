<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Alat_kimia extends CI_Controller {
    public function __construct() {
        parent::__construct();
   			$this->load->model('M_alat_kimia',"mk");
   			$this->load->library('form_validation');
   $this->load->library('form_validation');
    $this->_module = 'index.php/Alat_kimia/Alat_kimia';

    }
public function index(){
	// echo "test";
	//$id_barang= "11";
	//$hasil =$this->md->getdata($id)->row();
	//	print_r($hasil);
	//   $data['nama'] 	= $hasil->nama;
	//	$data['alamat']	= $hasil->alamat;
	//$hasil = $this->md->loaddata()->result_array();
		//$id_kategori=1;
		// $this->md->loaddata()->result();
		// $hasil = $this->md->loaddata()->result();
		// //$hasil2 =$this->md->cat($id_kategori)->row();
		// $hasil2 =$this->md->loadkategori()->result();
		// $data['hasil']= $hasil;
		// $data['hasil2']= $hasil2;
		//print_r($hasil2);
		// $this->load->view("Gudang",$data);
        // $this->mk->loaddata()->result();
		$data['addAlatkimia'] = $this->_module."/addAlatkimia";
		$data['addBahankimia'] = $this->_module."/addBahankimia";
		$hasil = $this->mk->loaddata()->result();
		//$hasil2 =$this->md->cat($id_kategori)->row();
		// $hasil2 =$this->md->loadkategori()->result();
		// print_r($hasil);
		$data['hasil']= $hasil;
		// $this->load->view('V_alat_kimia',$data);
		$this->load->view('Tambah_alat_kimia',$data);
		
		//print_r($hasil);
		
	}
	public function addBahankimia(){
		$id_bahan_kimia = $this->input->post("id_bahan_kimia");
		$kode_bahan		= $this->input->post("kode_bahan");
		$nama_bahan		= $this->input->post("nama_bahan");
		$sinonim		= $this->input->post("sinonim");
		$satuan_kecil	= $this->input->post("satuan_kecil");
		$satun_besar	= $this->input->post("satun_besar");
		$jenis_bahan	= $this->input->post("jenis_bahan");
		$jumlah_stok_bahan = $this->input->post("jumlah_stok_bahan");
		$create_at		= date("Y/m/d");

		$data = array("id_bahan_kimia"=>$id_bahan_kimia,"kode_bahan"=>$kode_bahan,"nama_bahan"=>$nama_bahan,"sinonim"=>$sinonim,"satuan_kecil"=>$satuan_kecil,"jenis_bahan"=>$jenis_bahan,"jumlah_stok_bahan"=>$jumlah_stok_bahan,"create_at"=>$create_at);
		$this->mk->addBahankimia($data);
		redirect($this->load->view('Tambah_alat_kimia',$data),'refresh');

	} 

	public function addAlatkimia(){
		$id_alat_kimia	= $this->input->post("id_alat_kimia");
		$kode_alat		= $this->input->post("kode_alat");
		$nama_alat		= $this->input->post("nama_alat");
		$sinonim		= $this->input->post("sinonim");
		$ukuran			= $this->input->post("ukuran");
		$jumlah_stok_alat=$this->input->post("jumlah_stok_alat");
		$jumlah_rusak	= $this->input->post("jumlah_rusak");
		$jumlah_hilang	= $this->input->post("jumlah_hilang");
		$jenis_bahan	= $this->input->post("jenis_bahan");
		$create_at		= date("Y/m/d");
		


		//echo $nama;
		//echo"--".$alamat;
		//$data=array("nama"=>$nama,"alamat"=>$alamat);
		$data=array("id_alat_kimia"=>$id_alat_kimia, "kode_alat"=>$kode_alat, "nama_alat"=>$nama_alat, "sinonim"=>$sinonim, "ukuran"=>$ukuran, "jumlah_stok_alat"=>$jumlah_stok_alat, "jumlah_rusak"=>$jumlah_rusak, "jumlah_hilang"=>$jumlah_hilang, "jenis_bahan"=>$jenis_bahan,"create_at"=>$create_at);
		
		$this->mk->addAlatkimia($data);

		redirect ($this->_module,'refresh');
		//redirect(base_url()."/index.php/sample/sample");

	}    
}
?>