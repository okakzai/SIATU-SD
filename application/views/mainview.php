<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $this->config->item('app_name');?> | <?php echo $this->config->item('client_name');?></title>
	<link rel="shortcut icon" href="<?php echo base_url()?>asset/img/logo.gif" />
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/jquerymenu.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/easyslider.css" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url()?>asset/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>asset/js/easyslider.js"></script>
</head>
<body>
	<div id="layout">
  		<div id="header">
			<div id="icon">
				<img src="<?php echo base_url()?>asset/img/logo.gif" /> 
			</div>
			<div id="title">
				<div id="titletop">
					<?php echo anchor(base_url(),$this->config->item('app_name'));?>
				</div>
				<div id="titlemiddle">
					<?php echo $this->config->item('client_name');?>
				</div>
				<div id="titlebottom">
					<?php echo $this->config->item('addr_name');?> 
				</div>
			</div>
  		</div>
  		<hr class="noscreen" />
  		<div id="nav" class="box">
  			<div class='hompimenu'>
    			<ul>
					<li><?php echo anchor('beranda','Beranda','id="beranda"');?></li>
					<li><?php echo anchor('psb','Pendaftaran Siswa','id="psb"');?></li>
					<li><?php echo anchor('guru','Guru','id="guru"');?></li>
					<li><?php echo anchor('laporan','Laporan','id="laporan"');?></li>
					<li><?php echo anchor('admin','Admin','id="admin"');?></li>
					<li><?php echo anchor('resolusi','Deteksi Browser','id="resolusi"');?></li>
				</ul>
			</div>
  		</div>
  		<hr class="noscreen" />
		<?php 
			if(!isset($content)){ die();}
			$this->load->view($content);
		?>
  		<hr class="noscreen" />
  		<div id="footer" class="shadow">
    		<div class="f-left">
    			<!--&copy; Copyright <?php echo date('Y');?>--> 
    			<?php 
    				//$webdev_name=$this->config->item('webdev_name');
					//$webdev_link=$this->config->item('webdev_link');
					//echo anchor($webdev_link,$webdev_name,'target="_blank"');
    			?>
				<!--. All rights reserved-->
				<center>Develop by <a href="mailto:okakzai@gmail.com">Zainal Abidin</a>
    		</div>
  		</div>
	</div>  		
</body> 
</html>