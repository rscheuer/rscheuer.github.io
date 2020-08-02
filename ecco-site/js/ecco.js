var $newdiv1 = $( `<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
		<div class="navbar-brand">
		
		    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
		      <span aria-hidden="true"></span>
		      <span aria-hidden="true"></span>
		      <span aria-hidden="true"></span>
		    </a>
		</div>
		
		<div id="navbarBasicExample" class="navbar-menu">
		    

		      <div class="navbar-item has-dropdown"><a class="navbar-link is-arrowless">
                <h2 class="title-main bold"><a href=".." >Spiritual Engineering</a></h2>
              </a>
				
				<div class="navbar-dropdown">
					<div class="navbar-item">
	                  <p>Period distribution and writings on design and production.</p>					  
	                </div>
					<hr class="navbar-divider">
	                <div class="navbar-item">
	                  <p class="padding">A global endeavor by the New Earth Coincidence Control Office</p>
	                </div>
	                <div class="navbar-item">
	                  <p class="blue">TEMP</p>
	                </div>
					
					<hr class="navbar-divider">
					
		            </div>
			</div>
			<div class="navbar-item has-dropdown">
			        <a class="navbar-link">
			        	<h2 class="title-main">EDITIONS</h2>
			        </a>
			        <div class="navbar-dropdown">
			          <p class="navbar-item title-main">
			            <span class="bold">SE01</span>&nbsp;BREAK–––FREE
			          </p>
			          <a class="navbar-item" href="./issue01" target="">
                      <p class="blue">Introduction To Font Production</p>
                      </a>
			          
			          <a class="navbar-item"><p>How To Steal Photoshop For Life</p></a>
			          <a class="navbar-item"><p>SE01 Playlist: Nitecore</p></a>
			          <hr class="navbar-divider">
			          <p class="navbar-item title-main">
			          	<span class="bold">SE02</span>&nbsp;ANTI–––DOWNLOADS
			          </p>
			          <a class="navbar-item"><p>Master List Of Online Tools</p></a>
			          <a class="navbar-item"><p>You Don\'t Need An App</p></a>
			          <a class="navbar-item"><p>More…</p></a>
			          <hr class="navbar-divider">
			          <p class="navbar-item title-main">
			          	<span class="bold">SE03</span>&nbsp;TYPEFACES
			          </p>
			          <a class="navbar-item"><p>RS Gremlin [3 styles]</p></a>
			          <a class="navbar-item"><p>RS Gantz</p></a>
			          <a class="navbar-item"><p>RS Ghosts</p></a>
			        </div>
			      </div>
			
			<div class="navbar-item has-dropdown">
				<a class="navbar-link  is-arrowless">
                	<h2 class="title-main">RESOURCES</h2>
              	</a>
				
				<div class="navbar-dropdown">
					<div class="navbar-item">
                      <p class="title-main"><span class="bold">FREE &amp OPEN</span> TYPEFACES</p>
                    </div>
                    <a class="navbar-item" href="#" target="_blank">
                      <p class="blue">RS Type (10+ Free)</p>
                    </a>
                    <a class="navbar-item" href="#" target="_blank">
                      <p>Velvetyne Type Foundry</p>
                    </a>
					
					<hr class="navbar-divider">
					<div class="navbar-item">
                      <p class="title-main"><span class="bold">FREE</span> TOOLS</p>
                    </div>
                    <a class="navbar-item"><p>Adobe Zii</p></a>
                    <a class="navbar-item"><p>Await</p></a>
                    <a class="navbar-item"><p>Gust</p></a>
                    <a class="navbar-item"><p>Incident</p></a>
                    <a class="navbar-item"><p>Powerline</p></a>
                    <a class="navbar-item"><p class="blue">RS Raine</p></a>
                    
                  </div>
			</div>
			
			<div class="navbar-item has-dropdown">
				<a class="navbar-link  is-arrowless">
		          <h2 class="title-main">COMMUNITY</h2>
		        </a>
				
				<div class="navbar-dropdown">
					<div class="navbar-item">
			        	<p><span class="title-main bold">PUBLIC \ PRIVATE</span></p>
			        </div>
			        <hr class="navbar-divider">
			        <a class="navbar-item"><p class="title-main">01. ECCO</p></a>
			        <div class="navbar-item"><p>Discord Server For Type Designers</p></div>
					
					<hr class="navbar-divider">

					<a class="navbar-item"><p class="title-main">02. OPEN SAUCE</p></a>
					<div class="navbar-item"><p>Open Documents, PSD, Fonts</p></div>

					<hr class="navbar-divider">

					<a href="../lab" class="navbar-item" target="_blank"><p class="title-main">03. RS FONT LAB</p></a>
					<div class="navbar-item"><p>Test WIP Fonts (Don\'t steal pls)</p></div>
			</div>
		    
		</div>
		</div>
	</nav>` ),
  newdiv2 = document.createElement( "div" ),
  existingdiv1 = document.getElementById( "foo" );
 
$( "body" ).append( $newdiv1 );