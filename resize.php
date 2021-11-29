<?php
ini_set('memory_limit', '-1');
include "Photo_File.php";

function ext($type) {
    $file_type = explode("." , $type);
    $file_type = end($file_type);
    return $file_type;
}





$hour = date('H');
if(!file_exists("$time/$hour")){
mkdir("$time/$hour" , 0700);
}

 
    $dir = opendir($photo);
    $i =1;
    $count= 2;
    $amo = $new+1;
    
    while ($file = readdir($dir)) {
    
        $new_file = scandir($photo);
    if($count <= $new+1){
if(ext($new_file[$count]) == 'JPG'){
    
    if ($i >= 10) {
        $resizename = "IMG_0" . $i . '.jpg';
        $time_folder = "$hour/IMG_0" . $i . '.jpg';
    }
    if ($i >= 100) {
        $resizename = "IMG_" . $i . '.jpg';
        $time_folder = "$hour/IMG_" . $i . '.jpg';
    }
    if ($i <= 9) {
        $resizename = "IMG_00" . $i . '.jpg';
        $time_folder = "$hour/IMG_00" . $i . '.jpg';
    }
    

    if (!file_exists("$thumbnail/$resizename")) {
        $img = imagecreatefromjpeg($photo."/".$new_file[$count]);
        $img = imagescale($img, 3648, 2432);
        imagejpeg($img, "$thumbnail/$resizename");
        imagedestroy($img);
        copy("$thumbnail/$resizename" ,  "$time/$time_folder"); 
    }
    $i++;   
    $count++;
            }  
        }

    }
	//echo  "amount " . $amo . "new " . $new;
    
