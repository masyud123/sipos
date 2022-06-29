<?php
class M_kategori extends CI_Model{

	function hapus_kategori($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kategori where kategori_id='$kode'");
		return $hsl;
	}

	function update_kategori($kode,$kat){
		$hsl=$this->db->query("UPDATE tbl_kategori set kategori_nama='$kat' where kategori_id='$kode'");
		return $hsl;
	}

	function tampil_kategori(){
		$hsl=$this->db->query("select * from tbl_kategori order by kategori_id desc");
		return $hsl;
	}

	function simpan_kategori($kokat,$kategori){
		$hsl=$this->db->query("INSERT INTO tbl_kategori(kode_kategori,kategori_nama) VALUES ('$kokat','$kategori')");
		return $hsl;
	}

	function get_kokat(){
		$q = $this->db->query("SELECT MAX(RIGHT(kategori_id,2)) AS kd_max FROM tbl_kategori");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        return "KT".$kd;
	}

}