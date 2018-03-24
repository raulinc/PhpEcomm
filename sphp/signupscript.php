<?php
    $con = mysqli_connect("localhost", "root","", "happystore")
    or die(mysqli_error($con));
    
$uname = $_POST['name'];
$email = $_POST['e-mail'];
$pass = $_POST['password'];
$contact = $_POST['contact'];
$city= $_POST['city'];
 
// attempt insert query execution
$sql= "insert into user (name, email, password, contact, city) values ('$uname', '$email', '$pass', '$contact', '$city')";
$usersignup = mysqli_query($con, $sql);
    $t=header('location : ../../product.php');
    
   
?>