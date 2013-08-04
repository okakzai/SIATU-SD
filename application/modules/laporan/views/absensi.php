<?php
	$now=date("Y");
	$thn['#']='Pilih Tahun:';
	for($n=2009; $n<=$now+17; $n++){$thn[$n]=$n;}
	echo form_dropdown('lapthn',$thn,set_value('thn'),'id="lapthn" style="font-size:10px;"');
?>
&nbsp;
<?php
	$bln=array('#'=>'Pilih Bulan:','1'=>'Januari','2'=>'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember');
	echo form_dropdown('lapbln',$bln,set_value('bln'),'id="lapbln" style="font-size:10px;"');
?> 
&nbsp;
<?php
	$kelas=array('#'=>'Pilih Kelas:','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6');
	echo form_dropdown('lapbln',$kelas,set_value('kelas'),'id="lapkelas" style="font-size:10px;"');
?>  
<?php echo form_button('button','Tampilkan','id="buttonabsensi"');?> 
<script>
	$(document).ready(function(){
		$('#buttonabsensi').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url();?>asset/img/loading.gif" alt="Loading" /></div>');
			var lapthn = $('#lapthn option:selected').text();
			var lapbln = $('#lapbln option:selected').val();
			var lapkelas = $('#lapkelas option:selected').val();
			if((lapthn=='Pilih Tahun:')||(lapbln=='#')){                 
				$('.subcontent').empty();
			}else{
				$.ajax({
					type:'POST',
					url:'<?echo site_url();?>/laporan/tabelabsensi',    
					data: 'thn='+lapthn+'&bln='+lapbln+'&kelas='+lapkelas,   
					success: function (absensi){                 
						$('.subcontent').html(absensi);
					}	  
				});
			}
		});
		$('#absensi').css('background','white');
		$('#absensi').css('color','black');
	});
</script>