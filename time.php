<?php

include "Photo_File.php";
error_reporting(0);
?>
<?php

//Clock
if($new >= 10){
    $name1 = "$thumbnail/IMG_0$new.jpg";
    }
    if($new >= 100){
        $name1 = "$thumbnail/IMG_$new.jpg";
    }if($new <= 9){
        $name1 = "$thumbnail/IMG_00$new.jpg";
    }
 
$dir = $thumbnail;
$timecheck = date("H" , filectime("$thumbnail/IMG_001.jpg"));
$lastphoto =date("H", filectime("$name1"));
$TimeNumber = array_slice(scandir($time), 2);
//echo $TimeNumber[0]
$btnvalues = $_POST['values'];
$timefolder = "$event/Time/$btnvalues";
$timebutton = "$event/Time";
$timebtn = array_slice(scandir($timebutton), 2);
$manytime = array_slice(scandir("$event/Time/$btnvalues"), 2);
$timing = count($manytime);
?>

    
                