<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->library('form_validation');
        //$this->_module = 'index.php/sample/sample';
        // $this->load->model('sample_model','m_sample');
   $this->load->model('Users_model',"UM");
   $this->load->library(array('session'));
   $this->load->helper('form');
   $this->load->library('form_validation');
    $this->_module = 'index.php/Users/Users';
    }

public function index(){
	$data['register'] = $this->_module."/registers";
	
	// $this->load->view('Login');
	// $this->load->view('Alat_kimia/Dashboard_utama');
	// $this->load->view('Alat_kimia');
}
// public function aksi_login(){
// 		$NIP = $this->input->post('NIP');
// 		$password = $this->input->post('password');
// 		$data = array(
// 			'NIP' => $NIP,
// 			'password' => md5($password)
// 			);
// 		$cek = $this->user_model->cek_login("admin",$where)->num_rows();
// 		if($cek > 0){
 
// 			$data_session = array(
// 				'nama' => $NIP,
// 				'status' => "login"
// 				);
 
// 			$this->session->set_userdata($data_session);
 
// 			redirect(base_url("admin"));
 
// 		}else{
// 			echo "Username dan password salah !";
// 		}
// 	}
// }
public function belumregister(){
	$this->load->view('Register');
}
public function registers(){

			$nama_laboran	= $this->input->post('nama_laboran');
			$NIP 			= $this->input->post('NIP');
			$email    		= $this->input->post('email');
			$no_telp		= $this->input->post('no_telp');
			$password 		= $this->input->post('password');
			$foto 			= $this->input->post('foto');
			$create_at 		= date("Y/m/d");

			$data=array("NIP"=>$NIP,"email"=>$email,"no_telp"=>$no_telp,"foto"=>$foto,"create_at"=>$create_at);
			
			$this->um->registers($data);

		$this->load->view("Register");
}
// public function registers(){
// 	$data = new stdClass();

// 		$this->form_validation->set_rules('NIP', 'NIP', 'trim|required|alpha_numeric|min_length[4]|is_unique[laboran.NIP]', array('is_unique' => 'This NIP already exists. Please Login.'));
// 		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[laboran.email]');
// 		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
// 		// $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
// 		if ($this->form_validation->run() === false) {
			
// 			// validation not ok, send validation errors to the view
// 			$this->load->view('Login/Register', $data);
			
// 		} else {
			
// 			// set variables from the form
// 			$nama_laboran	= $this->input->post('nama_laboran');
// 			$NIP 			= $this->input->post('NIP');
// 			$email    		= $this->input->post('email');
// 			$no_telp		= $this->input->post('no_telp');
// 			$password 		= $this->input->post('password');
// 			$foto 			= $this->input->post('foto');
			
// 			if ($this->user_model->registers($nama_laboran, $NIP, $email,$no_telp, $password, $foto)) {
				
// 				// user creation ok
// 				$this->load->view('Login/Login', $data);
				
				
// 			} else {
				
// 				// user creation failed, this should never happen
// 				$data->error = 'There was a problem creating your new account. Please try again.';
				
// 				// send error to the view
				
// 				$this->load->view('Login/Register', $data);
				
// 			}
			
// 		}
		
// 	}

	// $data = array(
	// 		'nama_laboran'   => $nama_laboran,
	// 		'email'      => $email,
	// 		'password'   => $this->hash_password($password),
	// 		'created_at' => date('Y-m-j H:i:s'),
	// 	);
} 
?>