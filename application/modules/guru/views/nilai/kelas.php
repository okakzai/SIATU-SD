<h3>Halaman Input Nilai <font color="blue">
<?php echo $matpel;?>
</font>
</h3>
<table class="siswa" align="center">
	<tbody>
		<tr>
			<th align="center">No.</th>
			<th align="center">NIS</th>
			<th align="center">Nama Lengkap</th>
			<th align="center">Tingkat</th>
			<th align="center">Nilai Mapel</th>
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
			<td align="left"><?php echo $data->nama;?></td>
			<td align="center"><?php echo $data->kelas;?></td>
			<td align="center">
				<?php
					$guruid=$this->session->userdata('id');
					$nis=$data->nis;
					echo anchor('guru/inputnilai/'.$nis.'/'.$guruid,'KLIK DI SINI',array('id'=>'absen'));
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
		$('#nilai').css('background','white');
		$('#nilai').css('color','black');
	});
</script>

