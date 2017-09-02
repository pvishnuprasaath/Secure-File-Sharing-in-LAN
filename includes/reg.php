<?php
session_start();

function bucket_crypt($input, $rounds = 7)
  {
	$ip=getIp();
	$str="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$str=str_shuffle($str);
	$gkey=substr($str,0,11);
	$_SESSION["key"]=$gkey;
	$salt=$ip.$gkey;
    return crypt($input, sprintf('$2y$%02d$', $rounds) . $salt);
  }

if(isset($_POST['submit'])){
	
	
	$name=$_POST['name'];
	$school=$_POST['school'];
	$un=$_POST['username'];
	$pass=$_POST['password'];
	$email=$_POST['email'];
	$code=$_POST['code'];
	$cip=getIp();
	$pass_hash=bucket_crypt($pass);
	
	$np="#^[A-Z][a-z]*(\s[A-Z][a-z]*)?$#";
	$up="#^\w{6,}$#";
	$pp="#^\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$#";
	$ep="#^[a-z][a-z_\.\d]*\@\w*\.com$#";
	$cp="#^[A-Z\d]{4}$#";
	
	
	if(preg_match($up,$un)){
		if(preg_match($pp,$pass)){
			if(preg_match($np,$name)){
				if(preg_match($ep,$email)){
					if(preg_match($cp,$code)){
						if($school!= NULL ){
							
							$_SESSION["email"]=$email;
							$_SESSION["name"]=$name;
							$k=$_SESSION["key"];
							$insert="INSERT INTO users (name,school,username,password,code,keyy,ip,email) VALUES ('$name','$school','$un','$pass_hash','$code','$k','$cip','$email');";
	
							$run=mysqli_query($con,$insert);
							
							if($run){
								header( "Location: PHPMailer-master/examples/gmail2.php" );
							}
							else{
								echo "Error".$run."<br>".mysqli_error($con);
							}
	
						}else {echo"<script>alert('Select a School');</script>";}
						
					}else {echo"<script>alert('Invalid Code');</script>";}
					
				}else {echo"<script>alert('Invalid Email');</script>";}
				
			}else {echo"<script>alert('Invalid Name- should start with a Capital Letter and sould consist only of alphabets.');</script>";}
			
		}else {echo"<script>alert('Invalid Password- Password should consist of atleast 1 lowercase , 1 uppercase, a number , a special character and a minimum of 6 Characters');</script>";}
		
	}else {echo"<script>alert('Invalid Username- Minimum 6 character alphanumeric username');</script>";}
	
	
	
	
	
	
}




?>