<!DOCTYPE html>
<html>
  <head>
    <title>Masuk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url().'assets/css/stylesl.css'?>" rel="stylesheet">
	
   
  </head>
  <body class="login-bg">
  

	<div class="page-content container mt-4">
		<div class="row">
			<div class="login-logo text-center" >
				<h1><a style="text-decoration: none; color: olive;" href="#"><b>POINT</b> of <b>SALES</b><br></a></h1>
				<h4 style="font-weight: bold;">TOKO RAHAYU</h4>
			</div>
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
							<h4 style="color: olive ;" class="login-box-msg">Silahkan Login</h4>
							<h5 class="login-box-msg">Pada Form dibawah ini</h5>
			                <p><?php echo $this->session->flashdata('msg');?></p>
	                        <hr/>
	                        <form action="<?=base_url('Administrator/cekuser')?>" method="post" enctype="multipart/form-data">
	                        	<input class="form-control" type="text" name="username" placeholder="Username" required>
				                <input class="form-control" minlength="8" type="password" name="password" placeholder="Password" style="margin-bottom:1px;" required>
				                <div class="action">
				                    <button type="submit" class="btn btn-lg " style="width:310px;margin-top:0px; background-color: olive; color: white;">Login</button>
				                </div>
	                        </form>
			                                
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    
  </body>
</html>