<?php

class Users_model extends CI_Model {    

    public function __construct() {
        parent::__construct();
    

    }
    
    // public function getdata($id_laboran){
    //     $this->db->select("NIP,password");
    //     $this->db->from("laboran");
    //     $this->db->where("id_laboran",$id_laboran);
    //     return $this->db->get();
    // }

    public function registers($data){

       $this->db->insert("laboran",$data);
       
    }






    // public function simpan($data){
    //     $this->db->insert("barang",$data);

    // }

    // public function loaddata(){
    //     $this->db->select("id_barang,nama_barang,kode_barang,tanggal_masuk,unit,harga_awal,total_harga,kategori,jenis_aktiva,susut_tahun,susut_bulan,akhir_susut,status,nilai_buku");
    //     //$this->db->select("nama_barang,kode_barang");
    //     $this->db->from("barang");
    //     //$this->db->where("id",$id);
    //     return $this->db->get();
    // }
    
    // public function loadkategori(){
    //     $this->db->select("id_kategori,nama_kategori");
    //     $this->db->from("master_kategori");
    //     return $this->db->get();
    // }

    // public function cat($id_kategori){
    //     $this->db->select("id_kategori,nama_kategori");
    //     $this->db->from("master_kategori");
    //     $this->db->where("id_kategori",$id_kategori);
    //     return $this->db->get();
    // }

    // public function edit($id,$data){
    //     $this->db->where("id",$id);
    //     $this->db->update("barang",$data);

    //     if ($this->db->affected_rows()>0) {

    //         return true;
    //         }else{
    //             return false;
    //         }
    // }
}
?>