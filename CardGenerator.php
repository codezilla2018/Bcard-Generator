<?php

require_once("qrlib.php");
require_once("qrcodegenerator.php");

class BCard
{
   $firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$address=$_POST["address"];
$title=$_POST["title"];
$company=$_POST["company"];
$email=$_POST["email"];
$website=$_POST["website"];
$phonenumber=$_POST["phonenumber"];
    public $template = 1 ;
    
   
    QrCodeForCard();
        $logopath = $this->qrCodePath;
        if($this->template == 1){
            $font = 'Starjout.ttf';
            $firstname = imagecolorallocate($im, 100, 100, 100);
            $lastname = imagecolorallocate($im, 220, 100, 200);
            $company = imagecolorallocate($im, 220, 100, 200);
            $phonenumber = imagecolorallocate($im, 250, 200, 200);
           $email = imagecolorallocate($im, 100, 100, 100);
           $website = imagecolorallocate($im, 220, 100, 200);
            $title = imagecolorallocate($im, 220, 100, 200);
          
            
      
        }
      
        else{
            $firstname = imagecolorallocate($im, 100, 100, 100);
            $lastname = imagecolorallocate($im, 220, 100, 200);
            $company = imagecolorallocate($im, 220, 100, 200);
            $phonenumber = imagecolorallocate($im, 250, 200, 200);
           $email = imagecolorallocate($im, 100, 100, 100);
           $website = imagecolorallocate($im, 220, 100, 200);
            $title = imagecolorallocate($im, 220, 100, 200);
          
        }
        
        
       $image = imagecreatetruecolor(120, 20);
       $text_color = imagecolorallocate($image, 233, 14, 91);
        $text_color = imagecolorallocate($im, 233, 14, 91);
        imagestring($image,5,5,1,'A Simple Text String',$text_color);
        header("Content-Type: image/jpeg");
        imagejpeg($image);
    }
   
   
   




?>
