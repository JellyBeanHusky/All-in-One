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

        <title>ALL in ONE System</title>

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

                        <!-- if member show this !-->

                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="userHome.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#viewHistoryMember">Edit Application</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Profile
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="navbarResponsive">
                                    <a class="dropdown-item js-scroll-trigger" href="#"></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item js-scroll-trigger" href="updateInfo.php">Update Info</a>
                                    <a class="dropdown-item js-scroll-trigger" href="index.php?logout">Logout</a>
                                </div>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
        $sql = "SELECT * FROM `tsessions` WHERE `status`=1 ";
        $result = $db->query($sql);
        $numRows = $db->numRows($result);
        ?>
        <script>
            $('#portfolioModal1').on('show.bs.modal', function () {
                alert("before model load");
            })
        </script>
        <!-- Portfolio Grid -->
        <section class="bg-light" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Available Programmes</h2><br>
                    </div>
                </div>
                <?php if ($numRows > 0): ?>
                    <!--- display all teh  available Programmes !-->
                    <div class="row">
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <?php
                            $sql2 = "SELECT * FROM `ctype` WHERE `idctype`=" . $row['ctype'] . " LIMIT 1";
                            $result2 = $db->query($sql2);
                            //get the session type mma,dance
                            $rowctype = mysqli_fetch_assoc($result2);
                            ?>
                            <div class="col-md-4 col-sm-6 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" onclick="loadModel(<?php echo $row['idtable1']; ?>);" href="#portfolioModal1">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fa fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="img/portfolio/<?php echo $rowctype['img']; ?>.jpg" alt="<?php echo $rowctype['img']; ?>">
                                </a>
                                <div class="portfolio-caption">
                                    <h4><?php echo strtoupper($row['title']); ?></h4>
                                    <p class="text-muted"><?php echo strtoupper($row['sessionfor']); ?>
                                        <!-- should not show if personal !-->
                                        <?php if ($row['sessionfor'] == 'group'): ?>
                                            (<?php echo $rowctype['name']; ?>)
                                        <?php endif; ?>
                                    </p>
                                    <p class="text-muted"><?php echo "S" . $row['idtable1']; ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    <?php else: ?>
                        <p></p>
                        <h4 class="section-heading text-uppercase">no Programme available</h4><br>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- Portfolio Modals -->

        <!-- Modal 1 -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" php="loadphp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container" >
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
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
