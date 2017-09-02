<?php

date_default_timezone_set("Asia/Calcutta");


if(isset($_POST['submit'])){
	
	$key_name=$_POST['key_name'];
	$uploaded_to=$_POST['to'];
	
	if($_FILES['file']['error']==0){
		
		$fname=$_FILES['file']['name'];
		$ftype=$_FILES['file']['type'];
		$fsize=$_FILES['file']['size'];
		$uploaded_by=$_SESSION["name"];
		$school=$_SESSION["school"];

			if(file_exists("uploads/".$fname)){
				echo "<script>alert('File already exixts!! rename and Upload');</script>";
			}
			else{
				$d=date("M_d_y_G_i_");
				$t=date("M_d_Y/G:i");
				move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$d.$fname);
				echo "<script>alert('Upload Success');</script>";
				
				$insert="INSERT INTO files (name,key_name,type,size,uploaded_by,uploaded_to,time,school) VALUES ('$d$fname','$key_name','$ftype','$fsize','$uploaded_by','$uploaded_to','$t','$school')";
				$run=mysqli_query($con,$insert);
				
				if($run){
					//echo "Sucesfully inserted into databse";
				}
				else{
					echo "Error".$run."<br>".mysqli_error($con);
				}
				
			}

		}

		else{
			echo "<script>alert('Upload Error!!');</script>";
			echo $_FILES['file']['error'];
		}
}




?>