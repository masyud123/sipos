<?php
class M_suplier extends CI_Model{

	function hapus_suplier($kode){
		$hsl=$this->db->query("DELETE FROM tbl_suplier where suplier_id='$kode'");
		return $hsl;
	}

	function update_suplier($kode,$nama,$alamat,$notelp){
		$hsl=$this->db->query("UPDATE tbl_suplier set suplier_nama='$nama',suplier_alamat='$alamat',suplier_notelp='$notelp' where suplier_id='$kode'");
		return $hsl;
	}

	function tampil_suplier(){
		$hsl=$this->db->query("select * from tbl_suplier order by suplier_id desc");
		return $hsl;
	}

	function simpan_suplier($kodesup,$nama,$alamat,$notelp){
		$hsl=$this->db->query("INSERT INTO tbl_suplier(kode_suplier,suplier_nama,suplier_alamat,suplier_notelp) VALUES ('$kodesup','$nama','$alamat','$notelp')");
		return $hsl;
	}

	function get_kosp(){
		$q = $this->db->query("SELECT MAX(RIGHT(kode_suplier,2)) AS kd_max FROM tbl_suplier");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        return "SP".$kd;
	}

}