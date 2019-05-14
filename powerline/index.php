<?php
	include('../functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width">
	
	<title>Free Font - Powerline</title>
	
	<link rel='stylesheet' href='../css/style.css'>
	
	<link rel='stylesheet' href='../css/bulma.css'>
	
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
	<link rel="manifest" href="../favicon/site.webmanifest">
	<link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="../favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="../favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	  
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99911598-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-99911598-2');
	</script>

	  
	  <!-- jquery -->
	  <script
	    src="https://code.jquery.com/jquery-3.3.1.min.js"
	    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	    crossorigin="anonymous"></script>
    
    <script src="../js/jquery.lazy.min.js" type="text/javascript"></script>
	    
	    <script>
	    	$(function() {
	$('.lazy').lazy();
});
    </script>

    <script>
    	$(document).ready(function() {
    		document.getElementById("myP").contentEditable = true;
    		document.getElementById("myP2").contentEditable = true;
    		document.getElementById("myP3").contentEditable = true;
    	});
    </script>

    <style type="text/css">
    	@font-face {
    	    font-family: 'P-Bit'; /*a name to be used later*/
    	    src: url('Powerline-Bitmap.otf'); /*URL to font*/
    	}
    	@font-face {
    	    font-family: 'P-Dot'; /*a name to be used later*/
    	    src: url('Powerline-Dots.otf'); /*URL to font*/
    	}
    	@font-face {
    	    font-family: 'P-Blade'; /*a name to be used later*/
    	    src: url('Powerline-Blade.otf'); /*URL to font*/
    	}
        input:focus,
        textarea:focus,
        p:focus {
          outline: none;
        }

        #myP{
        	font-family: 'P-Blade';
        	font-size: 45px;
        	color: #8687BB;
        }
        #myP2{
        	font-family: 'P-Dot';
        	font-size: 45px;
        	color: #DF5837;
        }
        #myP3{
        	font-family: 'P-Bit';
        	font-size: 45px;
        	color: #0A9E59;
        }

    </style>

</head>
<body class="body-font">
	<!--<img class="image-spin" src="../img/RS-tiny.png" alt="" />-->
	
	<div class="info-instagram"><span id="show-info"><a>Info</a></span></span>
		
		<span class="spacer">Instagram</span></div>
	
	<div id="info-section" class="hidden">
		<div class="information ">
			<b>Let's talk fonts!</b>
			
			<p><a href="mailto:ryan@kristiankirk.com" target="_top">ryan@kristiankirk.com</a></p>
			
			<p>Pittsburgh, USA</p>
		</div>
	</div>
	
	<div class="wrap">
		<div class="left sidebar">
			<?php loadSidebarProject(); ?>
		</div>
		
		<div class="right project-column">
			<p class="project-title">2. Powerline</p>
			
			<div id="rightcol">
				<img class="lazy" src="img/powerline-header.png" alt="" />
				
				<div class="small-text"><p>RS / 2019</p><span>Personal </span><span><b>Type Design</b></span></div>
				<div class="project-body">
					<p>Powerline: a bitmap-esque typeface in three unique styles.  Powerline Blade, Dots, and Bitmap are available for free.  It was built on a <a href="http://glyphdrawing.club" target="_blank"><b>grid system</b></a>.</p>

					<p>Powerline was designed for small, pixel-level readability, but it looks great at display sizes as well.</p>

					<p id='myP'>TEST BLADEEEEE ZONE</p>
					<p id='myP2'>TEST DOT ZONE</p>
					<p id='myP3'>TEST BITMAP ZONE</p>
					<br>

					<p>Free download of the entire font family <a href="Powerline-Family.zip" target="_blank"><b>here.</b></a></p>
				</div>
				
				<div class="columns">
					<div class="column"><img src="img/bmp.png" alt="" />
					</div>
					<div class="column"><img src="img/dots.png" alt="" />
					</div>
				</div>
				<div class="columns">
					<div class="column"><img src="img/blade.png" alt="" />
					</div>
				</div>
				<div class="columns">
					<div class="column"><img src="img/shmart.png" alt="" />
					</div>
				</div>
				
				<div class="columns">
					<div class="column"><img class="lazy" src="img/powerline-promo.png" alt="" /></div>
				</div>
				
				
				
				
			</div>
		</div>
	</div>
	
	<script>
		$(document).ready(function() {
	$("#show-info").click(function() {
		$("#info-section").toggleClass('hidden');
		$("#rightcol").toggleClass('hidden');
		$(document.body).toggleClass('my-gradient');
		;
	});
	$("#read-more").click(function() {
		$("#info-section").toggleClass('hidden');
		$("#rightcol").toggleClass('hidden');
		$(document.body).toggleClass('my-gradient');
		;
	});
});
	</script>
</body>
</html>

<!-- 
⣿⣿⣿⣿⣿⣿⣿⣉⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣷⡈⢿⣿⣿⣿⣿⣿⣿⡏⣹⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣍⡙⢿⣿⣦⡙⠻⣿⣿⣿⡿⠁⣾⣿⣿⣿⡿⢿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣦⡉⠛⠓⠢⡈⢿⡿⠁⣸⣿⡿⠿⢋⣴⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣯⣍⣙⡋⠠⠄⠄⠄⠄⠁⠘⠁⠄⠴⠚⠻⢿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⡿⠿⢏⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠹⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣧⡴⠖⠒⠄⠁⠄⢀⠄⠄⠄⡀⠄⠄⠄⠄⠄⠄⣠⣿⣿⣿⣿⣿⣿
⣿⣿⣿⠿⠟⣩⣴⣶⣿⣿⣶⡞⠉⣠⣇⠄⣿⣶⣦⣄⡀⠲⢿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣷⣶⣾⣿⣿⣿⣿⣿⡿⢠⣿⣿⣿⢀⣿⣿⣿⣿⣿⣿⣶⣌⠻⠿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢡⣿⣿⣿⡏⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⣾⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣸⣿⣿⣿⣷⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
   made with <3
 -->