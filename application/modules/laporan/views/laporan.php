<div id="container" class="box">
	<div id="intro">
      	<div id="intro-in">
        	<p class="intro">
        		<div class='hompimenu'>
    				<ul>
						<li><?php echo anchor('laporan/siswa','Daftar Siswa','id="siswa"');?></li>
						<li><?php echo anchor('laporan/absensi','Absensi','id="absensi"');?></li>
						<li><?php echo anchor('laporan/nilai','Nilai','id="nilai"');?></li>
					</ul>
				</div>	
        	</p>
      	</div>
    </div>
	<div id="obsah" class="content box">
      	<div class="in">
      		<?php 
      			if(!isset($subcontent)){ die();}
      			$this->load->view($subcontent);
			?>
			<p class="subcontent"></p>
      	</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".resolusi").append(screen.width+' x '+screen.height);
		$('#buttonsiswa').click(function(){
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url();?>asset/img/loading.gif" alt="Loading" /></div>');
			var kelas = $('#combosiswa option:selected').text();
			if(kelas!='Pilih Kelas:'){
				$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/laporan/tabelsiswa',    
					data: 'kelas='+kelas,   
					success: function (siswa){                 
						$('.subcontent').html(siswa);
					}	  
				});
			}else{
				$('.subcontent').empty();
			}
		})
		$('#buttonabsensi').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url();?>asset/img/loading.gif" alt="Loading" /></div>');
			var lapthn = $('#lapthn option:selected').text();
			var lapbln = $('#lapbln option:selected').val();
			var lapkelas = $('#lapkelas option:selected').val();
			if((lapthn=='Pilih Tahun:')||(lapbln=='#')){                 
				$('.subcontent').empty();
			}else{
				$.ajax({
					type:'POST',
					url:'<?php echo site_url();?>/laporan/tabelabsensi',    
					data: 'thn='+lapthn+'&bln='+lapbln+'&kelas='+lapkelas,   
					success: function (absensi){                 
						$('.subcontent').html(absensi);
					}	  
				});
			}
		});	
		$('#buttonnilai').click(function() {
			$('.subcontent').empty().append('<div id="wait"><img src="<?php echo base_url();?>asset/img/loading.gif" alt="Loading" /></div>');
			var jenis1 = $('#jenis1 option:selected').val();
			var jenis2 = $('#jenis2 option:selected').val();
			var nis = $('#nis').attr('value');
			$.ajax({
				type:'POST',
				url:'<?php echo site_url();?>/laporan/tabelnilai',    
				data: 'jenis1='+jenis1+'&jenis2='+jenis2+'&nis='+nis,   
				success: function (nilai){                 
					$('.subcontent').html(nilai);
				}	  
			});
		});	
		$('#laporan').css('background','white');	
		$('#laporan').css('color','black');
	});
</script>
  		