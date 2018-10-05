<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Usermodel extends CI_Model {
	public $table = 'laboran';
    public $id = 'id_laboran';
    public $order = 'DESC';

function __construct()
    {
        parent::__construct();
    }
    function Get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
function Auth($nip,$password){
        $where = array('nip' => $nip, 'password' => $password );
        $this->db->select('*');
        $this->db->from('laboran');
        $this->db->where($where);
        return $this->db->get()->row();
    }
    function Registers($data){
        $this->db->insert("laboran",$data);
    }

}

?>