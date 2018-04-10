<?php 
class M_alat_kimia extends CI_Model {    

    public function __construct() {
        parent::__construct();
    }

public function loaddata(){
        $this->db->select("id_alat_kimia,kode_alat,nama_alat,sinonim,ukuran");
        $this->db->from("alat_kimia");
        // $this->db->where("id_alat_kimia",$id_alat_kimia);
        return $this->db->get();

    }
public function addAlatKimia($data){
	$this->db->insert("alat_kimia",$data);
}
public function addBahankimia($data){
	$this->db->insert("bahan_kimia",$data);
}
}
?>