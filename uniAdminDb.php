<?php

session_start();
header('location:sasAdminHome.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'allinone');



$name = $_POST['musername'];
$pass = $_POST['mpassword'];
$fname = $_POST['mfullname'];
$mail = $_POST['memail'];
$usertype=$_POST['usertype'];

$s = "select *from users where name='$name'";

$result = mysqli_query($con, $s);

$num =mysqli_num_rows($result);

if($num == 1){
	echo" username already taken";
}else{
	
	$reg= "insert into users(username, password, fullname, email, type, idno, mobileNo, birth, usertype) 
	values('$name', '$pass', '$fname', '$mail', '$type', '$idno', '$mobile', '$dbirth', '$usertype' )";
	mysqli_query($con, $reg);
	echo" Registeration Successful";
}

?>