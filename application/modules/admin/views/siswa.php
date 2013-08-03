Edit Data Siswa Kelas <font color="blue"><?php echo $kelas;?></font>
<table class="siswa" align="center">
	<tbody>
		<tr>
			<th align="center">No.</th>
			<th align="center">NIS</th>
			<th align="center">NISN</th>
			<th align="center">Nama Lengkap</th>
			<th align="center">L/P</th>
			<th align="center">Tingkat</th>
			<th align="center">Tempat Lahir</th>
			<th align="center">Tanggal Lahir</th>
			<th align="center">Agama</th>
			<th align="center">Nama Ayah</th>
			<th align="center">Pekerjaan Ayah</th>
			<th align="center">Nama Ibu</th>
			<th align="center">Pekerjaan Ibu</th>
			<th align="center">Alamat</th>
			<th align="center">Keterangan</th>
			<th align="center">EDIT</th>
		</tr>
		<?php 
			$no=1; 
			foreach ($siswa as $data):
				$bagi=$no%2;
				if($bagi==0){$warna="#E1E1E1";}
				else {$warna="#EEEEEE";}
		?>
		<tr class="<?php echo $bagi;?>" bgcolor="<?php echo $warna;?>">
			<td align="center"><?php echo $no;?>.</td>
			<td align="center"><?php echo $data->nis;?></td>
			<td align="center"><?php echo $data->nisn;?></td>
			<td align="left"><?php echo $data->nama;?></td>
			<td align="center"><?php echo $data->gender;?></td>
			<td align="center"><font color="blue"><?php echo $data->kelas;?></font></td>
			<td align="center"><?php echo $data->tempat_lahir;?></td>
			<td align="center"><?php echo $data->tgl_lahir;?></td>
			<td align="center"><?php echo $data->agama;?></td>
			<td align="center"><?php echo $data->nama_ayah;?></td>
			<td align="center"><?php echo $data->kerja_ayah;?></td>
			<td align="center"><?php echo $data->nama_ibu;?></td>
			<td align="center"><?php echo $data->kerja_ibu;?></td>
			<td align="center"><?php echo $data->alamat;?></td>
			<td align="center"><?php echo $data->ket;?></td>
			<td align="center">
				<?php
					$nis=$data->nis;
					echo anchor('admin/editsiswa/'.$nis.'/'.$kelas,'KLIK DI SINI',array('id'=>'absen'));
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
		$('#editsiswa').css('background','white');
		$('#editsiswa').css('color','black');
	});
</script>
