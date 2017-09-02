<?php

function bucket_crypt($input,$key, $rounds = 7)
  {
	$ip=getIp();
	$salt=$ip.$key;
    return crypt($input, sprintf('$2y$%02d$', $rounds) . $salt);
  }

if(isset($_POST['submit'])){
	
	$un=$_POST['username'];
	$pass=$_POST['password'];
	$key=$_POST['key'];
	$captcha=$_POST['captcha'];
	$cip=getIp();
	$pass_hash=bucket_crypt($pass,$key);
	
	if(!empty($un) && !empty($pass) && !empty($captcha)){
	
		if($captcha==$_SESSION['secure']){
				$select="SELECT * FROM users where username='$un' AND password='$pass_hash' ";

			$run = mysqli_query($con,$select);
			$result=mysqli_fetch_assoc($run);

			$check_user=mysqli_num_rows($run);

			if($check_user==0){
				echo"<script>alert('Invaid email or Pasword or key')</script>";
				$_SESSION['secure']=rand(1000,9999);
			}
		else{
			if($key==$result['keyy']){
				$str="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
				$str=str_shuffle($str);
				$gkey=substr($str,0,11);

				$_SESSION["name"]=$result["name"];
				$_SESSION["school"]=$result["school"];
				$_SESSION["code"]=$result["code"];
				$_SESSION["ip"]=$result["ip"];
				$_SESSION["email"]=$result["email"];
				$_SESSION["username"]=$result["username"];
				$_SESSION["key"]=$gkey;
				$un=$_SESSION["username"];
				
				$passhash=bucket_crypt($pass,$gkey);
				
				$upd="UPDATE users SET keyy='$gkey',password='$passhash' WHERE username='$un'";
				$run = mysqli_query($con,$upd);

				header( "Location: PHPMailer-master/examples/gmail.php" );
				}
				else{
					echo"<script>alert('Verification Doesnot match')</script>";
				$_SESSION['secure']=rand(1000,9999);
				}
			}
		}
		else{
			echo"<script>alert('Verification Doesnot match')</script>";
			$_SESSION['secure']=rand(1000,9999);
		}
	
		
	
	}
	   else{
		   echo "All the fields are required";
	   }
	
	
}





?>