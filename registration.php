<?php
// header('location: login.php');
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'advertdb');

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from customer where fullname = 'fullname' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num==1){
    echo "Username Already Taken!";
}else{
    $reg = "INSERT INTO customer(fullname,email,password) values ('$fullname','$email','$password')";
    mysqli_query($con,$reg);
    echo "Registration Succesful";
}
?>
