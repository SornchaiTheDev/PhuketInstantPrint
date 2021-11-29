<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/jquery/dist/jquery.min.js">
    <title>Loading</title>
</head>
<style>
    .pageloader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('image/printing.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: 20;
    }
</style>
<body>
    <div class="pageloader"></div>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
        $(window).ready(function() {
            setTimeout(function(){
                window.close();
            }, 1000);
            
        });
        </script>
</body>
</html>