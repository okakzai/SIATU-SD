<?php
	$str1=explode(" ",date('r'));
	$str2=explode("0",$str1[5]);
	if ($str2[1]==null) $dif=0;
	else $dif=$str2[1];
	$gmt=time()+($dif*60*60);
	$wib=$gmt+(7*60*60);
?>
Halaman Absensi Kelas <font color="blue"><?php echo $kelas;?></font> Hari <font color="blue" id="hari"><?php echo $hari;?></font> Tanggal <font color="blue"><?php echo $tgl;?></font>
<?php 
	if(isset($carinis)){
		foreach ($carinis as $data):
?>
<center>
	<table class="absensi">
		<tr>
			<td>NIS</td>
			<td align="center">:</td>
			<td><div id="abnis"><?php echo $data->nis;?></div></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td align="center">:</td>
			<td><div id="abkelas"><?php echo $data->kelas;?></div></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td align="center">:</td>
			<td><div id="abnama"><?php echo $data->nama;?></div></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td align="center">:</td>
			<td>
				<?php
					$ket=array('1'=>'Sakit','2'=>'Izin','3'=>'Alpha');
					echo form_dropdown('ket',$ket,'1','id="ket" style="font-size:10px;"');
				?>
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td><?php echo form_button('simpan','ABSEN','id="simpan"');?></td>
			<td>&nbsp;</td>
			<td><?php echo form_button('kembali','KEMBALI','id="kembali"');?></td>
		</tr>
	</table>
</center>
<?php endforeach;}?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#absensi').css('background','white');
		$('#absensi').css('color','black');
		$('#kembali').click(function() {
			$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/guru/ajaxabsensi/<?php echo $kelas?>',       
					success: function (status){                 
						$('.in').html(status);
					}	  
			});
		});
		$('#simpan').click(function() {
			$('#loading').html('Loading...');
			var ket=$('#ket option:selected').text();
			if (ket!='Pilih Keterangan:'){
				var nama=$('#abnama').text();
				var nis=$('#abnis').text();
				var kelas=$('#abkelas').text();
				var hari=$('#hari').text();
				var tgl=<?php echo date('d',$wib)?>;
				var bln=<?php echo date('m',$wib)?>;
				var thn=<?php echo date('Y',$wib)?>;
				$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/guru/cekabsensi',    
					data: 'tgl='+tgl+'&bln='+bln+'&thn='+thn+'&nis='+nis,   
					success: function (status){                 
						if(status=='0'){
							var r=confirm('Anda yakin bahwa '+nama+' tidak masuk sekolah hari ini karena '+ket+'?');	
							if (r==true){	
								$.ajax({
									type:'POST',
									url:'<?php echo site_url();?>/guru/simpanabsensi',    
									data: 'ket='+ket+'&nis='+nis+'&kelas='+kelas+'&nama='+nama+'&hari='+hari+'&tgl='+tgl+'&bln='+bln+'&thn='+thn,   
									success: function (status){                 
										alert(status);
									}	  
								});
							}else{
								$('#loading').html(null);
							}
						}else if (status=='1') {
							alert('SISWA SUDAH ABSEN');
						}
					}	  
				});
			}else{
				$('#loading').html(null);
			}		
		});
	});
</script>
		