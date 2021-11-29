<?php

include "Photo_File.php";
include "time.php";
error_reporting(0);
if (file_exists("$time/07")) {
  rmdir("$time/07");
}
?>
         
     
    <?php $timecount = count($timebtn);
  
  for($i = 0; $i < $timecount;$i++){
  
   
    echo('<button type="button" name="'.$timebtn[$i].'" id="'.$timebtn[$i].'" value="'.$timebtn[$i].'" class="btn new-color ml-3 mt-2" data-toggle="modal" data-target="#AllPhoto"><i class="fa fa-clock"></i>'.$timebtn[$i].':00 </button>');
   echo '<script>
     $("#'.$timebtn[$i].'").click(function(){
         var value = $("#'.$timebtn[$i].'").val();
$.ajax ({ url : "thumbnail-show.php",
  type : "post",
        data : {values : value},
success:function(modal){
  $("#modalrefresh").html(modal);
  
}
});    
 
         
        });
        
   </script>';
 
}

  ?>

 



       

    
 
      


        
     
  