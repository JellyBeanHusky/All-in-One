<?php

session_start();
header('location:signup.html');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'applicant');

$name = $_POST['musername'];
$pass = $_POST['mpassword'];
$fname = $_POST['mfullname'];
$mail = $_POST['memail'];
$type = $_POST['type'];
$idno= $_POST['midno'];
$mobile = $_POST['mmobileNo'];
$dbirth = $_POST['mbirth'];

$s = "select *from applicant where name='$name'";

$result = mysqli_query($con, $s);

$num =mysqli_num_rows($result);

if($num == 1){
	echo" username already taken";
}else{
	
	$reg= "insert into applicanttable(username, password, fullname, email, type, idno, mobileNo, birth) values('$name', '$pass', '$fname', '$mail', '$type', '$idno', '$mobile', '$dbirth' )";
	mysqli_query($con, $reg);
	echo" Registeration Successful";
}

?>