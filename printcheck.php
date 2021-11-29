<?php
require "connect.php";
$lang = mysqli_fetch_row($conn->query("SELECT lang FROM counting WHERE id = 1"));
$langs = $lang[0];
if($langs == "th"){
    $printremain = "จำนวน";
  }
  if($langs == "eng"){
    $printremain = "Remain";
  }

  
  $count = mysqli_fetch_row($conn->query("SELECT * FROM counting"));
  $counting = $count[1];

  if($count[1] == 0 ){
    echo "<script>$('#outoforder').modal('show'); $('#print').addClass('disabled');</script>";
    $conn->query("UPDATE counting SET countnum = -404");
  }
  if($counting <= -404){
    echo "<script>$('#outoforder').modal('show');$('#print').addClass('disabled');</script>";
    $counting = 0;
  }
?>

<h4 class="d-inline text-danger" style="font-size:10pt;"><b><?php echo $printremain;?></b></h4><h4 class="d-inline" id="test" style="font-size:10pt;">  <?php echo $counting;?>  </h4><h4 class="d-inline text-danger"></h4>
<div id="printbtn">
                       <a id="print" class="btn new-color btn-lg btn-block" style="height : 110px; font-size : 35px;" onclick="printing();" ><i class="fa fa-print"></i><br> Print</a>
                       </div>