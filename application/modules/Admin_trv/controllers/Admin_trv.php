<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin_trv extends CI_Controller {
    public function __construct() {
        parent::__construct();
   	$this->load->library('curl');
   	$this->load->helper('url');		
   	
    }
public function index(){
	$this->load->view('index');
}

public function User(){
	$this->load->view('');

}
public function Side_bar(){
	$this->load->view('Side_bar');
}
public function T_A_Baru(){
	// echo "tod";exit();
	$this->load->view('T_A_Baru');
}

public function T_A_Terdaftar(){

	$this->load->view('T_A_Terdaftar');
}

public function Pembayaran(){

	$this->load->view('Pembayaran');
}

public function Pesanan_baru(){

	$this->load->view('Pesanan_baru');
}

public function On_going(){
	$this->load->view('On_going');
}

public function Pesanan_selesai(){

	$this->load->view('Pesanan_selesai');
}

public function Pengguna(){
	$this->load->view('Pengguna');
}

public function Trip(){
	$this->load->view('Trip');
}

public function Dana(){
	$this->load->view('Permintaan');

}
public function Riwayat_Dana(){
	$this->load->view('Riwayat_Dana');
}
public function Promo(){
	$this->load->view('Promo');
}

}?>