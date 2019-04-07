<?php

require_once("inc/dbcall.php");
$db = new Db();
//    var dataString = 'userid=' + userid + '&sessionid=' + sessionid;

$userid = $_SESSION['uniqueID'];
$sessionId = $_POST['sessionid'];
//$query="select * from tsessions where status=1";
//$uniname = $_SESSION['uniname'];

//$row = mysqli_fetch_assoc($result);
//$sql = "SELECT * FROM `registered` WHERE `userid`=" . $userid . " AND`sessionid` =" . $sessionId;
//$result = $db->query($sql);
//$numrows = $db->numRows($result);
//if ($numrows > 0) {
//    echo "Already Registered!";
//} else {
    //end of member data
$sql = "INSERT INTO `registered` (`userid`,`sessionid`, `name`)
VALUES ($userid,$sessionId,'{$_SESSION['username']}')";

$db->query($sql);
echo "Successfully Registered";
//}
