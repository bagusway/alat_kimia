<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
        $this->load->library('session');
        $this->load->model('Usermodel',"um");
	}
 
	public function index(){
        $data['Authenticate_admin'] = 'Login/Authenticate_admin';
		$this->load->view('jancuk',$data);
	}
    public function Authenticate_admin(){
        $email  = $this->input->post('email');
        $password = $this->input->post('password');

        $data  = array("email" =>$email ,"password"=>$password );
        print_r($data);
    }

	public function Auth(){
		$nip = $this->input->post('nip',TRUE);
		$password = $this->input->post('password',TRUE);

        $user= $this->um->Auth($nip,md5($password));

        if (sizeof($user) == 1) {
	        $sess_data = array(
	            'nama_laboran' => $user->nama_laboran,
	            'id_laboran' => $user->id_laboran,
	            'logged_in' => TRUE
	        );
            
            // $this->session->isset($_SESSION['$user']);
        	$this->session->set_userdata($sess_data);

            // redirect('Login/jancuk');
            // $user_data = $this->session->userdata('userdata');
            
            redirect('Alat_kimia');
        } else {
        	$this->session->set_flashdata('errorlogin', 'Kombinasi email dan password tidak sesuai');
        	
            redirect('Login');
        }

        // echo json_encode($user);
        // echo sizeof($user);
        // echo json_encode($this->session->userdata);
	
 }
 public function jancuk(){
    
    $data['name']=$this->session->has_userdata('nama_laboran');
            print_r($data);exit();
 }
 public function Logout(){
 	{
        $sess_data = array('id_laboran','logged_in','nama_laboran');
        $this->session->unset_userdata($sess_data);
        redirect('Login');
    }
 }
 public function NewRegister(){
    $this->load->view('Login/Register');
 }
 public function Register(){
            $nama_laboran   = $this->input->post('nama_laboran');
            $nip            = $this->input->post('nip');
            $email          = $this->input->post('email');
            $no_telp        = $this->input->post('no_telp');
            $passwords       = $this->input->post('password');
            $password       =md5($passwords);
            $foto           = $this->input->post('foto');
            $create_at      = date("Y/m/d");

            $data=array("nama_laboran"=>$nama_laboran,"nip"=>$nip,"email"=>$email,"no_telp"=>$no_telp,"foto"=>$foto,"password"=>$password,"create_at"=>$create_at);
            
            $this->um->Registers($data);

        $this->load->view("Login");
 }
}