<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin_trv extends CI_Controller {
    public function __construct() {
        parent::__construct();
   	$this->load->library('curl');
   	$this->load->helper('url');
	$this->load->helper('date');
   	$this->load->helper('form');
   	$this->load->library('session');		
   	$this->_module = 'index.php/Admin_trv/Admin_trv';
    }
public function index(){
	if ($this->session->userdata('logged_in')!=TRUE) {
		redirect('Login/login','refresh');
	}
	$getalluser 	= $this->Getalluser();
	$counting 		= $getalluser->user_count;
	$trip 			= $getalluser->trip_count;
	$booking 		= $getalluser->booking_count;
	$provider 		= $getalluser->provider_count;

	// print_r($getalluser);
	$data['user_count']		= $counting;
	$data['trip_count']		= $trip;
	$data['booking_count'] 	= $booking;
	$data['provider_count'] = $provider;
	 $this->load->view('index',$data);
}
public function get_func($url,$token){
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $token);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $content =curl_exec($ch);
    $gets = json_decode($content);
    return $gets;

}
public function post_func($url,$passData,$token){
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($passData));
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $token);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $content =curl_exec($ch);
	curl_close($ch);
	return $content;
    
}
public function put_func($url,$passData,$token){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($passData));
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $token);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $content =curl_exec($ch);
	curl_close($ch);
	// print_r($content);
    return $content;  
}
public function profile(){
	header("Access-Control-Allow-Origin: *");
	$use_token 	= $this->session->userdata('save_token');
	$data['use_token']='Authorization: Bearer '.$use_token;
	$url = 'http://travinesia.com:3000/v1/user/profile';
	// $user = json_decode($this->curl->simple_get(''),true);
	// print_r($user);exit();
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  
    $content =curl_exec($ch);
    $contents = json_decode($content);
    // print_r($contents);
    $id 	= $contents->data->_id;
    $name	= $contents->data->name;
    $email 	= $contents->data->email;
    $sess_data = array('id' => $id,
						'name'=>$name,
						'email'=>$email,
						'logged_in'=>TRUE);
        $sessions =$this->session->set_userdata($sess_data);
    // print_r($se);
        redirect('Admin_trv','refresh');
    // print_r(json_encode($content));exit();
    // print_r(json_decode($content));
    // $profile = json_decode($content,true);
    // $da['profiles']=$profile['data'];
    // print_r($da);

}
public function login(){
	$data['login_proses']='Admin_trv/login_proses';
	$this->load->view('login',$data);
}
public function login_proses(){
	$email=$this->input->post('email');
	$password=$this->input->post('password');
	$passData=array('email'=>$email,'password'=>$password);
	// print_r($passData);exit();
	$url = 'http://travinesia.com:3000/v1/user/authenticate_admin';
	$this->postCURL($url, $passData);



	// $this->load->view('Admin_trv/profile',$data);
	// redirect('Admin_trv/profile');

	// print_r($jancuk);
	// print_r($output)
	// print_r($data);exit();

}
public function postCURL($_url, $_param){

        $postData = '';
        //create name value pairs seperated by &
        foreach($_param as $k => $v) 
        { 
          $postData .= $k . '='.$v.'&'; 
        }
        rtrim($postData, '&');


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false); 
        curl_setopt($ch, CURLOPT_POST, count($postData));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    

        $output=curl_exec($ch);

        curl_close($ch);
        // print_r($output);
        // return $output;
        $tokens=json_decode($output,true);
        $data=$tokens['token'];
        $sess_data = array('save_token' => $data);
        $this->session->set_userdata($sess_data);

        // print_r($sess_data);exit();
        redirect('Admin_trv/profile','refresh');
        // curl_setopt($ch, CURLOPT_HTTPHEADER, 'Bearer '.$sess_data);
	           
        
    }
public function Side_bar(){
	$this->load->view('Side_bar');

}
public function Getalluser(){
	header("Access-Control-Allow-Origin: *");
	$use_token 	= $this->session->userdata('save_token');
	$data['use_token']='Authorization: Bearer '.$use_token;
	$url = 'http://travinesia.com:3000/v1/admin/dashboard';
	
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $content =curl_exec($ch);
    $contents = json_decode($content);

    // print_r($contents);exit();
    // $data['user']=$contents->data;
    return $contents;

}
public function logout(){
	$sess_data = array('id_laboran','logged_in','nama_laboran');
        $this->session->unset_userdata($sess_data);
        redirect('Login');
}
public function T_A_Baru(){
	// echo "tod";exit();
	header("Access-Control-Allow-Origin: *");
	$use_token 			= $this->session->userdata('save_token');
	$token['use_token']	='Authorization: Bearer '.$use_token;

	$new_provider 		= 'http://travinesia.com:3000/v1/admin/get/new_provider';
	$acc 				= 'http://travinesia.com:3000/v1/admin/acc_new_provider';
	$reject 			= 'http://travinesia.com:3000/v1/admin/reject_provider';

	$_id = $this->input->post('_id');
	$passData=array('_id'=>($_id));

	$contents = $this->get_func($new_provider,$token);	
	
	// $tolak = $this->put_func($reject,$passData,$token);


	// $data['terimakasih']=$terima;
	// $data['tolak']=$tolak;
    $data['contents']=$contents->provider;
// print_r($data['contents']);
    
	$this->load->view('T_A_Baru',$data);

}

