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

        <!-- Contact -->
        <section id="contact">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Update Qualification</h2><br/>
                    </div>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" style="color:#b20000;" data-toggle="tab" href="#member" role="tab">Personal</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="member" role="tabpanel"><br/></br>
                        <div class="row">
                            <div class="col-lg-12 offset-md-3">
                                <form id="contactForm" name="sentMessage" novalidate>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" id="title" type="text" placeholder="Title *" required data-validation-required-message="Please enter the session title.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="max" type="text" placeholder="Max *"  required data-validation-required-message="Please enter the session date.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="min" type="text" placeholder="Min *"  required data-validation-required-message="Please enter the session time.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="qualification" type="text" placeholder="Qualification *" required data-validation-required-message="Please enter the session fee.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-lg-12 text-center">
                                                <br/>
                                                <div id="success"></div>
                                                <button id="resetButton" class="btn btn-primary btn-xl text-uppercase" type="reset">Reset</button>
                                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Save</button>
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
