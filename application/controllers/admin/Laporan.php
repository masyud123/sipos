<?php
class Laporan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('M_kategori');
		$this->load->model('M_barang');
		$this->load->model('M_suplier');
		$this->load->model('M_pembelian');
		$this->load->model('M_penjualan');
		$this->load->model('M_laporan');
	}
	function index(){
	if($this->session->userdata('akses')=='1'){
		$data['data']=$this->M_barang->tampil_barang();
		$data['kat']=$this->M_kategori->tampil_kategori();
		$data['jual_bln']=$this->M_laporan->get_bulan_jual();
		$data['jual_thn']=$this->M_laporan->get_tahun_jual();
		$this->load->view('admin/v_laporan',$data);
	}elseif($this->session->userdata('akses')=='3'){
		$data['data']=$this->M_barang->tampil_barang();
		$data['kat']=$this->M_kategori->tampil_kategori();
		$data['jual_bln']=$this->M_laporan->get_bulan_jual();
		$data['jual_thn']=$this->M_laporan->get_tahun_jual();
		$this->load->view('admin/v_laporan',$data);
	}
	else{
        echo "Halaman tidak ditemukan";
    }
	}
	function lap_stok_barang(){
		$x['data']=$this->M_laporan->get_stok_barang();
		$this->load->view('admin/laporan/v_lap_stok_barang',$x);
	}
	function lap_data_barang(){
		$x['data']=$this->M_laporan->get_data_barang();
		$this->load->view('admin/laporan/v_lap_barang',$x);
	}
	function lap_data_penjualan(){
		$x['data']=$this->M_laporan->get_data_penjualan();
		$x['jml']=$this->M_laporan->get_total_penjualan();
		$this->load->view('admin/laporan/v_lap_penjualan',$x);
	}
	function lap_penjualan_pertanggal(){
		$tanggal=$this->input->post('tgl');
		$x['jml']=$this->M_laporan->get_data__total_jual_pertanggal($tanggal);
		$x['data']=$this->M_laporan->get_data_jual_pertanggal($tanggal);
		$this->load->view('admin/laporan/v_lap_jual_pertanggal',$x);
	}
	function lap_penjualan_perbulan(){
		$bulan=$this->input->post('bln');
		$x['jml']=$this->M_laporan->get_total_jual_perbulan($bulan);
		$x['data']=$this->M_laporan->get_jual_perbulan($bulan);
		$this->load->view('admin/laporan/v_lap_jual_perbulan',$x);
	}
	function lap_penjualan_pertahun(){
		$tahun=$this->input->post('thn');
		$x['jml']=$this->M_laporan->get_total_jual_pertahun($tahun);
		$x['data']=$this->M_laporan->get_jual_pertahun($tahun);
		$this->load->view('admin/laporan/v_lap_jual_pertahun',$x);
	}
	function lap_laba_rugi(){
		$bulan=$this->input->post('bln');
		$x['jml']=$this->M_laporan->get_total_lap_laba_rugi($bulan);
		$x['data']=$this->M_laporan->get_lap_laba_rugi($bulan);
		$this->load->view('admin/laporan/v_lap_laba_rugi',$x);
	}

	//lihat
	function view_lapbarang(){
		$a['data']=$this->M_laporan->get_data_barang();
		$this->load->view('admin/laporan/view_lap_barang',$a);
	}
	function view_lap_stok_barang(){
		$x['data']=$this->M_laporan->get_stok_barang();
		$this->load->view('admin/laporan/view_lap_stok_barang',$x);
	}
	function view_lap_data_penjualan(){
		$x['data']=$this->M_laporan->get_data_penjualan();
		$x['jml']=$this->M_laporan->get_total_penjualan();
		$this->load->view('admin/laporan/view_lap_penjualan',$x);
	}
	function view_lap_penjualan_pertanggal(){
		$tanggal=$this->input->post('tgl');
		$x['jml']=$this->M_laporan->get_data__total_jual_pertanggal($tanggal);
		$x['data']=$this->M_laporan->get_data_jual_pertanggal($tanggal);
		$this->load->view('admin/laporan/view_lap_jual_pertanggal',$x);
	}
	function view_lap_penjualan_perbulan(){
		$bulan=$this->input->post('bln');
		$x['jml']=$this->M_laporan->get_total_jual_perbulan($bulan);
		$x['data']=$this->M_laporan->get_jual_perbulan($bulan);
		$this->load->view('admin/laporan/view_lap_jual_perbulan',$x);
	}
	function view_lap_penjualan_pertahun(){
		$tahun=$this->input->post('thn');
		$x['jml']=$this->M_laporan->get_total_jual_pertahun($tahun);
		$x['data']=$this->M_laporan->get_jual_pertahun($tahun);
		$this->load->view('admin/laporan/view_lap_jual_pertahun',$x);
	}
	function view_lap_laba_rugi(){
		$bulan=$this->input->post('bln');
		$x['jml']=$this->M_laporan->get_total_lap_laba_rugi($bulan);
		$x['data']=$this->M_laporan->get_lap_laba_rugi($bulan);
		$this->load->view('admin/laporan/view_lap_laba_rugi',$x);
	}
}