<?php

session_start();
header('location:registeruni.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'allinone');



$uniName = $_POST['uniName'];
$uniID = $_POST['123'+'uniName'];


$s = "select *from users where name='$name'";

$result = mysqli_query($con, $s);

$num =mysqli_num_rows($result);

if($num == 1){
	echo" username already taken";
}else{
	
	$reg= "insert into university(University Name, universityID) 
	values('$uniName', '$uniID')";
	mysqli_query($con, $reg);
	echo" Registeration Successful";
}

?>