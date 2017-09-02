<?php

require('includes/db.php');
require('includes/reg.php');

?>

  <html>
    <head>
    <script type="text/javascript" src="js/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
    $(document).ready(function() {
    $('select').material_select();
    });
    </script>
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
     			  <div class="col s10 offset-s1 m6 offset-m3">
     						<div class="card large white hoverable" style="height: 720px;">
								<div class="card-content indigo-text">
								  <span class="card-title blue-text darken-3"><b>Register</b></span>
								  <div class="divider black"></div>

									<form class="col s12" action="" method="post" enctype="multipart/form-data" autocomplete="off">


								   		<input autocomplete="false" name="hidden" type="text" style="display:none;">

										<div class="row" style="margin-bottom: 0px;">
											<div class="input-field col s12">
										  <i class="material-icons prefix ">lock</i>
											  <input type="text" class="validate" name="username">
											  <label for="username">User Name</label>
											</div>
										  </div>

										  <div class="row" style="margin-bottom: 0px;">
											<div class="input-field col s12">
										  <i class="material-icons prefix ">vpn_key</i>
											  <input  type="password" class="validate" name="password">
											  <label for="password">Password</label>
											</div>
										  </div>

										  <div class="row" style="margin-bottom: 0px;">
											<div class="input-field col s12">
										  <i class="material-icons prefix ">person</i>
											  <input   type="text" class="validate" name="name">
											  <label for="name">Name</label>
											</div>

										  </div>

										  <div class="row" style="margin-bottom: 0px;">
											<div class="input-field col s12 m12">
											  <select name="school">
												  <option value="" disabled selected>Select the School</option>
												  <option value="SELECT">SELECT</option>
												  <option value="SITE">SITE</option>
												  <option value="SENSE">SENSE</option>
												  <option value="SAS">SAS</option>
												  <option value="SCSE">SCSE</option>
												</select>
												<label>School</label>
											</div>
										  </div>

										 <div class="row" style="margin-bottom: 0px;">
											<div class="input-field col s12">
										  <i class="material-icons prefix ">email</i>
											  <input id="email" type="email" class="validate" name="email">
											  <label for="email">Email</label>
											</div>
										  </div>

										  <div class="row" style="margin-bottom: 0px;">
											<div class="input-field col s12">
										  <i class="material-icons prefix ">code</i>
											  <input type="text" class="validate" name="code">
											  <label for="code">Access Code</label>
											</div>
										  </div>

										  <div class="row" style="margin-bottom: 0px;">
											<div class="input-field col s12 center-align">
											  <button class="btn waves-effect waves-light" type="submit" name="submit" >Submit
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


    </body>
  </html>
