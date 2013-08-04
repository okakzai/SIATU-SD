<?php
	$jenis2=array('1'=>'Mid 1','2'=>'Semester 1','3'=>'Mid 2','4'=>'Semester 2');
	echo form_dropdown('jenis2',$jenis2,'1','id="jenis2" style="font-size:12px;"');
?> 
&nbsp;
<?php
	$jenis1=array('1'=>'PR','2'=>'Tugas','3'=>'Ujian');
	echo form_dropdown('jenis1',$jenis1,'1','id="jenis1" style="font-size:12px;"');
?>
&nbsp; 
<b>Masukkan NIS Anda:</b> 
<?php
	$nis=array('id'=>'nis');
	echo form_input($nis);
?>
&nbsp; 
<?php echo form_button('button','Tampilkan','id="buttonnilai"');?> 
<script>
	$('#nilai').css('background','white');
	$('#nilai').css('color','black');
</script>