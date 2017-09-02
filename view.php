	<?php
	session_start();
	require("includes/db.php");

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
    		
    		<?php
				if($_SESSION["ip"]==getIP()){
					$un=$_SESSION['username'];
					$get_files="SELECT * FROM files WHERE uploaded_to='$un'";
					$run=mysqli_query($con,$get_files);
					if(mysqli_num_rows($run)==0){
						echo "<h2>No files Available to view.<h2>";
					}else{
					
				?>
    			
    			<ul class="collection">
    			
    			
    		<?php
				

				while($result=mysqli_fetch_array($run)){
					$name=$result['name'];
					$key_name=$result['key_name'];
					$uploaded_by=$result['uploaded_by'];
					$school=$result['school'];
					$type=$result['type'];
					
					if($type=="image/jpeg"){
						echo"
						<li class='collection-item avatar'>
						<i class='material-icons circle red'>perm_media</i>
						<span class='title'>$key_name</span>
						<p>Uploaded by:$uploaded_by<br>
						 $school
					    </p>
						<a href='uploads/$name' class='secondary-content' target='_blank'>View</a>
						</li>";
						
					}
					else if($type=="application/msword" || $type=="application/pdf"){
						echo"
						<li class='collection-item avatar'>
						<i class='material-icons circle green'>description</i>
						<span class='title'>$key_name</span>
						<p>Uploaded by:$uploaded_by<br>
						 $school
					    </p>
						<a href='uploads/$name' class='secondary-content' target='_blank'>View</a>
						</li>";
					}
					else{
						echo"
						<li class='collection-item avatar'>
						<i class='material-icons circle blue'>description</i>
						<span class='title'>$key_name</span>
						<p>Uploaded by:$uploaded_by<br>
						 $school
					    </p>
						<a href='uploads/$name' class='secondary-content' target='_blank'>View</a>
						</li>";
						
					}
					
				}
				}
					?>

					
				  </ul>
				  <?php
				
				}
				else{
					echo "<h2>Security alert! Open this tab in your registered Device.<h2>";
				}
				
				?>
    			
    		</div>
    	</div> 
     
     
     
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-2.2.3.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>