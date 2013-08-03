Edit Data Siswa Kelas <font color="blue"><?php echo $kelas;?></font>
<?php echo form_open('admin/updatesiswa');?>
<?php foreach ($editsiswa as $data){?>
<table class="form">
	<tr>
        <td valign="top">NIS</td>
        <td>
          	<?php
          		$nis=array('value'=>$data->nis,'name'=>'nis','readonly'=>'readonly','style'=>'color:blue;text-align:left'); 
          		echo form_input($nis);
			?>
         </td>
    </tr>
    <tr>
    	<td valign="top">NISN (Bila Ada)</td>
        <td>
			<?php 
          		$nisn=array('name'=>'nisn','value'=>$data->nisn);
          		echo form_input($nisn);
          	?>          		
        </td>
    </tr>
    <tr>
        <td valign="top">Nama Lengkap</td>
       	<td>
          	<?php 
          		$nama=array('name'=>'nama','value'=>$data->nama);
          		echo form_input($nama);
          	?>
        </td>
    </tr>
    <tr>
        <td valign="top">Jenis Kelamin</td>
        <td>
          	<?php
          		$LP=$data->gender;
				if($LP=='L') $kelamin='1';
				elseif($LP=='P') $kelamin='2';
				$gender=array('#'=>'Pilih Jenis Kelamin:','1'=>'Laki-laki','2'=>'Perempuan');
				echo form_dropdown('gender',$gender,$kelamin,'id="gender"');
			?>
        </td>
    </tr>
    <tr>
    	<td valign="top">Tempat Lahir</td>
        <td>
          	<?php 
          		$tempat_lahir=array('name'=>'tempat_lahir','value'=>$data->tempat_lahir);
          		echo form_input($tempat_lahir);
          	?>
        </td>
    </tr>
    <tr>
        <td valign="top">Tanggal Lahir</td>
        <td>
          	<?php
          		$date=$data->tgl_lahir;
				$lahir=explode('-',$date);
				$dbtgl=$lahir[2];
				$dbbln=$lahir[1];
				$dbthn=$lahir[0];
          	?>
			<?php
				$tgl['#']='Pilih Tanggal:';
				for($n=1; $n<=31; $n++){$tgl[$n]=$n;}
				echo form_dropdown('tgl',$tgl,$dbtgl,'id="tgl"');
			?>
			&nbsp;
			<?php
          		$bln=array('#'=>'Pilih Bulan:','1'=>'Januari','2'=>'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember');
				echo form_dropdown('bln',$bln,$dbbln,'id="bln"');
			?>
			&nbsp;
			<?php
          		$now=date("Y");
				$thn['#']='Pilih Tahun:';
				for($n=1990; $n<=$now; $n++){$thn[$n]=$n;}
				echo form_dropdown('thn',$thn,$dbthn,'id="thn"');
			?>
        </td>
    </tr>
    <tr>
        <td valign="top">Agama</td>
        <td>
          	<?php
          		$religi=$data->agama;
				if($religi=='Islam') $dbagama='1';
				elseif($religi=='Kristen') $dbagama='2';
				elseif($religi=='Katolik') $dbagama='3';
				elseif($religi=='Hindu') $dbagama='4';
				elseif($religi=='Budha') $dbagama='5';
				elseif($religi=='Kong Hu Cu') $dbagama='6';
				else $dbagama='#';
				$agama=array('#'=>'Pilih Agama:','1'=>'Islam','2'=>'Kristen','3'=>'Katolik','4'=>'Hindu','5'=>'Budha','6'=>'Kong Hu Cu');
				echo form_dropdown('agama',$agama,$dbagama,'id="agama"');
			?>
        </td>
    </tr>
    <tr>
        <td valign="top">Nama Ayah</td>
        <td>
          	<?php 
          		$nama_ayah=array('name'=>'nama_ayah','value'=>$data->nama_ayah);
          		echo form_input($nama_ayah);
          	?>
        </td>
    </tr>
    <tr>
        <td valign="top">Pekerjaan Ayah</td>
        <td>
          	<?php 
          		$kerja_ayah=array('name'=>'kerja_ayah','value'=>$data->kerja_ayah);
          		echo form_input($kerja_ayah);
          	?>
        </td>
   	</tr>
   	<tr>
        <td valign="top">Nama Ibu</td>
        <td>
          	<?php 
          		$nama_ibu=array('name'=>'nama_ibu','value'=>$data->nama_ibu);
          		echo form_input($nama_ibu);
          	?>
        </td>
   	</tr>
   	<tr>
        <td valign="top">Pekerjaan Ibu</td>
        <td>
          	<?php 
          		$kerja_ibu=array('name'=>'kerja_ibu','value'=>$data->kerja_ibu);
          		echo form_input($kerja_ibu);
          	?>
        </td>
   	</tr>
	<tr>
        <td valign="top">Alamat</td>
    	<td>
        	<?php 
          		$alamat=array('name'=>'alamat','value'=>$data->alamat);
          		echo form_input($alamat);
          	?>
       </td>
	</tr>
    <tr>
       <td valign="top">Kelas</td>
       <td>
          	<?php
          		$kelas=array('#'=>'Pilih Kelas:','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6');
				echo form_dropdown('kelas',$kelas,$data->kelas,'id="kelas"');
			?>
       </td>
    </tr>
    <tr>
       <td valign="top">Keterangan (Bila Ada)</td>
       <td><?php echo form_textarea('ket',$data->ket);?></td>
    </tr>
    <tr>
       <td valign="top"></td>
       <td>
       		<?php echo form_submit('submit','UPDATE')?>
       		&nbsp;
       		<?php echo anchor('admin/siswa/'.$data->kelas,'KEMBALI')?>
       </td>
    </tr>
</table>  
<?php }?>      
<?php echo form_close()?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#editsiswa').css('background','white');
		$('#editsiswa').css('color','black');
	});
</script>
