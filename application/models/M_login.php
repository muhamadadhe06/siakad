<?php 
class M_login extends CI_Model{	
	function cek_login($username,$password){
        $stat=0;
        $q=$this->db->query("select * from tbl_akun where nomor_induk='$username'")->num_rows();
        if($q>0){
            $q=$this->db->query("select * from tbl_akun where nomor_induk='$username' and pass='$password'")->num_rows();
            if($q>0){
                $stat=3;
            }else{
                $stat=2;
            }
        }else{
            $stat=1;
        }
		return $stat;
	}
	function data_login($username){
        $q=$this->db->query("select * from tbl_akun where nomor_induk='$username'")->row();
		return $q;
	}	
}