<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
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

        <script src="vendor/bootstrap/js/jquery-2.1.4.min.js"></script>
    		<script src="vendor/bootstrap/js/Chart.js"></script>

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
                                <a class="nav-link js-scroll-trigger" href="addQualification.php">Add Qualification</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="registeruniadmin.php">Register UniversityAdmin</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="registeruni.php">Register University</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="navbarResponsive">
                                <a class="dropdown-item js-scroll-trigger" href="#"><?php echo $_SESSION['username'];?></a>
								 								<a class="dropdown-item js-scroll-trigger" href="#"><?php echo $_SESSION['uniqueID'];?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item js-scroll-trigger" href="">Update Info</a>
                                <a class="dropdown-item js-scroll-trigger" href="index.php?logout">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section>
            <br/>
            <div class="container" id="aboutHome">
                <!---Welcome Alert-->
                <div class="row" id="msg">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            Hi, Admin <strong></strong> Welcome back to ALL in ONE!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="col-md-4" style="float:left">
                            <span class="fa-stack fa-4x">
                                <img class="img-fluid" src="img/admin.png" alt="" style="padding-bottom:20px">
                            </span>
                            <h4 class="service-heading">ADMIN</h4>
                        </div>
                        <div class="col-md-8 offset-md-2">
                            <p class="text-muted" style="padding-top:10px"><br>
                            Monthly and Weekly enrolments details as below<br>
                            <br> </p> <br><br><br><br><br><br>


                            <div style="float:right">
                              <h5>Total Enrolments(Monthly)</h5>

                            <canvas id="mycanvas" width="256" height="256" >

                        		<script>
                        			$(document).ready(function(){
                        				var ctx = $("#mycanvas").get(0).getContext("2d");

                        				//pie chart data
                        				//sum of values = 360
                        				var data = [
                        					{
                        						value: 100,
                        						color: "#08437a",
                        						highlight: "#2c76bb",
                        						label: "Business"
                        					},
                        					{
                        						value: 50,
                        						color: "Red",
                        						highlight: "#f04949",
                        						label: "Psychology"
                        					},
                        					{
                        						value: 20,
                        						color: "#307104",
                        						highlight: "#6ece2d",
                        						label: "Communication"
                        					},

                                  {
                        						value: 70,
                        						color: "yellow",
                        						highlight: "#dbc900",
                        						label: "Information Technology"
                        					}

                        				];

                        				//draw
                        				var piechart = new Chart(ctx).Pie(data);
                        			});
                        		</script>
                          </div>

                          <div style="float:left">
                            <h5>Total Enrolments(Weekly)</h5>

                          <canvas id="mycanvas2" width="256" height="256" >

                          <script>
                            $(document).ready(function(){
                              var ctx = $("#mycanvas2").get(0).getContext("2d");

                              //pie chart data
                              //sum of values = 360
                              var data = [
                                {
                                  value: 43,
                                  color: "#08437a",
                                  highlight: "#2c76bb",
                                  label: "Business"
                                },
                                {
                                  value: 34,
                                  color: "yellow",
                                  highlight: "#dbc900",
                                  label: "Information Technology"
                                },
                                {
                                  value: 30,
                                  color: "red",
                                  highlight: "#f04949",
                                  label: "Psychology"
                                },
                                {
                                  value: 5,
                                  color: "#307104",
                                  highlight: "#6ece2d",
                                  label: "Communication"
                                }
                              ];

                              //draw
                              var piechart = new Chart(ctx).Pie(data);
                            });
                          </script>
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


        <!-- Bootstrap core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Contact form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/agency.min.js"></script>




        </body>

        </html>
