<div id="container" class="box">
	<div id="intro">
    	<div id="intro-in">
        	<h2>Deteksi Resolusi Browser</h2>
        	<p class="intro">Website ini lebih bagus dilihat menggunakan browser dengan resolusi <b>1024 x 768</b>.</p>
      	</div>
    </div>
	<div id="obsah" class="content box">
    	<div class="in">
			<p>Resolusi <i>browser</i> Anda saat ini adalah: <font color="blue" style="font-weight:bold;" class="resolusi"></font></p>
			<p>
				Anda dapat mengubah resolusi <i>browser</i> Anda dengan cara sebagai berikut: <br />
				<b>1. </b>Tekan dan tahan tombol CTRL pada <i>keyboard</i> Anda. <br />
				<b>2. </b><i>Scroll mouse</i> ke atas untuk memperkecil atau ke bawah untuk memperbesar resolusi <i>browser</i> Anda. <br />
				<b>3. </b>Lepaskan tombol CTRL dan klik kembali menu <?echo anchor('resolusi','Deteksi Browser');?> untuk mengetahui resolusi <i>browser</i> Anda yang baru. <br />
				<b>4. </b>Ulangi ketiga langkah di atas hingga diperoleh resolusi <i>browser</i> yang disarankan oleh pembuat <i>web</i>. <br />
			</p>
	  	</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".resolusi").append(screen.width+' x '+screen.height);
		$('#resolusi').css('background','white');
		$('#resolusi').css('color','black');
	});
</script>