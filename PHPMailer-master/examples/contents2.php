<?php
session_start();
$k=$_SESSION['key'];
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Bucket</title>
</head>
<body>
<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
  <h1>Your have Registered in Bucket network Securely. The secret Key for your next login is <?php echo $k; ?> ..</h1>
  <div align="center">
    <img src="images/logo.png" height="150" width="300" alt="Bucket">
  </div>

  
</div>
</body>
</html>
