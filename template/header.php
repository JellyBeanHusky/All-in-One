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
        <script src="vendor/bootstrap/js/jquery-2.1.4.min.js"></script>
    		<script src="vendor/bootstrap/js/Chart.js"></script>

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

                        <?php // $_SESSION['usertype'];// USER TYpe = 1 member , 2= trainer     ?>
                        <?php if ($_SESSION['usertype'] == "Admin"): ?>

                          <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="addQualification.php">Add Qualification</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="updateQualification.php">Update Qualification</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="registeruniadmin.php">Register Uni Admin</a>
                          </li>

                        <?php endif; ?>

                        <?php if ($_SESSION['usertype'] == "applicant"): ?>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="applyProgramme.php">Apply a Programme</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="editApplication.php">Add My Qualifications</a>
                            </li>
                        <?php endif; ?>

                        <!-- if member show this !-->
                        <?php if ($_SESSION['usertype'] == "uniAdmin"): ?>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="addProgramme.php">Record Programme</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="acceptProgramme.php">View Applications</a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="navbarResponsive">
                              <a class="dropdown-item js-scroll-trigger" href=""><?php echo $_SESSION['username'];?></a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item js-scroll-trigger" href="updateInfo.php">Update Info</a>
                                <a class="dropdown-item js-scroll-trigger" href="index.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
