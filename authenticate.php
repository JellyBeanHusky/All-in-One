<?php


session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'allinone');

$name= $_POST['user'];
$pass= $_POST['pwd'];

$s ="select * from applicant where username='$name' && password='$pass'";

$result = mysqli_query($con,$s);

$num =mysqli_num_rows($result);

if($num == 1){
	
	header('location: userHome.php');
}else{
	header('location: login.php');
}

?>