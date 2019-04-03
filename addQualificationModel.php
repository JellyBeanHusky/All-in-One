<?php

require_once("inc/dbcall.php");
$db = new Db();
$sessionID = $_POST['sessionid'];
//    var dataString = 'sessionid=' + id + '&udate=' + udate + '&utime=' + utime + '&ufee=' + ufee + '&uclassStatus=' + uclassStatus + '&uclassType=' + uclassType;
$sql = "UPDATE `registered` SET "
        . "`qualifications` = '{$_POST['uqualifications']}' "
        .
        " WHERE `registered`.`id` =" . $sessionID;
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
echo $sql;
