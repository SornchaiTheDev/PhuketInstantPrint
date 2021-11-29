<?php
//error_reporting(0);
 include "Photo_File.php";
    include "time.php";
    require "connect.php";

  if (!file_exists("$event")) {
    mkdir("$event", 0777, true);
    echo("<script>console.log('Created')</script>");
   }
   if (!file_exists("$photo")) {
    mkdir("$photo", 0777, true);
    echo("<script>console.log('Created')</script>");
   }
   if (!file_exists("$thumbnail")) {
    mkdir("$thumbnail", 0777, true);
    echo("<script>console.log('Created')</script>");
   }
   if (!file_exists("$time")) {
    mkdir("$time", 0777, true);
    echo("<script>console.log('Created')</script>");
   }
   if (!file_exists("$Full")) {
    mkdir("$Full", 0777, true);
    echo("<script>console.log('Created')</script>");
   }
if(isset($_GET['lang'])){
   if($_GET['lang'] == "th"){
    $conn->query("UPDATE counting SET lang = 'th' WHERE id = 1");
  }
  if($_GET['lang'] == "eng"){
    $conn->query("UPDATE counting SET lang = 'eng' WHERE id = 1");
  }
}
if(isset($_GET['count'])){
  $count = $_GET['count'];
  $conn->query("UPDATE counting SET countnum = $count WHERE id = 1");
}
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="logo.jpg" type="icon/jpg">
  <title>Spaghetti</title>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="node_modules/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="node_modules/slick/slick-theme.css" />
  <script type="text/javascript" src="node_modules/slick/slick.min.js"></script>
  <link rel="stylesheet" href="node_modules/fontawesome/css/all.min.css">
  <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
  <script src="node_modules/sweetalert2/dist/promise-polyfill.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="animate.css">





</head>

<!-- Picture Preview-->

<body style="overflow: hidden; background-color : rgba(48, 48, 48, 0.973);">

  <?php
/*
  include 'Photo_File.php';
  include "time.php";
  require "connect.php";
  //error_reporting(0);
*/

  if (file_exists("$time/07")) {
    rmdir("$time/07");
    echo ("<script>console.log('Created')</script>");
  }
  if ($new >= 10) {
    $name1 = "$thumbnail/IMG_0$new.jpg";
  }
  if ($new >= 100) {
    $name1 = "$thumbnail/IMG_$new.jpg";
  }
  if ($new <= 9) {
    $name1 = "$thumbnail/IMG_00$new.jpg";
  }
  $lang = mysqli_fetch_row($conn->query("SELECT lang FROM counting WHERE id = 1"));
  $langs = $lang[0];

  if ($langs == "th") {

    $timetaken = "เลือกเวลาที่ถ่าย";
    $newphoto = "รูปล่าสุด";
    $outorder = "OUT OF ORDER";
    $printremain = "จำนวน";
    //  $conn->query("UPDATE counting SET lang = 'th' WHERE id = 1");

  }
  if ($langs == "eng") {
    $timetaken = "Choose Taken Time";
    $newphoto = "New Photo";
    $outorder = "OUT OF ORDER";
    $printremain = "Remain";
    //$conn->query("UPDATE counting SET lang = 'eng' WHERE id = 1");
  }




  $count = mysqli_fetch_row($conn->query("SELECT * FROM counting"));
  $counting = $count[1];







  ?>

  <nav class="navbar navbar-light text-light " style="height : 60px; background-color : black;">

    <img src="logo.png" style=" color: white;
        text-shadow: 2px 2px 4px #000000;" width="20px" alt="">
    <h5 class="ml-5" style=" color: white;
  text-shadow: 2px 2px 4px #000000;"><i class="far fa-clock"></i> <?php echo $timetaken; ?></h5>
    <div id="clock_reload" class="d-inline-block mb-2"></div>
    <div class="mr-auto ml-5">

    <div id="resize"></div>
    </div>

  </nav>

  <div class="row">
    <div class="col-lg-9 mt-4 mx-auto">
      <div class="item">
        <img id="show" style="position : absolute;" src="<?php echo "$thumbnail/IMG_001.jpg"; ?>" alt="">
        <img style="z-index : 10; position : absolute; " src="<?php echo $logo; ?>" alt="">



      </div>
    </div>
    <div class="col-lg-2 ml-auto">
      <div style=" background-color :black;">
        <div class="col-lg-12 text-light" style="height : 1175px;">
          <h3 class="text-center" style=" color: white;
      text-shadow: 2px 2px 4px #000000;"><b><?php echo $newphoto; ?></b></h3>
          <div class="" id="news"></div>

          <div class="mx-auto mt-5 slideshow" style="width:100%; height : 50%;" id="slideshow"></div>

          <div class="col-lg-12 text-center">
            <!--PrintCheck-->
            <div id="printcheck" class="mt-2"></div>

          </div>

        </div>
      </div>

    </div>
  </div>
  </div>
  <!--PrintCheck-->
  <div class="modal fade" id="outoforder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Warning !!</h5>
          <button type="button" class="close" data-dismiss="modal">
            Close
          </button>
        </div>
        <div class="modal-body">
          <h1 class="text-danger"><i class="fas fa-exclamation-triangle"></i><?php echo $outorder; ?></h1>
        </div>

      </div>
    </div>
  </div>
  </div>

  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="node_modules\lazyload\jquery.lazy.min.js"></script>
  <div id="thumbnailfinal"></div>
  

  <script type="text/javascript">
    $(document).ready(function() {
      $('#news').load('new.php');
      $('#thumbnailfinal').load('thumbnail-final.php');
      $('#slideshowreload').load('slidenav.php')
      $('#resize').load('resize.php')
      $('#printcheck').load("printcheck.php");
    });
    setInterval(newreload, 5000)

    function newreload() {
      $('#news').load('new.php');
      console.log('reload');
    }
    setInterval(countcheck, 3000)

    function countcheck() {
      $('#printcheck').load('printcheck.php');
      console.log('countcheck');
    }
  
    setInterval(resize, 1000)

    function resize() {
      $('#resize').load('resize.php')
      console.log('resize');
    }


    function printing() {
      localStorage.setItem('photo_names', photo_name);
      localStorage.setItem('dest', destination);
       window.open('print.php');


/*      Swal.fire({
        title: 'ConfirmPrint',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Print',
        cancelButtonText: 'Cancel'
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            title: 'Printing...',
            type: 'success',
            confirmButtonText: 'Close'
          })
          localStorage.setItem('photo_names', photo_name);
          localStorage.setItem('dest', destination);
          window.open('print.php');


        }
      }) */
    }
  </script>
</body>

</html>