<?php

require_once("inc/dbcall.php");
$db = new Db();
$sessionID = $_POST['sessionid'];
$sql = "SELECT * FROM `qualification1` WHERE `qualificationID` =" . $sessionID . " LIMIT 1";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);


$one = null;
$two = null;
$three = null;



echo "<h3 class='text-uppercase'>{$row['title']}</h3><br>
            <div class='row'>
                <div class='col-md-12'>
                  <li>Maximum</li>
                    <div class='form-group'>
                        <input class='form-control' id='umax' type='text' placeholder='{$row['max']}' value='{$row['max']}'>
                        <p class='help-block text-danger'></p>
                    </div>
                    <li>Minimum</li>
                    <div class='form-group'>
                        <input class='form-control' id='umin' type='text' placeholder='{$row['min']}' value='{$row['min']}' >
                        <p class='help-block text-danger'></p>
                    </div>
                    <li>Qualification</li>
                    <div class='form-group'>
                        <input class='form-control' id='uqualification' type='text' placeholder='{$row['qualification']}' value='{$row['qualification']}' >
                        <p class='help-block text-danger'></p>
                    </div>

                    <div class='clearfix'></div>
                    <div class='col-lg-12 text-center'>
                    <br/>
                    <div id='success'></div>
                            <button class='btn btn-primary btn-md text-uppercase' data-dismiss='modal' onclick='updateTraningSession({$sessionID})'  style='padding-bottom:25px;'>Save</button>
                    </div>
                </div>

            </div>";
