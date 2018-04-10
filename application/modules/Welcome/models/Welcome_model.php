<?php

class Sample_model extends CI_Model {    

    public function __construct() {
        parent::__construct();
    }
    
    public function getdata($id){
    	$this->db->select("nama,alamat");
    	$this->db->from("identitas");
    	$this->db->where("id",$id);
    	return $this->db->get();
    }
    public function simpan($data){
    	$this->db->insert("identitas",$data);

    }

    public function loaddata(){
    	$this->db->select("nama,alamat");
    	$this->db->from("identitas");
    	//$this->db->where("id",$id);
    	return $this->db->get();
    }
}
?>