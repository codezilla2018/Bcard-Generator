<?php
$firstname = $_GET['1'];
$lastname = $_GET['2'];
$address = $_GET['3'];
$title = $_GET['4'];
$company = $_GET['5'];
$phonenumber = $_GET['6'];
$emailaddress = $_GET['7'];
$website = $_GET['8'];
$photo = $_GET['9'];
$message = " $firstname"+ "$lastname";
$length = strlen($message) * 9.3;
$image = imagecreate($length,20);
$back = imagecolorallocate($image, 0,0,0);
$for = imagecolorallocate($image, 255,255,255);
imagestring($image,5,5,1,$message,$for);
header("Content-Type: image/jpeg");
imagejpeg($image);
?>
