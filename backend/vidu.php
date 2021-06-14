<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        div {
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <!-- header start -->
    <?php
    include_once __DIR__ . '/layout/partials/header.php';
    
    ?>
   <!--    Header end -->


<!--    content start -->
   <div class="container-fluid">
       <div class="row">
            <!-- sider star -->
    <?php include_once __DIR__ . '/layout/partials/slider.php' ?>
           <!-- sider end -->

           <!-- main star -->
           <div class="col-md-9">
               <h1> Ví dụ 1</h1>
           </div>
              <!-- main star -->
       </div>


       <!-- footer start -->
       <div class="row">
       <?php include_once __DIR__ . '/layout/partials/footer.php' ?>
       </div>
       <!-- footer end -->
   </div>
<!--    content end -->

<!-- JS sử dụng cho toàn hệ thống -->
<?php include_once __DIR__ . '/layout/scripts.php'; ?>






</body>
</html>