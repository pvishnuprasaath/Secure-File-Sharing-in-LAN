	<?php
	session_start();
	require("includes/db.php");
	require("includes/up.php");
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

    <body>
    
    	<div class="row">
    		<div class="col s10 offset-s1 m6 offset-m3">
    			<form action="" method="POST" enctype="multipart/form-data">
					<div class="file-field input-field">
				  
					  <div class="btn">
						<span>File</span>
						<input type="file" name="file">
					  </div>
					  <div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					  </div>
					</div>
					<div class="row" style="margin-bottom: 0px;">
							<div class="input-field col s12">
							  <input type="text" class="validate" name="key_name">
							  <label for="code">Description</label>
							</div>
					  </div>
										  
					 <div class="row" style="margin-bottom: 0px;">
					 		<div class="input-field col s6">
								<select name="to">
								 	<option value="" disabled selected>Select</option>
									<?php
										$get_files="SELECT * FROM users order by name";
										$run=mysqli_query($con,$get_files);

										while($result=mysqli_fetch_array($run)){
											$name=$result['name'];
											$username=$result['username'];
											echo "<option value=\"$username\">$name</option>"	;
										}
									?>
									
									
								</select>
								<label>TO</label>
							</div>
					 
							<div class="input-field col s6 center-align">
								<button class="btn waves-effect waves-light" type="submit" name="submit" onclick="Materialize.toast('Sent!!', 9000)">Send
												<i class="material-icons right large">cloud_upload</i>
								</button>
							</div>
					 </div>
					
				  </form>
    		</div>
    	</div> 
     
     <script>
		$("form").submit(function(){
		  $.post($(this).attr("action"), $(this).serialize());
		  return false;
		});
		
		</script>
     
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-2.2.3.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
		$(document).ready(function() {
    $('select').material_select();
  });
		</script>
    </body>
  </html>