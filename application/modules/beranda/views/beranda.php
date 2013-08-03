<div id="container" class="box">
	<div id="intro">
      	<div id="intro-in">
        	<h2>Selamat Datang</h2>
        	<p class="intro"><i>"Jer Basuki Mawa Bea"</i></p>
      		<div id="loading"></div>
      	</div>
    </div>
	<div id="obsah" class="content box">
		<div id="baris1">
			<div id="sel11">
				<div id="slider">
					<ul>
						<?php foreach($foto as $data){?>				
						<li><a href="#"><img src="<?php echo base_url()?>asset/img/galeri/<?php echo $data->nama?>" alt="Foto Kegiatan" /></a></li>
						<?php }?>
					</ul>
				</div>
			</div>
			<div id="sel12">
				<div id="judul">Visi dan Misi Sekolah</div>
				<div id="fill">
					<b><center>Visi:</center></b><center>Unggul Dalam Prestasi, Mampu Menguasai Diri, Memiliki Iptek Berdasarkan Imtaq, Teladan Dalam Sikap dan Perilaku, Berbudaya dan Terampil</center>
					<br />
					<b><center>Misi:</center></b>
					<b>1. </b>Meningkatkan Perolehan Nilai Ujian (UAN) <br />
					<b>2. </b>Meningkatkan Minat Peserta Didik Untuk: <br />
					<b>&nbsp;&nbsp;&nbsp;&nbsp;a. </b>Melanjutkan ke jenjang berikutnya <br />
					<b>&nbsp;&nbsp;&nbsp;&nbsp;b. </b>Mengembangkan sikap percaya diri <br />
					<b>&nbsp;&nbsp;&nbsp;&nbsp;c. </b>Meningkatkan kedisiplinan <br />
					<b>&nbsp;&nbsp;&nbsp;&nbsp;d. </b>Meningkatkan budaya hidup sehat <br />
					<b>&nbsp;&nbsp;&nbsp;&nbsp;e. </b>Meningkatkan keagamaan, olahraga, seni <br />
					<b>&nbsp;&nbsp;&nbsp;&nbsp;f. </b>Meningkatkan kepedulian sosial <br />
				</div>
			</div>
		</div>
		<div id="baris2">
			<div id="sel21">
				<div id="judul">Sekilas Info</div>
				<div id="fill">
					<marquee direction="down" behavior="scroll" scrollamount="1" scrolldelay="60" onmouseout="this.start()" onmouseover="this.stop()">
						<span>
							<p align="center"><?php echo anchor('','Latihan CodeIgniter','id="1"');?></p>
							<p align="center"><?php echo anchor('','Grup Facebook','id="2"');?></p>
							<p align="center"><?php echo anchor('','Belajar Yuk!','id="3"');?></p>
						</span>
					</marquee>	
				</div>
			</div>
			<div id="sel22">
				<div id="judul">Tujuan Sekolah</div>
				<div id="fill">
					<b>1. </b>Dapat mengamalkan ajaran agama hasil proses pembelajaran dan kegiatan perkembangan diri <br />
					<b>2. </b>Meraih prestasi akademik dan non-akademik <br />
					<b>3. </b>Dapat mencerdaskan peserta didik dan guru sehingga menjadi sekolah yang unggul dan diminati masyarakat <br />
					<b>4. </b>Menguasai dasar-dasar ilmu pengetahuan dan teknologi serta seni sebagai bekal untuk melanjutkan ke sekolah yang lebih tinggi <br />
					<b>5. </b>Menjadi sekolah pelopor dan penggerak di lingkungan masyarakat sekitar <br />
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#slider").easySlider({
			auto: true, 
			continuous: true,
			numeric: false,
			controlsShow: false,
			pause: 5000
		});
		$('#fill a').click(function(){
			$('#sel11').empty().append('<div id="wait"><img src="<?php echo base_url();?>asset/img/loading.gif" alt="Loading" /></div>');
    		$('#fill a').removeClass('berita');
    		$(this).addClass('berita');
    		var beritaid=$(this).attr('id');
    		$.ajax({ 
    			type:'POST',
				url:'<?php echo site_url();?>/beranda/berita',    
				data:'beritaid='+beritaid,  
    			success: function(html) {
           			$('#sel11').empty().append(html);
    			}
    		});	
    		return false;
		});
		$('#beranda').css('background','white');
		$('#beranda').css('color','black');
	});
</script>