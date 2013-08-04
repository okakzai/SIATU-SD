	<table class="siswa" align="center">
		<tbody>
			<tr>
				<th rowspan="2" align="center">No.</th>
				<th rowspan="2" align="center">NIS</th>
				<th rowspan="2" align="center">Nama Lengkap</th>
				<th rowspan="2" align="center">Tingkat</th>
				<th colspan="14" align="center">Nilai</th>
			</tr>
			<tr>
				<th align="center">PA</th>
				<th align="center">PKN</th>
				<th align="center">BIN</th>
				<th align="center">MAT</th>
				<th align="center">IPA</th>
				<th align="center">IPS</th>
				<th align="center">SBK</th>
				<th align="center">PJK</th>
				<th align="center">BJW</th>
				<th align="center">BING</th>
				<th align="center">Jumlah</th>
				<th align="center">Rata2</th>
				<th align="center">PRAM</th>
				<th align="center">TIK</th>
			</tr>
			<tr>
				<td align="center">1.</td>
				<td align="center"><?php echo $nis;?></td>
				<td align="center"><?php echo $nama;?></td>
				<td align="center"><?php echo $kelas;?></td>
				<td align="center"><?php if(isset($pa)) echo $pa;?></td>
				<td align="center"><?php if(isset($pkn)) echo $pkn;?></td>
				<td align="center"><?php if(isset($bin)) echo $bin;?></td>
				<td align="center"><?php if(isset($mat)) echo $mat;?></td>
				<td align="center"><?php if(isset($ipa)) echo $ipa;?></td>
				<td align="center"><?php if(isset($ips)) echo $ips;?></td>
				<td align="center"><?php if(isset($sbk)) echo $sbk;?></td>
				<td align="center"><?php if(isset($pjk)) echo $pjk;?></td>
				<td align="center"><?php if(isset($bjw)) echo $bjw;?></td>
				<td align="center"><?php if(isset($bing)) echo $bing;?></td>
				<td align="center"><?php if(isset($jumlah)) echo $jumlah;?></td>
				<td align="center"><?php if(isset($rata2)) echo $rata2;?></td>
				<td align="center"><?php if(isset($pram)) echo $pram;?></td>
				<td align="center"><?php if(isset($tik)) echo $tik;?></td>
			</tr>
	</tbody>
</table>

	

