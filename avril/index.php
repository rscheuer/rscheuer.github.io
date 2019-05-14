<?php
include('../functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width">
	
	<title>Avril - Free Font</title>
	
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
		});
	</script>

	<style type="text/css">
		@font-face {
		    font-family: 'Avril'; /*a name to be used later*/
		    src: url('Avril-Regular.otf'); /*URL to font*/
		}
	    input:focus,
	    textarea:focus,
	    p:focus {
	      outline: none;
	    }

	    #myP{
	    	font-family: 'Avril';
	    	font-size: 50px;
	    	color: #C23449;
	    }

	</style>

</head>
<body class="body-font">
	<!--<img class="image-spin" src="../img/RS-tiny.png" alt="" />-->
	
	<div class="info-instagram"><span id="show-info"><a>Info</a></span></span>
		
		<span class="spacer">Instagram</span></div>

		<div id="info-section" class="hidden">
			<div class="information ">
				<b>Contact</b>

				<p><a href="mailto:ryan@kristiankirk.com" target="_top">ryan@kristiankirk.com</a></p>

				<p>Pittsburgh, USA</p>
			</div>
		</div>

		<div class="wrap">
			<div class="left sidebar">
				<?php loadSidebarProject(); ?>
			</div>

			<div class="right project-column">
				<p class="project-title">8. Avril Typeface</p>

				<div id="rightcol">
					<div class="columns">
						<div class="column">
							<img class="lazy" src="./avril-header.png" alt="" />
						</div>
					</div>

					<div class="small-text"><p>RS / 2019</p><span>Personal </span><span><b>Type Design</b></span></div>
					<div class="project-body">
						<p>Avril is a simple font inspired by the Aphex Twin logo, originally designed in 1997.  It features a unique arrow-based upper and lowercase.  There's also a few special glyphs thrown in as well.</p>


						<p id='myP'>APHEX ACID</p>

						<br>

						<a href="Avril-Regular.otf" target="_blank"><b>Free download</b></a>
						<br>
						<br>
						
					</div>

					<div class="columns">
						<div class="column"><img src="./avril-1.png" alt="" /></div>
					</div>

					<div class="columns">
						<div class="column"><img class="lazy" src="./avril-2.png" alt="" /></div>
					</div>

					<div class="columns">
						<div class="column"><img class="lazy" src="./avril-3.png" alt="" /></div>
					</div>
					<div class="columns">
						<div class="column"><img class="lazy" src="./avril-4.png" alt="" /></div>
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
▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬
	CHURCH OF BIBLIO
░░░░░░░░▄▄▀▀█▀▀▀▀▀▄▄░░░░░░░░ 
░░░░░░▄▀▓░░▒░░▒▒▒▒▒▒█▄░░░░░░ 
░░░░▄█▓▓▓░░░░▒▒▒▒▒▒▒▒█▀▄░░░░ 
░░▄▀█▌▓▓▓░░░░▒▒▒▒▒▒▒▒▐▌▓▀▄░░ 
░█▓▓█▌▓▄▄▓░░░▒▒▒▒▄▄▒▒▒█▓▓▀▄░ 
▄▀▓▓█▌▓▀█▓░░░▒▒▒▒█▓▀▒▄▌▓▓▓▓█ 
█▓▓▓▄▀▓▓▓▓░░░▒▒▒▒▒▒▒▒░░▌▓▓▓█ 
▀▄▓▓█░▀▓▓░░░░░░░▒▒▒▒▒░▄▌▓▓█░ 
░█▓▓▓█░▓░░░░░░░░░▒▒▒░░█▓▓▓█░ 
░▀▄▓▓█░▐░░▄▄███▄░░░▐░░░▀▄▀░░ 
░░▀▄▄▀░▐░░█████▀░░▄▀░░░░░░░░ 
░░░░░░░░▀░░▀██▀░▄▀░░░░░░░░░░
▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬
 -->