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


}?>