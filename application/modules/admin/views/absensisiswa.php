<?php
	$now=date("Y");
	$thn['#']='Pilih Tahun:';
	for($n=2009; $n<=$now; $n++){$thn[$n]=$n;}
	echo form_dropdown('lapthn',$thn,set_value('thn'),'id="lapthn" style="font-size:10px;"');
?>
&nbsp;
<?php
	$bln=array('#'=>'Pilih Bulan:','1'=>'Januari','2'=>'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember');
	echo form_dropdown('lapbln',$bln,set_value('bln'),'id="lapbln" style="font-size:10px;"');
?> 
&nbsp; 
<?php echo form_button('button','Tampilkan','id="buttonabsensi"');?> 
<script>
	$('#editabsensi').css('background','white');
	$('#editabsensi').css('color','black');
</script>