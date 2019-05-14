<?php
include('../functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width">
	
	<title>Paint Anon</title>
	
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
				<p class="project-title">1. Paint Anon</p>

				<div id="rightcol">
					<img class="lazy" src="../img/paintanon1.png" alt="" />

					<div class="small-text"><p>RS / 2018</p><span>For </span><span><b>INFSCI 1059: Web Programming</b></span></div>
					<div class="project-body">
						<p>This interactive social media platform was created as my final project for INFSCI 1059.  The prompt was to create a site of any kind that had at least 3 server-sided services.</p>
						<p><a href="http://studentprojects.sis.pitt.edu/fall2018/rms154/final/" target="_blank"><b>Paint Anon</b></a> is a site that allows all users to anonymously paint images on a P5.js canvas and upload them to my database.  Logged in users can like and comment on paintings as well as create their own.  The identity of the painter is not even tracked in my database.</p>
						<p>The site was built using Bulma as a front end framework, with PHP to handle most templating, P5.js for the canvas and painting functionality, and some AJAX to handle base64 canvas conversion and “like” tracking.</p>
						
					</div>

					<div class="columns">
						<div class="column"><img src="../img/paintanon2.png" alt="" />
						</div>
					</div>
					<div class="columns">
						<div class="column"><img class="lazy" src="../img/paintanon.png" alt="" /><div class="small-text"><p>RS / 2018</p><span>From </span><span><b>Anonymous</b></span></div></div>
					</div>

					<div class="columns">
						<div class="column"><img class="lazy" src="../img/paintanon4.png" alt="" /></div>
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