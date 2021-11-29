
<?php
include "Photo_File.php";
if($new >= 1){
if(isset($_POST['values'])){
  $btnvalues = $_POST['values'];
}

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


$timefolder = "$event/Time/$btnvalues";
$timebutton = "$event/Time";
$timebtn = array_slice(scandir($timebutton), 2);
$manytime = array_slice(scandir("$event/Time/$btnvalues"), 2);
$timing = count($manytime);



  
for($count =0;$count <= $timing-1;$count++){

$show = 'A';

for($i = 1; $i<=$count;$i++){
  ++$show;
}

//checkphoto 
if($count <=9 ){
$photoplace = "$timefolder/IMG_00";
$photoshow = "$timefolder/IMG_00";

}
if($count >= 10)
{
$photoplace = "$timefolder/IMG_0";
$photoshow = "$timefolder/IMG_0";
}
if($count >= 100)
{
$photoplace = "$timefolder/IMG_";
$photoshow = "$timefolder/IMG_";
}
//createThumbnail 

echo '<div class="col-lg-3 mt-2">';

if(file_exists("$Full/$manytime[$count]")){
  echo '<span class="badge badge-success" style="position : absolute; left : 18px; top : 3px;"><h5>Printed <i class="far fa-paper-plane""></i></h5></span>';
}

 echo('<img id="'.$show.'" src="'.$timefolder.'/'.$manytime[$count].'">');


echo "<script type="."text/javascript".">";
echo "var photo_name;";
echo "var destination;";
echo "$('#$show').click(function(e){";
echo '$("#show").attr("src","'.$timefolder.'/'.$manytime[$count].'");' ;
echo "photo_name = '$timefolder/$manytime[$count]'; destination = '$manytime[$count]';";
echo '  var value = '.$_POST['values']. ';
$.ajax ({ 
        url : "slidenav.php",
        type : "post",
        data : {photos : value,show : destination},
      success:function(photo){
       
         $("#slideshow").html(photo);      
 
      },
      });  ';
echo "$('#AllPhoto').modal('hide');";
echo "});" ;
echo "</script>" ;
echo '</div>';

  }
}
?>