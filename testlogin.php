<?php

session_start();

$con = mysqli_connect('localhost','root','');


mysqli_select_db($con, "allinone1");




$username=$_POST['user'];
$password=$_POST['pwd'];

$query="select * from users where username='$username' && password='$password' ";
$result=mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$num =mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] =$username;
	$_SESSION['uniqueID'] = $row['userID'];
	$_SESSION['usertype']=$row['usertype'];

	if($row['usertype']=='Admin'){

		header("Location: sasAdminHome.php");
	}elseif($row['usertype']=='uniAdmin'){
		header("Location: uniAdminHome.php");
	}elseif($row['usertype']=='applicant'){
		header("Location: userHome.php");
	}


}else{
	echo("Either the password or username does not match!");

	header('location:login.php');

}

?>
