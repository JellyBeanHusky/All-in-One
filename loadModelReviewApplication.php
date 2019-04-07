<?php

require_once("inc/dbcall.php");
$db = new Db();
$sessionID = $_POST['sessionid'];
$sql = "SELECT * FROM `registered` WHERE `id` =" . $sessionID . " LIMIT 1";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
//$time =date('h:m A', strtotime($row['time']));
////get the session type mma,sport,dance
//$rowctype = mysqli_fetch_assoc($result2);
// set teh select box to default selected value

$one = null;
$two = null;
$three = null;
if ($row['astatus'] == "PENDING") {
    $one = 'selected';
} elseif ($row['astatus'] == "ACCEPTED") {
    $two = 'selected';
} elseif ($row['astatus'] == "REJECTED") {
    $three = 'selected';
}


echo "<h3 class='text-uppercase'></h3><br>
            <div class='row'>
                <div class='col-md-12'>

                <div class='form-group'>
                    <label for='classStatus' style='float:left;'>Status</label>
                        <select class='form-control' id='ustatus'>
                            <option value='PENDING' $one >Pending</option>
                            <option value='ACCEPTED' $two>Accepted</option>
                            <option value='REJECTED' $three>Rejected</option>
                        </select>
                </div>

                    <div class='clearfix'></div>
                    <div class='col-lg-12 text-center'>
                    <br/>
                    <div id='success'></div>
                            <button class='btn btn-primary btn-md text-uppercase' data-dismiss='modal' onclick='reviewApplication({$sessionID})'  style='padding-bottom:25px;'>Save</button>
                    </div>
                </div>

            </div>";
