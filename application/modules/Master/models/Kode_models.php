<?php

class Kode_models extends CI_Model {    

    public function __construct() {
        parent::__construct();
    }


    public function getkode($id_barang){
    	$this->db->select("kode_barang");
    	$this->db->from("barang");
    	$this->db->where("id_barang",$id_barang);
    	return $this->db->get();
    }
    public function loadkode(){
    	$this->db->select("kode_barang");
        //$this->db->select("nama_barang,kode_barang");
    	$this->db->from("barang");
    	//$this->db->where("id",$id);
    	return $this->db->get();
    }