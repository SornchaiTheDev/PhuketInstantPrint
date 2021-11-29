<?php
//error_reporting(-1);
date_default_timezone_set('Asia/Bangkok');

$day = date("d-m-Y");
$event = "Work/$day";
$photo =("$event/Photo");
$thumbnail = ("$event/Thumbnail");
$Full = ("$event/Print");
if(file_exists("$event/logo.png")){
    $logo = "$event/logo.png";
}
else {
   // $logo = "logo.png";
}


$time = "$event/Time";

$amount = array_slice(scandir($photo), 2);
$thumbnails = array_slice(scandir($thumbnail), 2);

$amountcount = count($amount);
$thumbnailcount = count($thumbnails);
//newFile
$new = count($amount);
//$new = $new-1;

//newPhotoFunction
if($new >= 10)
{
    $name = "$photo/IMG_0";
}
if($new >= 100)
{
    $name = "$photo/IMG_";
}
if($new <= 9)
{
    $name = "$photo/IMG_00";
}

?>





   