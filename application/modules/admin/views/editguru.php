<h3>FORM EDIT DATA GURU</h3>
<?php foreach ($guru as $data){?>
<?php echo form_open('admin/simpaneditguru');?>
<table class="form">
    <tr>
		<td valign="top">ID Guru</td>
        <td>
			<?php 
          		$guruid=array('name'=>'guruid','value'=>$data->guruid,'readonly'=>'readonly');
          		echo form_input($guruid);
          	?>          		
        </td>
	</tr>
	<tr>
    	<td valign="top">NIP</td>
        <td>
			<?php 
          		$nip=array('name'=>'nip','value'=>$data->nip);
          		echo form_input($nip);
          	?>          		
        </td>
    </tr>
    <tr>
    	<td valign="top">NUPTK</td>
        <td>
			<?php 
          		$nuptk=array('name'=>'nuptk','value'=>set_value('nuptk'));
          		echo form_input($nuptk);
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
				$gender=array('#'=>'Pilih Jenis Kelamin:','1'=>'Laki-laki','2'=>'Perempuan');
				echo form_dropdown('gender',$gender,$data->gender,'id="gender"');
			?>
        </td>
    </tr>
    <tr>
        <td valign="top">Agama</td>
        <td>
          	<?php
				$agama=array('#'=>'Pilih Agama:','1'=>'Islam','2'=>'Kristen','3'=>'Katolik','4'=>'Hindu','5'=>'Budha','6'=>'Kong Hu Cu');
				echo form_dropdown('agama',$agama,$data->agama,'id="agama"');
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
       <td valign="top">Mata Pelajaran</td>
       <td>
          	<?php
          	$matpel=array('#'=>'Pilih Mata Pelajaran:','Kepala Sekolah'=>'Kepala Sekolah','Kelas 1'=>'Kelas 1','Kelas 2'=>'Kelas 2','Kelas 3'=>'Kelas 3','Kelas 4'=>'Kelas 4','Kelas 5'=>'Kelas 5','Kelas 6'=>'Kelas 6','PA'=>'PA','PJK'=>'PJK','BING'=>'BING','TIK'=>'TIK','Karyawan'=>'Karyawan');
				echo form_dropdown('matpel',$matpel,$data->matpel,'id="matpel"');
			?> 
       </td>
    </tr>
    <tr>
       <td valign="top">Username</td>
       <td>
          	<?php
          		$username=array('name'=>'username','value'=>$data->username);
          		echo form_input($username);
			?> 
       </td>
    </tr>
    <tr>
       <td valign="top">Password</td>
       <td>
          	<?php
          		$password=array('name'=>'password','value'=>$data->password);
          		echo form_password($password);
			?> 
       </td>
    </tr>
    <tr>
       <td valign="top">Password</td>
       <td>
          	<?php
          		$konfirmasi=array('name'=>'konfirmasi');
          		echo form_password($konfirmasi);
			?> 
       </td>
    </tr>
    <tr>
       <td valign="top"></td>
       <td>
       		<?php echo form_submit('submit','UPDATE')?>
       </td>
    </tr>
</table>      
<?php echo form_close()?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#editguru').css('background','white');
		$('#editguru').css('color','black');
	});
</script>