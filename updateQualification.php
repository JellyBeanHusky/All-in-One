<?php
require_once 'inc/dbcall.php';
$db = new Db();
//if not set
if (!isset($_SESSION['name'])) {
    $db->redirect('');
}
//signout
if (isset($_GET['logout'])) {
    unset($_SESSION["name"]);
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
                            <a class="nav-link js-scroll-trigger" href="uniAdminHome.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#viewHistoryMember">Review Application</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="navbarResponsive">
                                <a class="dropdown-item js-scroll-trigger" href="#"></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item js-scroll-trigger" href="">Update Info</a>
                                <a class="dropdown-item js-scroll-trigger" href="welcomePage.html">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Portfolio Grid -->
        <section class="bg-light" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center"><br>
                        <h2 class="section-heading text-uppercase">Qualification History</h2><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <table id="tdatable" class="display" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>QualificationID</th>
                                    <th>Qualification Name</th>
                                    <th>Maximum</th>
                                    <th>Minimum</th>
                                    <th>Qualifications</th>
                                    <th>Update Session</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                  <th>QualificationID</th>
                                  <th>Qualification Name</th>
                                  <th>Maximum</th>
                                  <th>Minimum</th>
                                  <th>Qualifications</th>
                                  <th>Update Session</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM `qualification1` WHERE `createdby`=" . 21;
                                $result = $db->query($sql);
                                $numRows = $db->numRows($result);
                                ?>
                                <?php if ($numRows > 0): ?>
                                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                        <tr>
                                            <td><?php echo $row['qualificationID']; ?></td>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['max']; ?></td>
                                            <td><?php echo $row['min']; ?></td>
                                            <td><?php echo $row['qualification']; ?></td>
                                            <td>
                                                <?php if($row['createdby']==21): ?>
                                                <?php endif; ?>
                                                <a class="portfolio-link" data-toggle="modal" style="color: #b20000;"onclick="loadModelUpdateTrainer(<?php echo $row['qualificationID']; ?>);" href="#portfolioModal1">Update</a>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                <h3>No History Available</h3>
                            <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Modals -->

        <!-- Modal 1 -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class=" modal-body">
                                    <div id="content">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
