<center>
	<h5>DAFTAR ABSENSI UMUM SISWA SDN BOGEM 1 &nbsp; KELAS <font color="blue"><b><?php echo $kelas;?></b></font>&nbsp; TAHUN PELAJARAN <font color="blue" id="thnajar"><?php echo $thn1.'/'.$thn2?></font> &nbsp; BULAN: <font color="blue" id="blnlap"><?php echo $bulan?></font> <font color="blue" id="thnlap"><?php echo $thn2?></font></h5>
</center>
<table class="siswa" align="center">
	<tbody>
		<tr>
			<th align="center">No</th>
			<th align="center">Kelas</th>
			<th align="center">Hari</th>
			<th align="center">Tanggal</th>
			<th align="center">NIS</th>
			<th align="center">Nama</th>
			<th align="center">Keterangan</th>
		</tr>
		<?php 
			$no=1; 
			foreach ($edit as $data):
			$bagi=$no%2;
			if($bagi==0){$warna="#E1E1E1";}
			else {$warna="#EEEEEE";}
		?> 
		<tr class="<?php echo $bagi;?>" bgcolor="<?php echo $warna;?>">
			<td align="center"><?php echo $no;?>.</td>
			<td align="center"><font color="blue"><?php echo $data->kelas;?></font></td>
			<td align="center"><?php echo $data->hari;?></td>
			<td align="center"><?php echo $data->date;?></td>
			<td align="center"><?php echo $data->nis;?></td>
			<td align="center"><?php echo $data->nama;?></td>
			<td align="center"><?php echo $data->ket;?></td>
		</tr>
		<?php 
			$no++;
			endforeach;
		?>
	</tbody>
</table>
<script>
	$(document).ready(function(){
		$('.siswa tr').mouseenter(function() {
			$(this).css('background-color','#33FF33');
		});
		$('.siswa tr').mouseleave(function() {
			$('.0').css('background-color','#E1E1E1');
			$('.1').css('background-color','#EEEEEE');
		});	
	});
</script>	

