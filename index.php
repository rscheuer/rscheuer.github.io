<?php
	include('functions.php');
	// include('dbconn.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width">
	
	<meta name="Description" CONTENT="Ryan Scheuer is a Pittsburgh designer and developer specializing in responsive web, mobile, and type.">

	<title>Ryan Scheuer is Online</title>
	
	<link rel='stylesheet' href='css/style.css'>
	
	<link rel='stylesheet' href='css/bulma.css'>
	  
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/site.webmanifest">
	<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="/favicon/browserconfig.xml">
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
	    
	    <!-- lazy load images -->
	    <script src="js/jquery.lazy.min.js" type="text/javascript"></script>
	    
	    <!-- <script src="js/myScroll.js" type="text/javascript"></script> -->
	   
	    <script>
	    	$(function() {
	    	        $('.lazy').lazy();
	    	    });
	    </script>
	   
    
</head>
<body class="body-font">
	<img class="image-spin" src="img/RS-tiny.png" alt="" />
	
	<div class="info-instagram"><span id="show-info"><a>Info</a></span></span>
		
		<span class="spacer"><a href="http://instagram.com/ryanscheuer">Instagram</a></span></div>
		
		<div id="info-section" class="hidden">
			<div class="information ">
				<b>Contact</b>
				<p><a href="mailto:ryan@kristiankirk.com" target="_top">ryan@kristiankirk.com</a></p>
				<p>Pittsburgh, USA</p>
			</div>
		</div>
	
	<div class="wrap">
		<div id="left" class="left sidebar">
			<?php loadSidebarHome(); ?>
		</div>
		
		<div id="right" class="right">
			<div id="rightcol">
				<img class="lazy" src="img/smokemirror.png" alt="" />
				
				<img class="lazy" src="img/kk.png" alt="" />
				
				<img class="lazy" src="img/ontop.png" alt="" />
				
				<!--<img class="lazy" src="img/paintanon1.png" alt="" />-->
			</div>
		</div>
	</div>
	
	<script>
		$(document).ready(function() {
		    $("#show-info").click(function(){
		        $("#info-section").toggleClass('hidden');
		        $("#rightcol").toggleClass('hidden');
		        $("html").toggleClass('my-gradient');;
		    }); 
		    $("#read-more").click(function(){
		        $("#info-section").toggleClass('hidden');
		        $("#rightcol").toggleClass('hidden');
		        $("html").toggleClass('my-gradient');;
		    }); 
		});
	</script>
</body>
</html>

<!-- 
░░░░░░░░░░░░░▄███▄▄▄░░░░░░░
░░░░░░░░░▄▄▄██▀▀▀▀███▄░░░░░
░░░░░░░▄▀▀░░░░░░░░░░░▀█░░░░
░░░░▄▄▀░░░░░░░░░░░░░░░▀█░░░
░░░█░░░░░▀▄░░▄▀░░░░░░░░█░░░
░░░▐██▄░░▀▄▀▀▄▀░░▄██▀░▐▌░░░
░░░█▀█░▀░░░▀▀░░░▀░█▀░░▐▌░░░
░░░█░░▀▐░░░░░░░░▌▀░░░░░█░░░
░░░█░░░░░░░░░░░░░░░░░░░█░░░
░░░░█░░▀▄░░░░▄▀░░░░░░░░█░░░
░░░░█░░░░░░░░░░░▄▄░░░░█░░░░
░░░░░█▀██▀▀▀▀██▀░░░░░░█░░░░
░░░░░█░░▀████▀░░░░░░░█░░░░░
░░░░░░█░░░░░░░░░░░░▄█░░░░░░
░░░░░░░██░░░░░█▄▄▀▀░█░░░░░░
░ yee ░░▀▀█▀▀▀▀░░░░░░█░░░░░
░░░░░░░░░█░░░░░░░░░░░░█░░░░
           
 -->

<!-- 

	          _____                            _____          
	         /\    \                          /\    \         
	        /::\    \                        /::\    \        
	       /::::\    \                      /::::\    \       
	      /::::::\    \                    /::::::\    \      
	     /:::/\:::\    \                  /:::/\:::\    \     
	    /:::/__\:::\    \                /:::/__\:::\    \    
	   /::::\   \:::\    \               \:::\   \:::\    \   
	  /::::::\   \:::\    \            ___\:::\   \:::\    \  
	 /:::/\:::\   \:::\____\          /\   \:::\   \:::\    \ 
	/:::/  \:::\   \:::|    |        /::\   \:::\   \:::\____\
	\::/   |::::\  /:::|____|        \:::\   \:::\   \::/    /
	 \/____|:::::\/:::/    /          \:::\   \:::\   \/____/ 
	       |:::::::::/    /            \:::\   \:::\    \     
	       |::|\::::/    /              \:::\   \:::\____\    
	       |::| \::/____/                \:::\  /:::/    /    
	       |::|  ~|                       \:::\/:::/    /     
	       |::|   |                        \::::::/    /      
	       \::|   |                         \::::/    /       
	        \:|   |                          \::/    /        
	         \|___|                           \/____/         
	                                                          
	 Made with <3 by Ryan Scheuer
	 Shoutout to the Bulma framework for the column system
	 	and cargocollective.com for inspiration.
-->