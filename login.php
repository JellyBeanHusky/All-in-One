
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>HELPFIT - Training System</title>

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
                            <a class="nav-link js-scroll-trigger" href="#page-top">Login</a>
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
                        <h2 class="section-heading text-uppercase">Login</h2><br/>
                    </div>
                </div>
                
                <!-- if session has a msg  change later to signgel msg!-->
                <?php if (isset($_SESSION['logoutmsg'])): ?>
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $_SESSION['logoutmsg']; ?>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-lg-12 offset-md-3">
                        <form id="contactForm" method="POST" action="authenticate.php" name="sentMessage" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="user" type="text" placeholder="Username *" required data-validation-required-message="Please enter your username.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="pwd" type="password" placeholder="Password *" required data-validation-required-message="Please enter your password.">
                                        <p class="help-block text-danger"></p>
                                        
                                    </div>
									<div class="form-group">
                                                <label for="level" style="color:black;">AS</label>
                                                <select class="form-control" name="usertype" id="usertype">
                                                    <option value="applicant">applicant</option>
													<option value="uniAdmin">uniAdmin</option>
													<option value="Admin">Admin</option>
                                                    
                                                </select>
												<a href="signup.php" style="float:right;color: #b20000;">New user? Click here to sign up.</a><br>
                                            </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <br/>
                                        <div id="success"></div>
                                        <button  class="btn btn-primary btn-xl text-uppercase" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

       <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; HELPFIT 2017</span>
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

<?php

/*

$con = mysqli_connect("localhost","root","");
if(!$con)
{
	echo"Unable to establish connection".mysqli_error();
}
	$db=mysqli_select_db($con, "allinone");
if(!$db)
{
	echo"Databse not found".mysqli_error();
}

if(isset($_POST['login'])){
	$usertype=$POST['usertype'];
	$username=$POST_['username'];
	$password=$POST_['password'];
	
	$query="select * from users where username='$username' && password='$password' && usertype='$usertype'";
	$result=mysqli_query($query);
	
	while($row=mysqli_fetch_array($result)){
		if($row['username']==$username && $row['password']==$password && $row['usertype']=='applicant'){
			header("location: userHome.html" );
		}elseif($row['username']==$username && $row['password']==$password && $row['usertype']=='uniAdmin'){
			header("location: uniAdminHome.html");
		}
	}
}*/
?>


