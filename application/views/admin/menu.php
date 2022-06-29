 <style>
     .navbar-custom {
         background-color: black;
     }

     .navbar-custom .navbar-brand,
     .navbar-custom .navbar-text {
         color: white;
     }
     
 </style>
 <nav class="navbar navbar-custom navbar-fixed-top" style="background-color: deepskyblue;" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url().'welcome'?>">Dashboard</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <?php $h=$this->session->userdata('akses'); ?>
                    <?php $u=$this->session->userdata('user'); ?>
                    <?php if($h=='1'){ ?> 
                     <!--dropdown-->
                    
                    <!--ending dropdown-->
                    <li>
                        <a  href="<?php echo base_url().'admin/suplier'?>" class="<?=$this->uri->segment(2) == 'suplier' ? 'link-active':''?>"><span class="fa fa-truck"></span> Supplier</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url().'admin/kategori'?>" class="<?=$this->uri->segment(2) == 'kategori' ? 'link-active':''?>"><span class="fa fa-sitemap"></span> Kategori</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url().'admin/barang'?>" class="<?=$this->uri->segment(2) == 'barang' ? 'link-active':''?>"><span class="fa fa-shopping-cart"></span> Barang</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url().'admin/pembelian'?>" class="<?=$this->uri->segment(2) == 'pembelian' ? 'link-active':''?>"><span class="fa fa-cubes"></span> Pembelian</a>
                    </li>
                    <!-- <li class="dropdown">
                        <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Transaksi"><span class="fa fa-shopping-cart" aria-hidden="true"></span> Transaksi</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url().'admin/penjualan'?>"><span class="fa fa-shopping-bag" aria-hidden="true"></span> Penjualan (Eceran)</a></li> 
                            <li><a href="<?php echo base_url().'admin/penjualan_grosir'?>"><span class="fa fa-cubes" aria-hidden="true"></span> Penjualan (Grosir)</a></li> 
                        </ul>
                    </li> -->
                    <li>
                        <a  href="<?php echo base_url().'admin/retur'?>" class="<?=$this->uri->segment(2) == 'retur' ? 'link-active':''?>"><span class="fa fa-refresh"></span> Retur</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url().'admin/grafik'?>" class="<?=$this->uri->segment(2) == 'grafik' ? 'link-active':''?>"><span class="fa fa-line-chart"></span> Grafik</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url().'admin/laporan'?>" class="<?=$this->uri->segment(2) == 'laporan' ? 'link-active':''?>"><span class="fa fa-file"></span> Laporan</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url().'admin/pengguna'?>" class="<?=$this->uri->segment(2) == 'pengguna' ? 'link-active':''?>"><span class="fa fa-users"></span> Pengguna</a>
                    </li>
                    <?php }?>
                    <?php if($h=='2'){ ?> 
                      <!--dropdown-->
                    <li class="dropdown">
                        <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Transaksi"><span class="fa fa-shopping-cart" aria-hidden="true"></span> Transaksi</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url().'admin/penjualan'?>"><span class="fa fa-shopping-bag" aria-hidden="true"></span> Penjualan (Eceran)</a></li> 
                            <li><a href="<?php echo base_url().'admin/penjualan_grosir'?>"><span class="fa fa-cubes" aria-hidden="true"></span> Penjualan (Grosir)</a></li> 
                        </ul>
                    </li>
                    <!--ending dropdown-->
                    <?php }?>
                    <?php if($h=='3'){ ?> 
                      <li>
                            <a  href="<?php echo base_url().'admin/grafik'?>"><span class="fa fa-line-chart"></span> Grafik</a>
                        </li>
                        <li>
                            <a  href="<?php echo base_url().'admin/laporan'?>"><span class="fa fa-file"></span> Laporan</a>
                        </li>
                     <li>
                    <?php }?>
                     <li>
                        <a  href="<?php echo base_url().'administrator/logout'?>"><span class="fa fa-sign-out"></span> Logout</a>
                    </li>
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>