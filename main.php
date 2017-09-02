
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="iconfont/material-icons.css" rel="stylesheet">
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    

    <body>
    
    	
    
    
    	<div class="navbar-fixed " >
			<nav class="orange lighten-2" style="height: 90px;line-height: 100px;">
			  <div class="nav-wrapper" >
				<a href="" class="brand-logo center">
					<img src="images/logo.png" alt="" width="130px" height="75px" style="margin-top:10px;">
				</a>
				
			  </div>
			</nav>
			
		  </div>
		  
		  
		  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-large red hoverable">
			  <i class="large material-icons">perm_identity</i>
			</a>
			<ul>
			  <li><a href="logout.php" class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Logout"><i class="material-icons">no_encryption</i></a></li>
			  
			  
			  
			</ul>
		  </div>
		  
		  <br><br><br>
		  <div class="row">
		  	<dic class="col s12 m4 offset-m4">
		  		<div class="row z-depth-2">
					<div class="col s12 ">
					  <ul class="tabs ">
						<li class="tab col s6"><a class="active" target="frame" href="upload.php">Upload</a></li>
						<li class="tab col s6"><a  target="frame" href="view.php">View</a></li>
					  </ul>
					</div>
					
				  </div>
		  	</dic>
		  </div>
		  <div class="row">
		  	<div class="col s12 m8  offset-m2  teal lighten-5">
		  		<iframe  width="100%" height="300px" src="upload.php" frameborder="0" name="frame" ></iframe>
		  	</div>
		  </div>
    	
    	 
    	  
    	   
    	    
    	      
     <script>
		$(document).ready(function(){
			$('ul.tabs').tabs();
		  });
		</script>
     
     
     
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-2.2.3.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
    </body>
  </html>