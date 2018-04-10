<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Gudang extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->library('form_validation');
        //$this->_module = 'index.php/sample/sample';
        // $this->load->model('sample_model','m_sample');
   $this->load->model('Gudang_models',"md");
   $this->load->library('form_validation');
    $this->_module = 'index.php/gudang/gudang';




    }
    
	public function index(){
	//	echo "test";
	//$id_barang= "11";
	//$hasil =$this->md->getdata($id)->row();
	//	print_r($hasil);
	//   $data['nama'] 	= $hasil->nama;
	//	$data['alamat']	= $hasil->alamat;
	//$hasil = $this->md->loaddata()->result_array();
		//$id_kategori=1;
		$data['action'] = $this->_module."/simpan";
		$this->md->loaddata()->result();
		$hasil = $this->md->loaddata()->result();
		//$hasil2 =$this->md->cat($id_kategori)->row();
		$hasil2 =$this->md->loadkategori()->result();
		$data['hasil']= $hasil;
		$data['hasil2']= $hasil2;
		//print_r($hasil2);
		// $this->load->view("Gudang",$data);
		$this->load->view('Login/Login');
		//print_r($hasil);
		
	}
	public function total(){

	}
	public function simpan(){
		$id_barang=$this->input->post("id_barang");
		$nama_barang= $this->input->post("nama_barang");
		$kode_barang= $this->input->post("kode_barang");
		$tanggal_masuk= $this->input->post("tanggal_masuk");
		$unit=$this->input->post("unit");
		$harga_awal=$this->input->post("harga_awal");
		$total_harga=$this->input->post("total_harga");
		$kategori=$this->input->post("kategori");
		$jenis_aktiva=$this->input->post("jenis_aktiva");
		$susut_tahun=$this->input->post("susut_tahun");
		$susut_bulan=$this->input->post("susut_bulan");
		$akhir_susut=$this->input->post("akhir_susut");
		$status=$this->input->post("status");
		$nilai_buku=$this->input->post("nilai_buku");

		//echo $nama;
		//echo"--".$alamat;
		//$data=array("nama"=>$nama,"alamat"=>$alamat);
		$data=array("id_barang"=>$id_barang,"nama_barang"=>$nama_barang,"kode_barang"=>$kode_barang,"tanggal_masuk"=>$tanggal_masuk,"unit"=>$unit,"harga_awal"=>$harga_awal,"total_harga"=>$unit*$harga_awal,"kategori"=>$kategori,"jenis_aktiva"=>$jenis_aktiva,"susut_tahun"=>$susut_tahun,"susut_bulan"=>$susut_bulan,"akhir_susut"=>$akhir_susut,"status"=>$status);
		
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
	public function delete(){

	}
}
?>