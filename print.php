<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
   
    <title>Document</title>

<style>


.item {
    width: 1000px;
    min-height: 120px;
    max-height: auto;
    float: left;
  
}

</style>
</head>
<body>
<?php
include "Photo_File.php";
require "connect.php";
$count = mysqli_fetch_row($conn->query("SELECT * FROM counting"));
$counting = $count[1];
//echo $counting;

$conn->query("UPDATE counting SET countnum = $counting-1 WHERE id = 1");
$lang = mysqli_fetch_row($conn->query("SELECT lang FROM counting WHERE id = 1"));
$language  = $lang[0];


  ?>
  
  <div class="item">
  <img style="z-index : -1; position : absolute; " id="show" src="">
  <img style="z-index : 10; position : absolute; width: 100%; height: auto;"class="container-fluid img-fluid" src="<?php if(file_exists($logo)){ echo $logo;}else{ echo $nologo;}?>" alt="">
  </div>
  
  
    

 <script src="node_modules/jquery/dist/jquery.min.js"></script>
 
<script>
      var photo_name = localStorage.getItem("photo_names");
      var dest = localStorage.getItem("dest");
      $("#show").attr("src",photo_name);
$(document).ready(function(){

        //window.open("wait.php");  
        window.print(); 
	
        setTimeout(function() {
            window.close();     
        }, 100);
        

        $.ajax ({ 
            url : "watermark.php",
            type : "post",
            data : {watermark : photo_name,dest : dest},
            success:function(water){
            console.log(water);
            }
        });    
});

</script>




</body>
</html>