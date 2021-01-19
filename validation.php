 <?php
// header('location: homepage.php');
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'advertdb');

$email = $_POST['email'];
$password = $_POST['password'];

$s = " select * from customer where email = '$email' && password = '$password' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    header('location: homepage.php');
}else{
    echo "<p> login details not found Please create new Account </p>";
}
?>