public function acc_new_provider(){
header("Access-Control-Allow-Origin: *");
	$use_token 	= $this->session->userdata('save_token');
	// print_r($use_token);
	$data['use_token']='Authorization: Bearer '.$use_token;
	$url = 'http://travinesia.com:3000/v1/admin/acc_new_provider';
	$_id = $this->input->post('_id');
	$passData=array('_id'=>$_id);

	$terima = $this->put_func($url,$passData,$data);
    redirect('Admin_trv/T_A_Baru','refresh');
    	
}
public function reject_provider(){
	header("Access-Control-Allow-Origin: *");
	$use_token 	= $this->session->userdata('save_token');
	// print_r($use_token);
	$data['use_token']='Authorization: Bearer '.$use_token;
	$url = 'http://travinesia.com:3000/v1/admin/reject_provider';
	$_id = $this->input->post('_id');
	$passData=array('_id'=>$_id);
	$tolak = $this->put_func($url,$passData,$data);
	redirect('Admin_trv/T_A_Baru','refresh');
	
}
public function lihat_new_provider(){
	header("Access-Control-Allow-Origin: *");
	$use_token 	= $this->session->userdata('save_token');
	// print_r($use_token);
	$data['use_token']='Authorization: Bearer '.$use_token;
	$_id = $this->input->post('_id');
	$passData=array('_id'=>$_id);
// print_r($passData);
	$url = 'http://travinesia.com:3000/v1/admin/detail_provider/'.$_id;
	$detail = $this->get_func($url,$data);
	// $details=json_decode($detail);
	$data['new_provider']=$detail->provider;
	// print_r($data['new_provider']);
	$this->load->view('detail_ta_baru',$data);
}



public function block_provider(){
	header("Access-Control-Allow-Origin: *");
	$use_token 	= $this->session->userdata('save_token');
	// print_r($use_token);
	$data['use_token']='Authorization: Bearer '.$use_token;
	$url = 'http://travinesia.com:3000/v1/admin/block_provider';
	$_id = $this->input->post('_id');
	$passData=array('_id'=>$_id);
	$block_provider = $this->put_func($url,$passData,$data);
	print_r($block_provider);
	redirect('Admin_trv/T_A_Terdaftar','refresh');
	
}
public function T_A_Terdaftar(){
	header("Access-Control-Allow-Origin: *");
	$use_token 	= $this->session->userdata('save_token');
	$data['use_token']='Authorization: Bearer '.$use_token;
	$url = 'http://travinesia.com:3000/v1/admin/get/register_provider';
	
	$get_prov = $this->get_func($url,$data);
	
    $data['contents']=$get_prov->provider;
    // print_r($get_prov->provider);exit();
	$this->load->view('T_A_Terdaftar',$data);
}
public function T_A_Blocked(){
	header("Access-Control-Allow-Origin: *");
	$use_token 	= $this->session->userdata('save_token');
	$data['use_token']='Authorization: Bearer '.$use_token;
	$url = 'http://travinesia.com:3000/v1/admin/get/register_provider';
	
	$get_prov = $this->get_func($url,$data);
	
    $data['contents']=$get_prov->provider;
    // print_r($get_prov->provider);exit();
	$this->load->view('T_A_Blocked',$data);
}
public function Update_booking(){
	$id_statusPayment= $this->input->post("id_statusPayment");
	$data = array('id_statusPayment'=>$id_statusPayment);
	$params = json_encode($data);
	// print_r($params);exit();
	$url = 'http://travinesia.com:3000/v1/user/booking/update_status';
	echo $this->curl->simple_post($url, false, $data);
	echo "successs";

}

public function Pembayaran(){
	header("Access-Control-Allow-Origin: *");
	$use_token 	= $this->session->userdata('save_token');
	$data['use_token']='Authorization: Bearer '.$use_token;
	$url = 'http://travinesia.com:3000/v1/admin/get/all_payment_booking';
	
	$payment = $this->get_func($url,$data);
	
    $data['payment']=$payment->booking;
    // print_r($data['payment']);
	$this->load->view('Pembayaran',$data);
}
public function acc_payment_booking(){
	header("Access-Control-Allow-Origin: *");
	$use_token 	= $this->session->userdata('save_token');
	$data['use_token']='Authorization: Bearer '.$use_token;
	$url = 'http://travinesia.com:3000/v1/admin/acc_payment_booking';

	$_id = $this->input->post('_id');
	$passData=array('_id'=>$_id);
// print_r($passData);exit();
	$payments = $this->put_func($url,$passData,$data);
	redirect('Admin_trv/Pembayaran','refresh');
	// print_r($payments);exit();
}
public function detail_booking(){
	header("Access-Control-Allow-Origin: *");
	$use_token 	= $this->session->userdata('save_token');
	$data['use_token']='Authorization: Bearer '.$use_token;

	$_id = $this->input->post('_id');
	$passData=array('_id'=>$_id);
	$url = 'http://travinesia.com:3000/v1/admin/get/detail_payment/'.$_id;
	
	$payment = $this->get_func($url,$data);
	$data['payment']=$payment->data;
    // print_r($payment->data);exit();
	$this->load->view('detail_booking',$data);

}

public function Pesanan_baru(){
	header("Access-Control-Allow-Origin: *");
	$use_token 	= $this->session->userdata('save_token');
	$data['use_token']='Authorization: Bearer '.$use_token;
	$url = 'http://travinesia.com:3000/v1/admin/get/new_booking';
	$new_booking = $this->get_func($url,$data);
	$data['new_booking']=$new_booking->data;
	print_r($data['new_booking']);
	$this->load->view('Pesanan_baru',$data);
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