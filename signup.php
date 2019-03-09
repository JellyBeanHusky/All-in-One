<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ALL IN ONE</title>

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
                <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/logo2 copy.png" alt="" width="175"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#page-top">Sign Up</a>
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
                        <h2 class="section-heading text-uppercase">Sign Up</h2><br/>
                    </div>
                </div>
                <!-- to find whether member or trainer is selected by user no need !-->
<!-- <input id="selmemtype" name="selmemtype" type="hidden" value="1" /> -->

                <!-- show msg from server !-->
                <div class="row" id="msg">
                    <div class="col-md-12" style="display:none;">
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> Registered Successfully!
                        </div>
                    </div>
                </div>
                <!-- Nav tabs -->


                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="member" role="tabpanel"><br/></br>
                        <div class="row">
                            <div class="col-lg-12 offset-md-3">
                                <form   action="applicantregisteration.php" action="users.php" id="contactForm" method="POST" onsubmit="return Validate()" name="vform">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control"  name="musername" id="musername" type="text" placeholder="Username *" required data-validation-required-message="Please enter your username.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="mpassword" id="mpassword" type="password" placeholder="Password *" required data-validation-required-message="Please enter your password.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="mfullname" id="mfullname" type="text" placeholder="Full Name *" required data-validation-required-message="Please enter your full name.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="memail" id="idmemail" type="email" placeholder="Email *" required data-validation-required-message="Please enter your email.">
                                                <p class="help-block text-danger"></p>
                                            </div>
											<div class="form-group">
                                                <label for="level" style="color:black;">ID Type</label>
                                                <select class="form-control" name="type" id="type">
                                                    <option value="NRIC">NRIC</option>
                                                    <option value="Passport">Passport</option>
                                                </select>
                                            </div>
											<div class="form-group">
                                                <input class="form-control" name="midno" id="midno"  type="text" placeholder="ID NO *" required data-validation-required-message="Please enter your ID no.">
                                                <p class="help-block text-danger"></p>
                                            </div>
											<div class="form-group">
                                                <input class="form-control" name="mmobileNo" id="mmobileNo" type="text" placeholder="Mobile No*" required data-validation-required-message="Please enter your Mobile no.">
                                                <p class="help-block text-danger"></p>
                                            </div>
											<div class="form-group">
                                                <input class="form-control" name="mbirth" id="mbirth" type="text" placeholder="Date of Birth *" required data-validation-required-message="Please enter your date of birth.">
                                                <p class="help-block text-danger"></p>
                                            </div>
											<div class="form-group">
                                                <label for="level" style="color:black;">AS</label>
                                                <select class="form-control" name="usertype" id="usertype">
                                                    <option value="applicant">applicant</option>
                                                    
                                                </select>
                                            </div>

                                            <div class="clearfix"></div>
                                            <div class="col-lg-12 text-center">
                                                <br/>
                                                <div id="success"></div>
                                                <button id="resetButton" class="btn btn-primary btn-xl text-uppercase" type="reset">Reset</button>
                                               <button   type="submit" class="btn btn-primary btn-xl text-uppercase" >Register</button>
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

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; Your Website 2019</span>
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

       
       
	  

       

        </body>

        </html>
		
		<script type="text/javascript">
		var memail=document.forms["vform"]["memail"];
		
		var memail= document.getElementById("idmemail");
		
		memail.addEventListener("blur", emailVerify, true);
		
		function Validate(){
			id(memail.value==""){
				memail.style.border="1px solid red";
				idmemail.textContent="memail is required";
				memail.focus();
				return false;
			}
			
		}
		
		function emailVerify(){
			if(memail.value !=""){
				memail.style.border="1px solid #5E6E66";
				idmemail.innerHTML="";
				return true;
			}
		}
		
		</script>
            
