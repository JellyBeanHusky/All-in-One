<?php require_once './template/header.php'; ?>
<?php
$name = $_SESSION['fullname'];
$username = $_SESSION['username'];
$userType = $_SESSION['usertype'];
$uniqueid = $_SESSION['uniqueID'];
$sql = "SELECT * FROM `users` WHERE `userID` =" . $uniqueid . " LIMIT 1";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
$pwd = $row['password'];
//set the defualt user level
//1">Beginner</option>
//2">Advanced</option>
//3">Expert</option>

?>

<!-- Contact -->
<section id="signup">
    <br>
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Update Info</h2><br/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <?php
                if (isset($_POST['update'])) {
                    if ($userType == "applicant") {
                        if (isset($_POST['password']) && !empty($_POST['password'])) {
                            $upwd = $db->makepwd($_POST['password']);
                            $sql = "UPDATE `users` SET `password` = '{$upwd}', `fullname` = '{$_POST['fullname']}', `email` = '{$_POST['email']}' WHERE `users`.`userID` = " . $uniqueid;
                        } else {
                            $sql = "UPDATE `users` SET  `fullname` = '{$_POST['fullname']}', `email` = '{$_POST['email']}' WHERE `users`.`userID` = " . $uniqueid;
                        }
                        echo '<div class="alert alert-success">
                                    <strong>Success!</strong> The information has been updated successfully!
                            </div>';
                    } else if ($userType == "uniAdmin") {
                        if (isset($_POST['password']) && !empty($_POST['password'])) {
                            $upwd = $db->makepwd($_POST['password']);
                            $sql = "UPDATE `users` SET `password` = '{$upwd}', `fullname` = '{$_POST['fullname']}', `email` = '{$_POST['email']}'  WHERE `users`.`userID` = " . $uniqueid;
                        } else {
                            $sql = "UPDATE `users` SET  `fullname` = '{$_POST['fullname']}', `email` = '{$_POST['email']}' WHERE `users`.`userID` = " . $uniqueid;
                        }
                        echo '<div class="alert alert-success">
                                    <strong>Success!</strong> The information has been updated successfully!
                            </div>';

                    }
                    $db->query($sql);
                }
                ?>
            </div>

        </div>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="applicant" role="tabpanel"><br/></br>
                <div class="row">
                    <div class="col-lg-12 offset-md-3">
                        <form  name="sentMessage" novalidate method="POST" action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="username" type="text" disabled="disabled" placeholder="<?php echo $username; ?>">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="password" type="password" placeholder="Password *" required value="<?php echo $row['password']; ?>">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="fullname" type="text" name="fullname" placeholder="<?php echo $name; ?>" required value="<?php echo $row['fullname']; ?>">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" name="email" required value="<?php echo $row['email']; ?>">
                                        <p class="help-block text-danger"></p>
                                    </div>



                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <br/>
                                        <div id="success"></div>
                                        <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" name="update" type="submit">Update</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>

<?php
require_once './template/footer.php';
