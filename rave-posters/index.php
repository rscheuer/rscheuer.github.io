<?php
	include('../functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width">
	
	<title>Rave Poster</title>
	
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

</head>
<body class="body-font">
	<!--<img class="image-spin" src="../img/RS-tiny.png" alt="" />-->
	
	<div class="info-instagram"><span id="show-info"><a>Info</a></span></span>
		
		<span class="spacer">Instagram</span></div>
	
	<div id="info-section" class="hidden">
		<div class="information ">
			<b>Need a fun flyer?</b>
			
			<p><a href="mailto:ryan@kristiankirk.com" target="_top">ryan@kristiankirk.com</a></p>
			
			<p>Pittsburgh, USA</p>
		</div>
	</div>
	
	<div class="wrap">
		<div class="left sidebar">
			<?php loadSidebarProject(); ?>
		</div>
		
		<div class="right project-column">
			<p class="project-title">1. Rave Poster</p>
			
			<div id="rightcol">
				<img class="lazy" src="../img/poster4.png" alt="" />
				
				<div class="small-text"><p>RS / 2018</p><span>School </span><span><b>Digital Imaging</b></span></div>
				<div class="project-body">
					<p>This series of fictional event posters was created as my final project in Digital Media.  It takes inspiration from rave culture, acid techno, and the underground scene in the 80s and 90s.  The final project was presented as 22 by 17 inch prints on luster paper.</p>
				</div>
				
				<div class="columns">
					<div class="column"><img src="../img/poster2.png" alt="" />
					</div>
					<div class="column"><img src="../img/poster3.png" alt="" />
					</div>
				</div>
				<div class="columns">
					<div class="column"><img class="lazy" src="../img/smokemirror.png" alt="" /></div>
				</div>
				
				<div class="columns">
					<div class="column"><img class="lazy" src="../img/poster5.png" alt="" /></div>
				</div>
				

				
				
				<div class="columns">
					<div class="column"><img src="../img/poster6.png" alt="" />
					</div>
					<div class="column"><img src="../img/poster7.png" alt="" />
					</div>
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