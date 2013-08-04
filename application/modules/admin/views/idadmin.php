<div id="log">
	<center>
	<?php echo form_open('admin/simpanidadmin')?>
		<table class="log" align="center">
			<tr>
				<td>Username Lama</td>
				<td>&nbsp;</td>
				<td>
					<?php 
						$usernamelama=array('name'=>'usernamelama','id'=>'usernamelama','value'=>set_value('usernamelama'));
						echo form_input($usernamelama);
					?>
				</td>
			</tr>
			<tr>
				<td>Password Lama</td>
				<td>&nbsp;</td>
				<td>
					<?php 
						$passwordlama=array('name'=>'passwordlama','id'=>'passwordlama','value'=>set_value('passwordlama'));
						echo form_password($passwordlama);
					?>
				</td>
			</tr>
			<tr>
				<td>Username Baru</td>
				<td>&nbsp;</td>
				<td>
					<?php 
						$usernamebaru=array('name'=>'usernamebaru','id'=>'usernamebaru','value'=>set_value('usernamebaru'));
						echo form_input($usernamebaru);
					?>
				</td>
			</tr>
			<tr>
				<td>Password Baru</td>
				<td>&nbsp;</td>
				<td>
					<?php 
						$passwordbaru=array('name'=>'passwordbaru','id'=>'passwordbaru','value'=>set_value('passwordbaru'));
						echo form_password($passwordbaru);
					?>
				</td>
			</tr>
			<tr>
				<td>Password Baru</td>
				<td>&nbsp;</td>
				<td>
					<?php 
						$konfirmasi=array('name'=>'konfirmasi','id'=>'konfirmasi','value'=>set_value('konfirmasi'));
						echo form_password($konfirmasi);
					?>
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td align="center" colspan="3"><?php echo form_submit('submit','UPDATE');?></td>
			</tr>
		</table>
	</center>
	<?php echo form_close()?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#editadmin').css('background','white');
		$('#editadmin').css('color','black');
	});
</script>