<?php
	include('../functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width">
	
	<title>AI Paper</title>
	
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
			<p class="project-title">2. AI paper by AI</p>
			
			<div id="rightcol">
				<img class="lazy" src="../img/ai-paper1.png" alt="" />
				
				<div class="small-text"><p>RS / 2018</p><span>School </span><span><b>Digital Imaging</b></span></div>
				<div class="project-body">
					<p>This is more of a performance / digital art piece, but it relied on a bit of programming to pull off.  For my digital imaging class, I was tasked with making some form of a response piece to an AI art exhibit that was showing at CMU's Miller Gallery.<p>
					<p>I decided to write a natural language processing program, train it using a paper <i>about</i> AI, and then have it generate <a href="http://pitt.edu/~rms154/ai-paper" target="_blank"><b>a new AI paper</b></a>.  Once it was done, I made a website to look just like Science Direct, the site where the original paper originated.</p>
					<p>The resulting paper was... a mess, in all honesty. However, the sentence structure, occasional repetition, and general absurdity is what makes it fun.  The first sections of the paper were created using a Markov Chain in <a href="https://www.nltk.org/" target="_blank"><b>NLTK</b></a> with Python, which resulted in somewhat realistic sentence structure.  The last section used a different algorithm and used a true machine library, running on TensorFlow.  The generated sentences in this section were completely wild, and the program even generated its own words.</p>
					<p>Some of my favorites include: <i>The concepting analogy the concepting analogy conceptual concepts are the program analogy and the program analogy is the concepting is a program of the program of the analogy.</i> and <i>31 [OtA]. They pepse, they riddly, and ipeword.</i></p>
				</div>
				
				<div class="columns">
					<div class="column"><img src="../img/ai-paper2.png" alt="" />
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