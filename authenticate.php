<?php



$con = mysqli_connect('localhost','root','');

if(!$con)
{
	echo"Unable to establish connection".mysqli_error();
}
	$db=mysqli_select_db($con, "allinone");
if(!$db)
{
	echo"Database not found". mysqli_error();
}



if(isset($_POST['submit'])){
	
	$usertype=$_POST['usertype'];
	$username=$_POST['user'];
	$password=$_POST['pwd'];
	
	$query="select * from users where username='$username' and password='$password' and usertype='$usertype'";
	$result=mysqli_query($con,$query);
	
	
	
	while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	if($row['username']==$username && $row['password']==$password && $row['usertype']=='Admin'){
		
		header("Location: sasAdminHome.php");
	}elseif($row['username']==$username && $row['password']==$password && $row['usertype']=='uniAdmin'){
		header("Location: uniAdminHome.php");
	}elseif($row['username']==$username && $row['password']==$password && $row['usertype']=='applicant'){
		header("Location: userHome.php");
	}else {
			header("Location: login.php");		
                }
 }
}

?>