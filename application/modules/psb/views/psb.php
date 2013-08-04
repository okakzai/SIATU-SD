<div id="container" class="box">
	<div id="intro">
      	<div id="intro-in">
        	<h2>Pengisian Data Siswa</h2>
        	<p class="intro">Form pendaftaran ini hanya untuk siswa. Harap mengisi data dengan sejujur-jujurnya dan lengkap.</p>
      	</div>
    </div>
    <div id="obsah" class="content box">
      	<div class="in">
        	<?php echo form_open('psb/simpan');?>
          	<table class="form">
          		<tr>
          			<td valign="top">NIS</td>
          			<td>
          				<?php
          					$count=1963+($row-107);
          					$nis=array('value'=>$count,'name'=>'nis','readonly'=>'readonly','style'=>'color:blue;text-align:left'); 
          					echo form_input($nis);
						?>
          			</td>
          		</tr>
          		<tr>
          			<td valign="top">NISN (Bila Ada)</td>
          			<td>
						<?php 
          					$nisn=array('name'=>'nisn','value'=>set_value('nisn'));
          					echo form_input($nisn);
          				?>          		
          			</td>
          		</tr>
          		<tr>
          			<td valign="top">Nama Lengkap</td>
          			<td>
          				<?php 
          					$nama=array('name'=>'nama','value'=>set_value('nama'));
          					echo form_input($nama);
          				?>
          			</td>
          		</tr>
          		<tr>
          			<td valign="top">Jenis Kelamin</td>
          			<td>
          				<?php
							$gender=array('#'=>'Pilih Jenis Kelamin:','1'=>'Laki-laki','2'=>'Perempuan');
							echo form_dropdown('gender',$gender,set_value('gender'),'id="gender"');
						?>
          			</td>
          		</tr>
          		<tr>
          			<td valign="top">Tempat Lahir</td>
          			<td>
          				<?php 
          					$tempat_lahir=array('name'=>'tempat_lahir','value'=>set_value('tempat_lahir'));
          					echo form_input($tempat_lahir);
          				?>
          			</td>
          		</tr>
          		<tr>
          			<td valign="top">Tanggal Lahir</td>
          			<td>
						<?php
							$tgl['#']='Pilih Tanggal:';
							for($n=1; $n<=31; $n++){$tgl[$n]=$n;}
							echo form_dropdown('tgl',$tgl,set_value('tgl'),'id="tgl"');
						?>
						&nbsp;
						<?php
          					$bln=array('#'=>'Pilih Bulan:','1'=>'Januari','2'=>'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember');
							echo form_dropdown('bln',$bln,set_value('bln'),'id="bln"');
						?>
						&nbsp;
						<?php
          					$now=date("Y");
							$thn['#']='Pilih Tahun:';
							for($n=1990; $n<=$now; $n++){$thn[$n]=$n;}
							echo form_dropdown('thn',$thn,set_value('thn'),'id="thn"');
						?>
          			</td>
          		</tr>
          		<tr>
          			<td valign="top">Agama</td>
          			<td>
          				<?php
							$agama=array('#'=>'Pilih Agama:','1'=>'Islam','2'=>'Kristen','3'=>'Katolik','4'=>'Hindu','5'=>'Budha','6'=>'Kong Hu Cu');
							echo form_dropdown('agama',$agama,set_value('agama'),'id="agama"');
						?>
          			</td>
          		</tr>
          		<tr>
          			<td valign="top">Nama Ayah</td>
          			<td>
          				<?php 
          					$nama_ayah=array('name'=>'nama_ayah','value'=>set_value('nama_ayah'));
          					echo form_input($nama_ayah);
          				?>
          			</td>
          		</tr>
          		<tr>
          			<td valign="top">Pekerjaan Ayah</td>
          			<td>
          				<?php 
          					$kerja_ayah=array('name'=>'kerja_ayah','value'=>set_value('kerja_ayah'));
          					echo form_input($kerja_ayah);
          				?>
          			</td>
          		</tr>
          		<tr>
          			<td valign="top">Nama Ibu</td>
          			<td>
          				<?php 
          					$nama_ibu=array('name'=>'nama_ibu','value'=>set_value('nama_ibu'));
          					echo form_input($nama_ibu);
          				?>
          			</td>
          		</tr>
          		<tr>
          			<td valign="top">Pekerjaan Ibu</td>
          			<td>
          				<?php 
          					$kerja_ibu=array('name'=>'kerja_ibu','value'=>set_value('kerja_ibu'));
          					echo form_input($kerja_ibu);
          				?>
          			</td>
          		</tr>
          		<tr>
          			<td valign="top">Alamat</td>
          			<td>
          				<?php 
          					$alamat=array('name'=>'alamat','value'=>set_value('alamat'));
          					echo form_input($alamat);
          				?>
          			</td>
          		</tr>
          		<tr>
          			<td valign="top">Kelas</td>
          			<td>
          				<?php
          					$kelas=array('#'=>'Pilih Kelas:','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6');
							echo form_dropdown('kelas',$kelas,set_value('kelas'),'id="kelas"');
						?>
          			</td>
          		</tr>
          		<tr>
          			<td valign="top">Keterangan (Bila Ada)</td>
          			<td><?php echo form_textarea('ket');?></td>
          		</tr>
          		<tr>
          			<td valign="top"></td>
          			<td><?php echo form_submit('submit','Daftar')?></td>
          		</tr>
          	</table>        
          	<?php echo form_close()?>        
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#psb').css('background','white');
		$('#psb').css('color','black');
	});
</script>