<?php
session_start();
require('includes/db.php');
require('includes/log.php');

if(!isset($_POST['captcha'])){
	$_SESSION['secure']=rand(1000,9999);
}
?>

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

    <body class="blue  lighten-4">
    	<br>
    
    	 <div class="container">
     			
     			 <div class="row">
     			  <div class="col s10 offset-s1 m4 offset-m4">
     						<div class="card medium white hoverable" style="height: 540px;" >
								<div class="card-content indigo-text">
								  <span class="card-title blue-text darken-3"><b>Login</b></span>
								  <div class="divider black"></div>
				
									<form class="col s12" action="" method="post" enctype="multipart/form-data">
								  
										<div class="row" style="margin-bottom: 0px;">
											<div class="input-field col s12">
										      <i class="material-icons prefix">account_circle</i>
											  <input type="text" class="validate" name="username">
											  <label for="username">User Name</label>
											</div>
										  </div>

										  <div class="row" style="margin-bottom: 0px;">
											<div class="input-field col s12 ">
										  <i class="material-icons prefix ">vpn_key</i>
											  <input  type="password" class="validate" name="password">
											  <label for="password">Password</label>
											</div>
										  </div>
										  
										  <div class="row" style="margin-bottom: 0px;">
											<div class="input-field col s12 ">
										  <i class="material-icons prefix ">vpn_key</i>
											  <input  type="password" class="validate" name="key">
											  <label for="password">Key</label>
											</div>
										  </div>
										  
										  <div class="row" style="margin-bottom: 0px;">
											<div class="input-field col s12">
											  <img src="includes/captcha.php" alt="">
											</div>
										  </div>

										  <div class="row" style="margin-bottom: 0px;">
											<div class="input-field col s12">
											  <input   type="text" class="validate" name="captcha">
											  <label for="name">Verification Code</label>
											</div>

										  </div>

										  
										  
										  <div class="row" style="margin-bottom: 0px;">
											<div class="input-field col s12 center-align">
											  <button class="btn waves-effect waves-light" type="submit" name="submit">Login
												<i class="material-icons right">send</i>
											  </button>
											</div>
										  </div>
										  
									</form>  
								</div>
							 </div>	
     					</div>
     				</div>
     			  </div>
     		 
     
     
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-2.2.3.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        