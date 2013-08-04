<div id="log">
	<center>
		<h3>UPLOAD FOTO ADMIN</h3>
		<br />
		<?php echo form_open_multipart('admin/simpanfotoadmin')?>
		<?php if(isset($error)) echo $error;?>
		<input type="file" name="userfile" size="20" />
		<br /><br />
		<input type="submit" value="upload" />
	</center>
	<?php echo form_close()?>
</div>
<br />
<div id="log">
	<center>
		<h3>UPLOAD FOTO KEGIATAN</h3>
		<br />
		<?php echo form_open_multipart('admin/simpanfotokegiatan')?>
		<?php if(isset($error)) echo $error;?>
		<input type="file" name="userfile" size="20" />
		<br /><br />
		<input type="submit" value="upload" />
	</center>
	<?php echo form_close()?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#editadmin').css('background','white');
		$('#editadmin').css('color','black');
	});
</script>