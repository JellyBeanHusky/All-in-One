<?php

session_start();
header('location:addQualification.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'allinone');



$qName = $_POST['qualificationName'];
$maxV= $_POST['maxValue'];
$minV=$_POST['minValue'];
$q=$_POST['qualifications'];
$desc=$_POST['description'];

$s = "select *from qualification where qualificationName='qName'";

$result = mysqli_query($con, $s);

$num =mysqli_num_rows($result);

if($num == 1){
	echo" qualification already exist";
}else{
	
	$reg= "insert into qualification(qualificationName, maximumValue, minimumValue, qualifications, description) 
	values('$qName', '$maxV', '$minV', '$q', '$desc')";
	mysqli_query($con, $reg);
	echo" Registeration Successful";
}

?>