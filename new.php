<!--Variables-->
<style>
.animation {
  animation-duration: 1s;
}
</style>
<?php
include "Photo_File.php";
error_reporting(0);
  
  ?>
<!--First Photo-->
<img id="newphoto1" class="animation img-thumbnail animated fadeIn" src="
<?php 

 $Firstnew = $new;
if($new >= 10){
    $name1 = "$thumbnail/IMG_0";
    $Firstview = "$thumbnail/IMG_0$Firstnew";
    $newphoto = "IMG_0$Firstnew";
    }
    if($new >= 100){
        $name1 = "$thumbnail/IMG_";
        $Firstview = "$thumbnail/IMG_$Firstnew";
        $newphoto = "IMG_$Firstnew";
    }if($new <= 9){
        $name1 = "$thumbnail/IMG_00";
        $Firstview = "$thumbnail/IMG_00$Firstnew";
        $newphoto = "IMG_00$Firstnew";
    }
   
    echo "$name1$Firstnew.jpg";
    ?>">
    <?php
    if(file_exists("$thumbnail/IMG_001.jpg")){
   $newphototime =date("H", filectime("$name1$Firstnew.jpg"));
    }
   
      
    
    
    ?>
    
    
    <script>
 
$(document).ready(function(){

});

    var photo_name;
        $('#newphoto1').click(function(e){
        $("#show").attr("src","<?php echo "$Firstview.jpg"; ?>");
            photo_name = "<?php echo "$Firstview.jpg"; ?>";
            destination = "<?php echo "$newphoto.jpg"; ?>";
            var value = "<?php echo $newphototime;?>"
            
    $.ajax ({ 
        url : "slidenav.php",
        type : "post",
        data : {photos : value,show : destination,new : "new"},
      success:function(photo){
       
         $("#slideshow").html(photo);      
 
      },
      });  
        });
     
    </script>

  