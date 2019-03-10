<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ALL in ONE system</title>

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
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo.png" alt="" width="175"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <header class="masthead">
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Welcome To</div>
                    <div class="intro-heading">ALL in ONE!</div>
                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="signup.php">Sign up</a>
                </div>
            </div>
        </header>

        <section>
          <div class="container" id="about">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">About</h2><br>
                <h3 class="section-subheading text-muted">ALL in ONE system is to bring over 3,000 universities and colleges from over 20 countries in one website, helping Malaysian students and parents search,
                  <br>compare and connect with universities. Applicant simply need to sign up and enter the highest academic qualifications. Once you sin up you are good to go. There are so many programmes
                  you can choose upon your choice.
                </h3><hr><br><br>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-md-4">
                <span class="fa-stack fa-4x">
                  <img class="img-fluid" src="img/application.png" alt="">
                </span>
                <h4 class="service-heading">Common Application</h4>
                <p class="text-muted">☆ Explore top-ranking universities catered to your needs, in one place.<br>
                ☆ Key in details ONCE to apply to multiple institutions.<br>
               ☆ Sift through numerous offers and find the best one for you & your future!</p>
              </div>
              <div class="col-md-4">
                <span class="fa-stack fa-4x">
                  <img class="img-fluid" src="img/scholarship.png" alt="">
                </span>
                <h4 class="service-heading">Find Scholarships</h4>
                <p class="text-muted">☆ Explore all available scholarships in one spot.<br>
                ☆ Register to find scholarships catered to your desired course and study level.<br>
              ☆ Updated on a daily basis so you’re ahead of the competition.</p>
              </div>
              <div class="col-md-4">
                <span class="fa-stack fa-4x">
                  <img class="img-fluid" src="img/ratings.png" alt="">
                </span>
                <h4 class="service-heading">Check Rankings</h4>
                <p class="text-muted">There are many different rankings to consider.
                  Compare them easily for each university, to make right decision for you.</p>
              </div>
            </div>
          </div>
        </section>

        <!-- Contact -->
        <section id="contact">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2><br><br>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                      </div>
                      <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                      </div>
                      <div class="form-group">
                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                      <div id="success"></div><br><br>
                      <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
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

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


        <!-- Custom scripts for this template -->
        <script src="js/agency.min.js"></script>


</body>
</html>
