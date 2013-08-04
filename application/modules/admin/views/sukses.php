<center>
	<h3><?php if(isset($proses)) echo $proses;?> DATA GURU: SUKSES</h3>
	<br />
	<?php if($proses=='ABSENSI') echo form_button('kembali','KEMBALI','id="kembali"');?>
</center>
<script type="text/javascript">
	$(document).ready(function(){
		$('#kembali').click(function() {
			$.ajax({
				type:'POST',
				url:'<?php echo site_url();?>/admin/ajaxabsensiguru',       
				success: function (status){                 
					$('.in').html(status);
				}	  
			});
		});
		<?php if($proses=='ABSENSI'){?>
			$('#editabsensi').css('background','white');
			$('#editabsensi').css('color','black');
		<?php }else{?>
			$('#editguru').css('background','white');
			$('#editguru').css('color','black');
		<?php }?>
	});
</script>