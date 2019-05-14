<?php
	include('../functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width">
	
	<title>Kristiankirk Site</title>
	
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
			<b>Beep beep</b>
			
			<p><a href="mailto:ryan@kristiankirk.com" target="_top">ryan@kristiankirk.com</a></p>
			
			<p>Pittsburgh, USA</p>
		</div>
	</div>
	
	<div class="wrap">
		<div class="left sidebar">
			<?php loadSidebarProject(); ?>
		</div>
		
		<div class="right project-column">
			<p class="project-title">4. Kristiankirk.com</p>
			
			<div id="rightcol">
				<img class="lazy" src="../img/kk.png" alt="" />
				
				<div class="small-text"><p>RS / 2018</p><span>For </span><span><b>Kristiankirk</b></span></div>
				<div class="project-body">
					<p>As the digital and web manager for team KK, I am entirely responsible for managing all digital media and web presence for the company.  In the summer of 2018, I began working on the <a href="http://kristiankirk.com" target="_blank"><b>website</b></a> that would be home to all of our projects, information, and occasional product sales.</p>
					<p>We wanted to make something very unusual and eye catching, but clean.  I went through many, many iterations, including (excessive) parallax effects until we settled on this 3D circular design.  The multidimensional carousel spins depending on the mouseX and mouseY position within the frame.  The result is a bold, yet minimal home base for the brand.</p>
					<p>After this was completed, I was also asked to make a logo for the brand.  I ended up with this 3D motion graphic completely devoid of shadows or lighting effects, with the spinning letters KK inside a ring.  The logo is modular: every employee can use a variant of the logo with their own initials online.  Circles, motion, transparency became stables of the brand as a whole.</p>
				</div>
				
				<div class="columns is-mobile">
					<div class="column"></div>
					<div class="column"><img src="../img/kk-spin.gif" alt="" /></div>
					<div class="column"></div>
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