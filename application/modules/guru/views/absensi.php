Halaman Absensi Kelas <font color="blue"><?php echo $kelas;?></font> Hari <font color="blue" id="hari"><?php echo $hari;?></font> Tanggal <font color="blue"><?php echo $tgl;?></font>
<table class="siswa" align="center">
	<tbody>
		<tr>
			<th align="center">No.</th>
			<th align="center">NIS</th>
			<th align="center">Nama Lengkap</th>
			<th align="center">Tingkat</th>
			<th align="center">Absensi</th>
		</tr>
		<?php 
			$no=1; 
			foreach ($absensi as $data):
				$bagi=$no%2;
				if($bagi==0){$warna="#E1E1E1";}
				else {$warna="#EEEEEE";}
		?>
		<tr class="<?php echo $bagi;?>" bgcolor="<?php echo $warna;?>">
			<td align="center"><?php echo $no;?>.</td>
			<td align="center"><?php echo $data->nis;?></td>
			<td align="left"><?php echo $data->nama;?></td>
			<td align="center"><?php echo $data->kelas;?></td>
			<td align="center">
				<?php
					$nis=$data->nis;
					echo anchor('guru/viewabsensi/'.$nis.'/'.$kelas,'KLIK DI SINI',array('id'=>'absen'));
				?>
			</td>		
		</tr>
		<?php
			$no++;
			endforeach;
		?>
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		$('.siswa tr').mouseenter(function() {
			$(this).css('background-color','#33FF33');
		});
		$('.siswa tr').mouseleave(function() {
			$('.0').css('background-color','#E1E1E1');
			$('.1').css('background-color','#EEEEEE');
		});
		$('#absensi').css('background','white');
		$('#absensi').css('color','black');
	});
</script>
