<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Point of Sale </title>

    <!-- Bootstrap Core CSS -->
      <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
	    <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
	    <link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
      <link href="<?php echo base_url().'assets/css/4-col-portfolio.css'?>" rel="stylesheet">

      <style type="text/css">
      .bg {
           width: 100%;
           height: 100%;
           position: fixed;
           z-index: -1;
           float: left;
           left: 0;
           margin-top: -20px;
      }
      </style>
</head>

<body>
<!-- <img src="<?php echo base_url().'assets/img/bg2.jpg'?>" alt="gambar" class="bg" /> -->
    <!-- Navigation -->
   <?php 
        $this->load->view('admin/menu');
   ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:olive;">Selamat datang di
                    <small>Point of Sale Toko Rahayu</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
	<div class="mainbody-section text-center">
     <?php $h=$this->session->userdata('akses'); ?>
     <?php $u=$this->session->userdata('user'); ?>

        <!-- Projects Row -->
        <div class="row">
         <?php if($h=='1'){ ?> 
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo base_url().'admin/barang'?>" data-toggle="modal">
                           <i class="fa fa-archive"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_barang")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Jumlah Barang</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo base_url().'admin/kategori'?>" data-toggle="modal">
                           <i class="fa fa-sitemap"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_kategori")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Jumlah Kategori</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo base_url().'admin/pembelian'?>" data-toggle="modal">
                           <i class="fa fa-cubes"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_beli")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Jumlah Pembelian</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo base_url().'admin/penjualan'?>" data-toggle="modal">
                           <i class="fa fa-shopping-bag"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_jual")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Jumlah Penjualan</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <?php }?>


            <?php if($h=='2'){ ?> 
                  <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a  data-toggle="modal">
                           <i class="fa fa-archive"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_barang")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Jumlah Barang</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a  data-toggle="modal">
                           <i class="fa fa-sitemap"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_kategori")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Jumlah Kategori</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a  data-toggle="modal">
                           <i class="fa fa-cubes"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_beli")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Jumlah Pembelian</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo base_url().'admin/penjualan'?>" data-toggle="modal">
                           <i class="fa fa-shopping-bag"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_jual")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Jumlah Penjualan</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <?php }?>

            <?php if($h=='3'){ ?> 
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo base_url().'admin/laporan'?>" data-toggle="modal">
                           <i class="fa fa-file"></i><br>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b>7</b> Data Laporan</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <?php }?>
        </div>
        
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
        <?php if($h=='1'){ ?> 
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo base_url().'admin/retur'?>" data-toggle="modal">
                           <i class="fa fa-refresh"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_retur")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Retur Pembelian</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo base_url().'admin/suplier'?>" data-toggle="modal">
                           <i class="fa fa-truck"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_suplier")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Jumlah Supplier</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo base_url().'admin/pengguna'?>" data-toggle="modal">
                           <i class="fa fa-users"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_user")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Jumlah Pengguna</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo base_url().'admin/laporan'?>" data-toggle="modal">
                           <i class="fa fa-file"></i><br>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b>7</b> Data Laporan</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <?php }?>
            <?php if($h=='2'){ ?> 
                  <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a data-toggle="modal">
                           <i class="fa fa-refresh"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_retur")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Retur Pembelian</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a data-toggle="modal">
                           <i class="fa fa-truck"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_suplier")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Jumlah Supplier</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a data-toggle="modal">
                           <i class="fa fa-users"></i><br>
                           <?php $jmlc = $this->db->query("SELECT * FROM tbl_user")->num_rows(); ?>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b><?php echo $jmlc ?></b> Jumlah Pengguna</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a  data-toggle="modal">
                           <i class="fa fa-file"></i><br>
                              <span style="text-align:left;font-size:14px;padding-left:5px;" class="info-box-number"><b>7</b> Data Laporan</span>
                              <!-- <span style="text-align:left;font-size:14px;padding-left:5px;">Jumlah Barang</span> -->
                      </a>
                </div> 
            </div>
            <?php }?>
        </div>
        
		
        <!-- /.row -->
	
    <!-- /.container -->
    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/grafik/jquery.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/grafik/highcharts.js'?>"></script>

</body>

</html>
