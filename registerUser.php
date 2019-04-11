<?php

require_once("inc/dbcall.php");
$db = new Db();

$userid = $_SESSION['uniqueID'];
$sessionId = $_POST['sessionid'];


$sql = "SELECT * FROM `registered` WHERE `userid`=" . $userid . " AND`sessionid` =" . $sessionId;
$result = $db->query($sql);
$numrows = $db->numRows($result);
if ($numrows > 0) {
  echo "Already Applied!";
} else {

$sql = "INSERT INTO `registered` (`userid`,`sessionid`, `name`)
VALUES ($userid,$sessionId,'{$_SESSION['username']}')";

$db->query($sql);
echo "Application successful!";
}
