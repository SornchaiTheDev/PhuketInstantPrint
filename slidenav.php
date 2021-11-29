
<div class="time">
<?php

 //error_reporting(0);
include "Photo_File.php";
if(isset($_POST['photos'])){
  $photovalues = $_POST['photos']; 
}
if(isset($_POST['show'])){
  $show = $_POST['show'];
}
if(isset($_POST['new'])){
  $new = $_POST['new'];
}


if($photovalues < 10){
  $photovalues = str_replace($photovalues, "$photovalues",$photovalues);
}






$rename = str_replace('IMG_', '',$show);
$finalrename  =str_replace('.jpg','',$rename);



if($finalrename > 10){
$full1 = $finalrename-1;
$full2 = $finalrename;
$full3 = $finalrename+1;
$full4 = $finalrename+2;
$full5 = $finalrename-2;

if($full1 < 100){
  $image1 = "IMG_0$full1.jpg";
   
}
if($full1 >= 100){
  $image1 = "IMG_$full1.jpg";
   
}

if($full3 < 100){
  $image3 = "IMG_0$full3.jpg";
   
}
if($full3 >= 100){
  $image3 = "IMG_$full3.jpg";
   
}

$image2= "IMG_$full2.jpg";


if($full4 < 100){
 $image4 = "IMG_0$full4.jpg";
   
}
if($full4 >= 100){
 $image4 = "IMG_$full4.jpg";
   
}


if($full5 < 100){
  $image5 = "IMG_0$full5.jpg";
   
}
if($full5 >= 100){
  $image5 = "IMG_$full5.jpg";
   
}
}
if($new == "new"){

  if($finalrename <= 8){
    $image1 = $finalrename-1;
    $image2 = $finalrename;
    $image3 = $finalrename-2;
    $image4 = $finalrename-3;
    $image5 = $finalrename-4;
    $image1 = "IMG_00$image1.jpg";
    $image2 = "IMG_$image2.jpg";
    $image3 = "IMG_00$image3.jpg";
    $image4 = "IMG_00$image4.jpg";
    $image5 = "IMG_00$image5.jpg";
    }
    if($finalrename == 9){
      $image1 = $finalrename-1;
      $image2 = $finalrename;
      $image3 = $finalrename-2;
      $image4 = $finalrename-3;
      $image5 = $finalrename-4;
      $image1 = "IMG_00$image1.jpg";
      $image2 = "IMG_$image2.jpg";
      $image3 = "IMG_0$image3.jpg";
      $image4 = "IMG_0$image4.jpg";
      $image5 = "IMG_00$image5.jpg";
      }
    
    if($finalrename == 10){
      $image1 = $finalrename-1;
      $image2 = $finalrename;
      $image3 = $finalrename-2;
      $image4 = $finalrename-3;
      $image5 = $finalrename-4;
      $image1 = "IMG_00$image1.jpg";
    $image2 = "IMG_$image2.jpg";
    $image3 = "IMG_0$image3.jpg";
    $image4 = "IMG_0$image4.jpg";
    $image5 = "IMG_00$image5.jpg";
      }
      if($finalrename == 11){
        $image1 = $finalrename-1;
        $image2 = $finalrename;
        $image3 = $finalrename-2;
        $image4 = $finalrename-3;
        $image5 = $finalrename-4;
        $image1 = "IMG_0$image1.jpg";
      $image2 = "IMG_$image2.jpg";
      $image3 = "IMG_0$image3.jpg";
      $image4 = "IMG_0$image4.jpg";
      $image5 = "IMG_00$image5.jpg";
        }
        

 
}else{
if($finalrename <= 8){
  $image1 = $finalrename-1;
  $image2 = $finalrename;
  $image3 = $finalrename+1;
  $image4 = $finalrename+2;
  $image5 = $finalrename+3;
  $image1 = "IMG_00$image1.jpg";
  $image2 = "IMG_$image2.jpg";
  $image3 = "IMG_00$image3.jpg";
  $image4 = "IMG_00$image4.jpg";
  $image5 = "IMG_00$image5.jpg";
  }
  if($finalrename == 9){
    $image1 = $finalrename-1;
    $image2 = $finalrename;
    $image3 = $finalrename+1;
    $image4 = $finalrename+2;
    $image5 = $finalrename+3;
    $image1 = "IMG_00$image1.jpg";
    $image2 = "IMG_$image2.jpg";
    $image3 = "IMG_0$image3.jpg";
    $image4 = "IMG_0$image4.jpg";
    $image5 = "IMG_00$image5.jpg";
    }
  
  if($finalrename == 10){
    $image1 = $finalrename-1;
    $image2 = $finalrename;
    $image3 = $finalrename+1;
    $image4 = $finalrename+2;
    $image5 = $finalrename+3;
    $image1 = "IMG_00$image1.jpg";
  $image2 = "IMG_$image2.jpg";
  $image3 = "IMG_0$image3.jpg";
  $image4 = "IMG_0$image4.jpg";
  $image5 = "IMG_00$image5.jpg";
    }
    if($finalrename == 11){
      $image1 = $finalrename-1;
      $image2 = $finalrename;
      $image3 = $finalrename+1;
      $image4 = $finalrename+2;
      $image5 = $finalrename+3;
      $image1 = "IMG_0$image1.jpg";
    $image2 = "IMG_$image2.jpg";
    $image3 = "IMG_0$image3.jpg";
    $image4 = "IMG_0$image4.jpg";
    $image5 = "IMG_00$image5.jpg";
      }
    }
     if(strlen($photovalues) == 1){
       $photovalues = "0".$photovalues;
     }
    

