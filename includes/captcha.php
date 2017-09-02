<?php
session_start();
header('Content-type:image/jpeg');

$text= $_SESSION['secure'];
$font_size=40;
$img_width=120;
$img_height=50;

$image=imagecreate($img_width,$img_height);
imagecolorallocate($image,255,255,255);
$text_color=imagecolorallocate($image,0,0,0);

imagettftext($image,$font_size,0,30,45,$text_color,'Snickles.ttf',$text);

for($x=1;$x<=30;$x++){
	$x1=rand(1,100);
	$x2=rand(1,100);
	$y1=rand(1,100);
	$y2=rand(1,100);
	
	imageline($image,$x1,$y1,$x2,$y2,$text_color);
}



imagejpeg($image);



?>