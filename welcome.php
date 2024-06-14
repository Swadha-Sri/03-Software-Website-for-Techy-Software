<?php

@include 'index.php';

session_start();

if(!isset($_SESSION['send'])){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techy Website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="tech.css">

</head>
<body>
        <div class="container">
            <div class="content">
                <a href="index.php" class="btn"> Main Page </a>
            </div>
        </div>
</body>
</html>
            