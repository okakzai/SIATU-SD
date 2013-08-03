<div id="container" class="box">
	<div id="intro">
    	<div id="intro-in">
        	<h2></h2>
        	<p class="intro"></b></p>
      	</div>
    </div>
	<div id="obsah" class="content box">
    	<div class="in">
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
						<td align="center" colspan="3"><?php echo form_submit('submit','log in guru');?></td>
					</tr>
				</table>
				</center>
				<?php echo form_close()?>
			</div>
			<p class="subcontent"></p>
	  	</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#guru').css('background','white');
		$('#guru').css('color','black');
	});
</script>