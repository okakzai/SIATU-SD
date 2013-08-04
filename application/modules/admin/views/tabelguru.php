<center>
	<h5>REKAP ABSENSI GURU SDN BOGEM 1 &nbsp; TAHUN PELAJARAN <font color="blue" id="thnajar"><?php echo $thn1.'/'.$thn2?></font> &nbsp; BULAN: <font color="blue" id="blnlap"><?php echo $bulan?></font> <font color="blue" id="thnlap"><?php echo $thn2?></font></h5>
</center>
<table class="siswa" align="center">
	<tbody>
		<tr>
			<th align="center" rowspan="2">No.</th>
			<th align="center" rowspan="2">NIP</th>
			<th align="center" rowspan="2">Nama Lengkap</th>
			<th align="center" colspan="3">JUMLAH</th>
		</tr>
		<tr>
			<th align="center">S</th>
			<th align="center">I</th>
			<th align="center">A</th>
		</tr>
		<?php 
			foreach($guru as $data){
		?>
		<?php 
				$guruid=$data->guruid;
				$bagi=$guruid%2;
				if($bagi==0)$warna="#E1E1E1";
				else $warna="#EEEEEE";
		?>
		<tr class="<?php echo $bagi;?>" bgcolor="<?php echo $warna;?>">
			<td align="center"><?php echo $guruid;?>.</td>
			<td align="center"><?php echo $data->nip;?></td>	
			<td align="center"><?php echo $data->nama;?></td>	
			<td align="center"><?php echo $sakit[$guruid];?></td>	
			<td align="center"><?php echo $izin[$guruid];?></td>	
			<td align="center"><?php echo $alpha[$guruid];?></td>	
		</tr>
		<?php $guruid++;}?>
		<tr>
			<td bgcolor="grey" style="color:white; font-weight:bold;" align="center" colspan="3">JUMLAH</td>
			<td bgcolor="grey" style="color:white; font-weight:bold;" align="center"><?php echo $jsakit;?></td>
			<td bgcolor="grey" style="color:white; font-weight:bold;" align="center"><?php echo $jizin;?></td>
			<td bgcolor="grey" style="color:white; font-weight:bold;" align="center"><?php echo $jalpha;?></td>
		</tr>
	</tbody>
</table>
	

