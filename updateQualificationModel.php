<?php

require_once("inc/dbcall.php");
$db = new Db();
$sessionID = $_POST['sessionid'];
//    var dataString = 'sessionid=' + id + '&udate=' + udate + '&utime=' + utime + '&ufee=' + ufee + '&uclassStatus=' + uclassStatus + '&uclassType=' + uclassType;
$sql = "UPDATE `qualification1` SET "
        . "`max` = '{$_POST['umax']}' "
        . ", `min` = '{$_POST['umin']}' "
        . ", `qualification` = '{$_POST['uqualification']}'"
        .
        " WHERE `qualification1`.`qualificationID` =" . $sessionID;
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
echo $sql;
