<?php
include('../functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width">
	
	<title>Mountain - Free Font</title>
	
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
		    font-family: 'Mountain'; /*a name to be used later*/
		    src: url('Mountain-Regular.otf'); /*URL to font*/
		}
	    input:focus,
	    textarea:focus,
	    p:focus {
	      outline: none;
	    }

	    #myP{
	    	font-family: 'Mountain';
	    	font-size: 50px;
	    	color: #3A8C66;
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
				<p class="project-title">6. Mountain Typeface</p>

				<div id="rightcol">
					<div class="columns">
						<div class="column">
							<img class="lazy" src="./mountain-header.png" alt="" />
						</div>
					</div>

					<div class="small-text"><p>RS / 2019</p><span>Personal </span><span><b>Type Design</b></span></div>
					<div class="project-body">
						<p>Mountain is a pretty wide, sans serif with lots of chill.  It looks regular at first glance, but there are some secret glyphs spread throughout.</p>


						<p id='myP'>| TYPE HERE 1337 {}</p>

						<br>

						<a href="Mountain-Regular.otf" target="_blank"><b>Free download</b></a>
						<br>
						<br>
						
					</div>

					<div class="columns">
						<div class="column"><img src="./mountain-1.png" alt="" /></div>
					</div>

					<div class="columns">
						<div class="column"><img class="lazy" src="./mountain-2.png" alt="" /></div>
					</div>

					<div class="columns">
						<div class="column"><img class="lazy" src="./mountain-3.png" alt="" /></div>
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