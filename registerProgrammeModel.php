<?php

require_once("inc/dbcall.php");
$db = new Db();
$sql = "SELECT * FROM `tsessions` WHERE `idtable1` =" . $_POST['id'] . " LIMIT 1";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
$sql2 = "SELECT * FROM `ctype` WHERE `idctype`=" . $row['ctype'] . " LIMIT 1";
$result2 = $db->query($sql2);
//$time = date('h:m A', strtotime($row['time']));

//trainer name
//$sql4 = "SELECT * FROM `users` WHERE `idusers` =" . $row['createdby'] . " LIMIT 1";
//$result4 = $db->query($sql4);
//$row4 = mysqli_fetch_assoc($result4); //fname



//get the session type mma,sport,dance
$rowctype = mysqli_fetch_assoc($result2);
$uppecase = strtoupper($row['sessionfor']);
echo "<h3 class='text-uppercase'>{$row['title']}</h3>
     <p class='item-intro text-muted'>{$uppecase} ({$rowctype['name']})</p>
     <ul class='list-inline'>
     <li>Intake Date: {$row['tdate']}</li>
     <li>Fee: RM {$row['fee']}</li>
     <li>Entry Requirements: {$row['entryReq']}</li>
     </ul>
     <div class='col-lg-12 text-center'>
     <button class='btn btn-primary btn-md' data-dismiss='modal' onclick='registerUser({$_POST['id']})' type='button'>
     <i class='fa fa-check'></i>Register</button></div>";
?>
