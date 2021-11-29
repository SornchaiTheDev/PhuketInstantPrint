<?php
ini_set('memory_limit','-1');
include 'Photo_File.php';
if(isset($_POST['watermark'])){
    $watermark = $_POST['watermark'];
}
if(isset($_POST['dest'])){
    $destination = $_POST['dest'];
}

$image  = imagecreatefromjpeg("$thumbnail/$destination");
$banner = imagecreatefrompng($logo);
imagecopy($image, $banner,0, 0, 0, 0, imagesx($banner), imagesy($banner));
imagejpeg($image,"$Full/$destination");
imagedestroy($image);
?>





