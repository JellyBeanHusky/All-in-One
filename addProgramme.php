<?php

require_once 'inc/dbcall.php';
$db = new Db();


if(!isset($_SESSION['username'])){
	header('location:login.php');
}

//signout
if (isset($_GET['logout'])) {
    unset($_SESSION["username"]);
    unset($_SESSION["usertype"]);
    $_SESSION["logoutmsg"] = "Succefully signed out";
    $db->redirect('login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>All in ONE System</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="css/agency.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/datable.css">
    </head>
    <body id="page-top">
        <!-- Navigation
      //-->
        <nav class="navbar new navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo.png" alt="" width="175"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="uniAdminHome.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="acceptProgramme.php">View Application</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="navbarResponsive">
                                <a class="dropdown-item js-scroll-trigger" href="#"></a>
                                <a class="dropdown-item js-scroll-trigger" href="#"><?php echo $_SESSION['username'];?></a>
                                <a class="dropdown-item js-scroll-trigger" href="#"><?php echo $_SESSION['uniqueID'];?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item js-scroll-trigger" href="">Update Info</a>
                                <a class="dropdown-item js-scroll-trigger" href="index.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contact -->
        <section id="signup">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Add a Programme</h2><br/>
                    </div>
                </div>
                <?php
                //array(6) { ["title"]=> string(0) "" ["date"]=> string(0) "" ["time"]=> string(0) "" ["fee"]=> string(0) "" ["ctype"]=> string(1) "2" ["record"]=> string(0) "" }
                if (isset($_POST['record'])) {
                    if (empty($_POST['title']) || $_POST['title'] == "" || empty($_POST['date']) || empty($_POST['fee'])) {
                        echo '<div class="alert alert-danger">
                        <strong>Warning!</strong> Please fill all the fields!
                    </div>';
                    } else {
                        if ($_POST['ctype'] == 2) {
                            // group
                            $sql = "INSERT INTO `tsessions` (`title`, `tdate`, `fee`,`entryReq`, `ctype`, `status`, `sessionfor`,`createdby`,`uniname`)
                                            VALUES ('{$_POST['title']}', '{$_POST['date']}', '{$_POST['fee']}', '{$_POST['entryReq']}','{$_POST['classType']}',1,'degree',{$_SESSION['uniqueID']}, '{$_SESSION['username']}')";
                        }
                       else if ($_POST['ctype'] == 3) {
                            // group
                            $sql = "INSERT INTO `tsessions` (`title`, `tdate`, `fee`,`entryReq`, `ctype`, `status`, `sessionfor`,`createdby`,`uniname`)
                                            VALUES ('{$_POST['title']}', '{$_POST['date']}', '{$_POST['fee']}', '{$_POST['entryReq']}', '{$_POST['classType']}',1,'preUni',{$_SESSION['uniqueID']}, '{$_SESSION['username']}')";
                        }

                        else {
                            //personal //5 == null
                            $sql = "INSERT INTO `tsessions` (`title`, `tdate`, `fee`,`entryReq`, `ctype`, `status`, `sessionfor`,`createdby`, `uniname`)
                                            VALUES ('{$_POST['title']}', '{$_POST['date']}', '{$_POST['fee']}', '{$_POST['entryReq']}', '{$_POST['classType']}',1,'diploma',{$_SESSION['uniqueID']}, '{$_SESSION['username']}')";
                        }
                        if (($db->query($sql))) {
                            echo '<div class="alert alert-success">
                        <strong>Success!</strong> Data has been saved to the database!
                    </div>';
                        }
                    }
                }
                ?>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="member" role="tabpanel"><br/></br>
                        <div class="row">
                            <div class="col-lg-12 offset-md-3">
                                <form  name="recordt" id="member" method="POST" action="#" novalidate>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" id="title" name="title" type="text"    value="" placeholder="Title *" required >
                                                <p class="text-danger" style="color: red;" id="mtitle"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="date" name="date" type="date" placeholder="Date *"    required value="">
                                                <p class="help-block text-danger" id="mdate"></p>
                                            </div>



                                            <div class="form-group">
                                                <input class="form-control" id="fee" name="fee" type="number" placeholder="Fee *" required  onfocus="valideatRecordTraining()">
                                                <p class="help-block text-danger" style="color: red;" id="mfee"></p>
                                            </div>
                                            <div class="form-group" style="color: white; font-size: large;text-transform: uppercase">

                                                <span class="col-md-3"><label class="radio-inline"><input type="radio" value="1" checked name="ctype" >&nbsp;Diploma</label></span>
                                                <span class="col-md-3"><label class="radio-inline"><input type="radio" value="2" name="ctype" >&nbsp;Degree</label></span>
                                                <span class="col-md-3"><label class="radio-inline"><input type="radio" value="3" name="ctype" >&nbsp;Pre-Uni</label></span>
                                            </div>


                                            <!--- display only whne the user click the group button !-->

                                                <div class="form-group">
                                                    <input class="form-control" name="entryReq" type="text" placeholder="Entry Requiremnts" required data-validation-required-message="Please enter the maximum number of participants.">
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $sql = "SELECT * FROM `ctype` where idctype !=5";
                                                    $result = $db->query($sql);
                                                    ?>
                                                    <label for="classType" style="color:white;">Select Type</label>
                                                    <select class="form-control" name="classType" id="classType" >
                                                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                                            <option  value="<?php echo $row['idctype']; ?>"><?php echo $row['name']; ?></option>
                                                        <?php endwhile; ?>
                                                    </select>

                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-lg-12 text-center">
                                                <br/>
                                                <div id="success"></div>
                                                <button id="resetButton" class="btn btn-primary btn-xl text-uppercase" type="reset">Reset</button>
                                                <button name="record" class="btn btn-primary btn-xl text-uppercase" type="submit">Submit</button>
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

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; ALL in ONE 2019</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li class="list-inline-item">
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" charset="utf8" src="js/jquery.js"></script>
        <script type="text/javascript" charset="utf8" src="js/datable.js" ></script>
        <script>
            $(document).ready(function () {
                // load member datable
                $('#mdatable').DataTable();
                $('#tdatable').DataTable();

            });
        </script>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Contact form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/agency.min.js"></script>


        <!-- for web site javascript functions  !-->
        <script type="text/javascript" src="js/allinone.js"></script>

        </body>

        </html>
