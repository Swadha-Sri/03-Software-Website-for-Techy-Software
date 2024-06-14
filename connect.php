<?php
$connection = mysqli_connect('sql203.infinityfree.com','if0_36730263','j8yTDbdfm0xc','if0_36730263_log');

if(isset($_POST['send']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $place = $_POST['place'];
    $month = $_POST['month'];
    $domain = $_POST['domain'];
    $onwards = $_POST['onwards'];
    $feedback = $_POST['feedback'];

    $request = "insert into `tech`(`name`, `email`, `phone`, `address`, `place`, `month`, `domain`, `onwards`,`feedback`) values ('$name','$email','$phone','$address','$place','$month','$domain','$onwards','$feedback')";
    mysqli_query($connection,$request);

    header('location:index.php');
}

else
{
    echo 'something went wrong please try again!';
}

?>
