<?php
class Mlogin extends CI_Model{
    function cekadmin($u,$p){
        // $hasil=$this->db->query("select*from tbl_user where user_username='$u'and user_password=md5('$p')");
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_username', $u);
        $this->db->where('user_password', md5($p));
        $hasil = $this->db->get();
        return $hasil;
    }
  
}
