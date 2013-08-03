<?php 
	if(isset($tabelsiswa))
	{
?>
	<table class="siswa" align="center">
		<tbody>
			<tr>
				<th>No.</th>
				<th>NIS</th>
				<th>NISN</th>
				<th>Nama Lengkap</th>
				<th>L/P</th>
				<th>Tingkat</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Agama</th>
				<th>Nama Ayah</th>
				<th>Pekerjaan Ayah</th>
				<th>Nama Ibu</th>
				<th>Pekerjaan Ibu</th>
				<th>Alamat</th>
				<th>Keterangan</th>
			</tr>
			<?php 
				$no=1; 
				foreach ($tabelsiswa as $data):
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
				<td align="center"><?php echo $data->kelas;?></td>
				<td align="center"><?php echo $data->tempat_lahir;?></td>
				<td align="center"><?php echo $data->tgl_lahir;?></td>
				<td align="center"><?php echo $data->agama;?></td>
				<td align="center"><?php echo $data->nama_ayah;?></td>
				<td align="center"><?php echo $data->kerja_ayah;?></td>
				<td align="center"><?php echo $data->nama_ibu;?></td>
				<td align="center"><?php echo $data->kerja_ibu;?></td>
				<td align="center"><?php echo $data->alamat;?></td>
				<td align="center"><?php echo $data->ket;?></td>
			</tr>
			<?php 
				$no++;
				endforeach;
		}
			?>
	</tbody>
</table>

	

