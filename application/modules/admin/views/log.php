<div id="container" class="box">
	<div id="intro">
    	<div id="intro-in">
        	<h2></h2>
        	<p class="intro"></b></p>
      	</div>
    </div>
	<div id="obsah" class="content box">
    	<div class="in">
    		<div id="baris1">
				<div id="sela">
					<div id="log">
						<center>
						<?php echo form_open('log/in')?>
							<table class="log" align="center">
								<tr>
									<td>Username</td>
									<td>&nbsp;</td>
									<td><?php echo form_input('username','','id="username"');?></td>
								</tr>
								<tr>
									<td>Password</td>
									<td>&nbsp;</td>
									<td><?php echo form_password('password','','id="password"');?></td>
								</tr>
								<tr>
									<td colspan="3">&nbsp;</td>
								</tr>
								<tr>
									<td align="center" colspan="3"><?php echo form_submit('submit','log in admin');?></td>
								</tr>
							</table>
						</center>
						<?php echo form_close()?>
					</div>
				</div>
				<div id="selb">
					<div id="fotoadmin">
						<img src="<?php if(isset($foto)) echo base_url().'asset/img/'.$foto;?>" />
					</div>
					<div id="profiladmin">
						<table class="admin">
							<tr>
								<td><b>Nama</b></td><td>:</td><td>Arif Asikin</td>
							</tr>
							<tr>
								<td><b>Alamat</b></td><td>:</td><td>Ds. Mojorejo (RT02/RW01)<br />Kec. Kawedanan<br />Kab. Magetan - 63382</td>
							</tr>
							<tr>
								<td><b>Email</b></td><td>:</td><td>asikin.arif@yahoo.co.id</td>
							</tr>
							<tr>
								<td><b>No. HP</b></td><td>:</td><td>0351-7744668</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#admin').css('background','white');
		$('#admin').css('color','black');
	});
</script>