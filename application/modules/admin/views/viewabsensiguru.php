Halaman Absensi Guru Hari <font color="blue" id="hari"><?php echo $hari;?></font> Tanggal <font color="blue"><?php echo $tgl;?></font>
<?php
	foreach ($guru as $data){
?>
</table>
<?php echo form_open('admin/simpanabsenguru');?>
<center>
<table class="absensi">
	<tr>
        <td valign="top">ID Guru</td>
        <td>
          	<?php
          		$id=array('value'=>$data->guruid,'name'=>'id','readonly'=>'readonly','style'=>'color:blue;text-align:left'); 
          		echo form_input($id);
			?>
         </td>
    </tr>
	<tr>
		<td>NIP</td>
		<td><div id="abnis"><?php echo $data->nip;?></div></td>
	</tr>
	<tr>
		<td>Mata Pelajaran</td>
		<td><div id="abkelas"><?php echo $data->matpel;?></div></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><div id="abnama"><?php echo $data->nama;?></div></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td>
			<?php
				$ket=array('1'=>'Sakit','2'=>'Izin','3'=>'Alpha');
				echo form_dropdown('ket',$ket,'0','id="ket" style="font-size:12px;"');
			?>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><?php echo form_submit('guru','ABSEN');?></td>
		<td><?php echo form_button('kembali','KEMBALI','id="kembali"');?></td>
	</tr>
</table>
</center>
<?php echo form_close();?>
<?php }?>
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
		$('#editabsensi').css('background','white');
		$('#editabsensi').css('color','black');
	});
</script>
