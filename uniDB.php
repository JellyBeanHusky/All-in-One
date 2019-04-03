<?php

session_start();
header('location:sasAdminHome.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'allinone');



$name = $_POST['universityname'];
$uniadmin = $_POST['uniadminName'];

$s = "select *from university";

$result = mysqli_query($con, $s);

$num =mysqli_num_rows($result);

if($num == 1){
	echo" username already taken";
}else{
	
	$reg= "insert into university(UniversityName, uniAdmin) 
	values('$name', '$uniadmin')";
	mysqli_query($con, $reg);
	echo" Registeration Successful";
}

?>