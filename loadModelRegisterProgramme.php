<?php

require_once("inc/dbcall.php");
$db = new Db();
$sessionID = $_POST['sessionid'];
$sql = "SELECT * FROM `registered` WHERE `id` =" . $sessionID . " LIMIT 1";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);




echo "
            <div class='row'>
                <div class='col-md-12'>
                    <div class='form-group'>
                    <li>Add Your Qualifications</li>
                        <input class='form-control' id='uqualifications' type='text' placeholder='{$row['qualifications']}' value='{$row['qualifications']}'>
                        <p class='help-block text-danger'></p>
                    </div>

                    <div class='clearfix'></div>
                    <div class='col-lg-12 text-center'>
                    <br/>
                    <div id='success'></div>
                            <button class='btn btn-primary btn-md text-uppercase' data-dismiss='modal' onclick='addQualification({$sessionID})'  style='padding-bottom:25px;'>Save</button>
                    </div>
                </div>

            </div>";
