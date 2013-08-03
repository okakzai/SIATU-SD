<h3>UPLOAD FOTO: SUKSES</h3>
<ul>
	<?php foreach ($upload_data as $item => $value):?>
	<li><?php echo $item;?>: <?php echo $value;?></li>
	<?php endforeach; ?>
</ul>
<p>
	<?php echo anchor('admin/fotoadmin','UPLOAD FOTO LAGI');?>
</p>
<script type="text/javascript">
	$(document).ready(function(){
		$('#editadmin').css('background','white');
		$('#editadmin').css('color','black');
	});
</script>