Halaman Absensi Guru Hari <font color="blue" id="hari"><?echo $hari;?></font> Tanggal <font color="blue"><?echo $tgl;?></font>
<table class="siswa" align="center">
	<tbody>
		<tr>
			<th align="center">No.</th>
			<th align="center">NIP</th>
			<th align="center">Nama Lengkap</th>
			<th align="center">Mata Pelajaran</th>
			<th align="center">ABSENSI</th>
		</tr>
		<?php 
			$no=1; 
			foreach ($guru as $data):
				$bagi=$no%2;
				if($bagi==0){$warna="#E1E1E1";}
				else {$warna="#EEEEEE";}
		?>
		<tr class="<?php echo $bagi;?>" bgcolor="<?php echo $warna;?>">
			<td align="center"><?php echo $no;?>.</td>
			<td align="center"><?php echo $data->nip;?></td>
			<td align="left"><?php echo $data->nama;?></td>
			<td align="center"><?php echo $data->matpel;?></td>
			<td align="center">
				<?php
					echo anchor('admin/viewabsensiguru/'.$data->guruid,'KLIK DI SINI',array('id'=>'absen'));
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
		$('#editabsensi').css('background','white');
		$('#editabsensi').css('color','black');
	});
</script>