if(file_exists("$time/$photovalues/$image2")){
  echo('<img class="mt-2 img-thumbnail b" id="b" src="'.$time.'/'.$photovalues.'/'.$image2.'">');
  echo "<script type="."text/javascript".">";
  echo "var photo_name;";
  echo "$('#b').click(function(e){   $('.b').addClass('bg-warning'); $('.a,.c,.e,.d').removeClass('bg-warning');";
  echo '$("#show").attr("src","'.$time.'/'.$photovalues.'/'.$image2.'");' ;
  echo "photo_name = '$time/$photovalues/$image2'; destination = '$image2';});" ;
  echo "</script>" ;
        }




if(file_exists("$time/$photovalues/$image3")){
echo('<img class="mt-2 img-thumbnail c" id="c" src="'.$time.'/'.$photovalues.'/'.$image3.'">');
  echo "<script type="."text/javascript".">";
  echo "var photo_name;";
  echo "$('#c').click(function(e){   $('.c').addClass('bg-warning'); $('.a,.b,.e,.d').removeClass('bg-warning');";
  echo '$("#show").attr("src","'.$time.'/'.$photovalues.'/'.$image3.'");' ;
  echo "photo_name = '$time/$photovalues/$image3'; destination = '$image3';});" ;
  echo "</script>" ;
}
if(file_exists("$time/$photovalues/$image4")){
 echo('<img class="mt-2 img-thumbnail d" id="d" src="'.$time.'/'.$photovalues.'/'.$image4.'">');
  echo "<script type="."text/javascript".">";
  echo "var photo_name;";
  echo "$('#d').click(function(e){ $('.d').addClass('bg-warning'); $('.a,.b,.c,.e').removeClass('bg-warning');";
  echo '$("#show").attr("src","'.$time.'/'.$photovalues.'/'."$image4".'");' ;
  echo "photo_name = '$time/$photovalues/$image4'; destination = '$image4';});" ;
  echo "</script>" ;
}
 
if(file_exists("$time/$photovalues/$image5")){
echo('<img class="mt-2 img-thumbnail e" id="e" src="'.$time.'/'.$photovalues.'/'.$image5.'">');
  echo "<script type="."text/javascript".">";
  echo "var photo_name;";
  echo "$('#e').click(function(e){   $('.e').addClass('bg-warning'); $('.a,.b,.c,.d').removeClass('bg-warning');";
  echo '$("#show").attr("src","'.$time.'/'.$photovalues.'/'."$image5".'");' ;
  echo "photo_name = '$time/$photovalues/$image5'; destination = '$image5';});" ;
  echo "</script>" ;
  }
  if(file_exists("$time/$photovalues/$image1")){
    echo('<img class="mt-2 img-thumbnail a" id="a" src="'.$time.'/'.$photovalues.'/'.$image1.'">');
      echo "<script type="."text/javascript".">";
      echo "var photo_name;";
      echo "$('#a').click(function(e){    $('.a').addClass('bg-warning'); $('.e,.b,.c,.d').removeClass('bg-warning');";
      echo '$("#show").attr("src","'.$time.'/'.$photovalues.'/'."$image1".'");' ;
      echo "photo_name = '$time/$photovalues/$image1'; destination = '$image1' ;});" ;
      echo "</script>" ;
    }
 



?>

</div>
<script type="text/javascript">

    $(document).ready(function(){
      $('.b').addClass('bg-warning'); $('.a,.c,.e,.d').removeClass('bg-warning');
$('.time').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  infinite : true,
  centerMode: true,
  focusOnSelect: true,
  vertical : true,
  verticalSwiping : true,
  arrows: false,
  centerPadding : '26px',
  

});
    });



    $('script').remove();
   
         
  </script>
 

