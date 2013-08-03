<?php
	$kelas=array('0'=>'Pilih Kelas:','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'1-6');
	echo form_dropdown('combosiswa',$kelas,'0','id="combosiswa" style="font-size:10px;"');
?>
&nbsp;
<?php echo form_button('buttonsiswa','Tampilkan','id="buttonsiswa"');?>
<script>
	$('#siswa').css('background','white');
	$('#siswa').css('color','black');
</script>
