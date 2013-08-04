<div id="container" class="box">
	<div id="intro">
    	<div id="intro-in">
        	<h2><?php echo anchor('log/out/'.$tipe,'Log Out');?></h2>
        	<p class="intro">
        		<div class='hompimenu'>
    				<ul>
						<li>
							<?php echo anchor('guru','Absensi','id="absensi"');?>
							<ul>
                				<li><?php echo anchor('guru/absensi/1','Absensi Kelas 1');?></li>
                				<li><?php echo anchor('guru/absensi/2','Absensi Kelas 2');?></li>
                				<li><?php echo anchor('guru/absensi/3','Absensi Kelas 3');?></li>
                				<li><?php echo anchor('guru/absensi/4','Absensi Kelas 4');?></li>
                				<li><?php echo anchor('guru/absensi/5','Absensi Kelas 5');?></li>
                				<li><?php echo anchor('guru/absensi/6','Absensi Kelas 6');?></li>
            				</ul>
            			</li>
						<li><?php echo anchor('guru/nilai','Nilai','id="nilai"');?></li>
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
	  	</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.hompimenu li').hover(function() {
			$(this).children('ul').filter(':not(:animated)').slideDown(400);
		}, function() {
			$(this).children('ul').slideUp(400);
		});
		$('#guru').css('background','white');
		$('#guru').css('color','black');
	});
</script>