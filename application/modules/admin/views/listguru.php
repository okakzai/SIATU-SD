<h3>EDIT DATA GURU</h3> 
<table class="siswa" align="center">
	<tbody>
		<tr>
			<th align="center">No.</th>
			<th align="center">NIP</th>
			<th align="center">NUPTK</th>
			<th align="center">Nama Lengkap</th>
			<th align="center">L/P</th>
			<th align="center">Tempat Lahir</th>
			<th align="center">Tanggal Lahir</th>
			<th align="center">Agama</th>
			<th align="center">Alamat</th>
			<th align="center">Mata Pelajaran</th>
			<th align="center">Username</th>
			<th align="center">Password</th>
			<th align="center">EDIT</th>
		</tr>
		<?php  
			foreach ($guru as $data):
				$no=$data->guruid;
				$bagi=$no%2;
				if($bagi==0){$warna="#E1E1E1";}
				else {$warna="#EEEEEE";}
				$tgl=$data->tgl;
				$searchtgl=array('0');
				$replacetgl=array('');
				$tgl=str_replace($searchtgl,$replacetgl,$tgl);
				$thn=$data->thn;
				$searchthn=array('0');
				$replacethn=array('');
				$thn=str_replace($searchthn,$replacethn,$thn);
				$bln=$data->bln;
				$searchbln=array('0','1','2','3','4','5','6','7','8','9','10','11','12');
				$replacebln=array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
				$bln=str_replace($searchbln,$replacebln,$bln);
				$gender=$data->gender;
				$searchgender=array('0','1','2');
				$replacegender=array('','L','P');
				$gender=str_replace($searchgender,$replacegender,$gender);
				$agama=$data->agama;
				$searchagama=array('0','1','2','3','4','5','6');
				$replaceagama=array('','Islam','Kristen','Katolik','Hindu','Budha','Kong Hu Cu');
				$agama=str_replace($searchagama,$replaceagama,$agama);
		?>
		<tr class="<?php echo $bagi;?>" bgcolor="<?php echo $warna;?>">
			<td align="center"><?php echo $no;?>.</td>
			<td align="center"><?php echo $data->nip;?></td>
			<td></td>
			<td align="left"><?php echo $data->nama;?></td>
			<td align="center"><?php echo $gender;?></td>
			<td align="center"><?php echo $data->tempat_lahir;?></td>
			<td align="center"><?php echo $tgl.' '.$bln.' '.$thn;?></td>
			<td align="center"><?php echo $agama;?></td>
			<td align="center"><?php echo $data->alamat;?></td>
			<td align="center"><?php echo $data->matpel;?></td>
			<td align="center"><?php echo $data->username;?></td>
			<td align="center"><?php echo $data->password;?></td>
			<td align="center">
				<?php
					echo anchor('admin/editguru/'.$no,'KLIK DI SINI',array('id'=>'absen'));
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
		$('#editguru').css('background','white');
		$('#editguru').css('color','black');
	});
</script>
