<?php 

    include('qrlib.php'); 
    include('connection.php'); 

    // how to build raw content - QRCode with detailed Business Card (VCard) 

$sel_query="Select * from newmeduser ORDER BY id desc;";
$result = mysqli_query($connection,$sel_query);
if(!$result){
	die('No data');
}
while($row = mysqli_fetch_array($result)) { ?>
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$address=$_POST["address"];
$title=$_POST["title"];
$company=$_POST["company"];
$email=$_POST["email"];
$website=$_POST["website"];
$phonenumber=$_POST["phonenumber"];
<?php  } ?>
<?php
public function QrCodeForCard()
{
    $tempDir = EXAMPLE_TMP_SERVERPATH; 

   

    // we building raw data 
    $codeContents  = 'BEGIN:VCARD'."\n"; 
    $codeContents .= 'VERSION:2.1'."\n"; 
    $codeContents .= 'N:'.$firstnameName."\n"; 
    $codeContents .= 'FN:'.$lastnamename."\n"; 
    $codeContents .= 'ORG:'.$company."\n"; 
$codeContents .= 'ORG:'.$title."\n"; 
$codeContents .= 'ORG:'.$website."\n"; 
    $codeContents .= 'TEL;WORK;VOICE:'.$phonenumber."\n"; 
    

    $codeContents .= 'ADR;TYPE=work;'. 
        'LABEL="'.$addressLabel.'":' 
        .$address. 
        
    ."\n"; 

    $codeContents .= 'EMAIL:'.$email."\n"; 

    $codeContents .= 'END:VCARD'; 

    // generating 
   $QR= QRcode::png($codeContents, $tempDir.'026.png', QR_ECLEVEL_L, 3); 
return $QR;
}
  
?>
