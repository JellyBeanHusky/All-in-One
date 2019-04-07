<?php require_once './template/header.php'; ?>

        <section>
            <br/>
            <div class="container" id="aboutHome">
                <!---Welcome Alert-->
                <div class="row" id="msg">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            Hi <strong></strong> Welcome back to ALL in ONE!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="col-md-4" style="float:left">
                            <span class="fa-stack fa-4x">
                                <img class="img-fluid" src="img/uniadmin.png" alt="" style="padding-bottom:20px">
                            </span>
                            <h4 class="service-heading">University Admin</h4>
                        </div>
                        <div class="col-md-8 offset-md-2">
                            <p class="text-muted" style="padding-top:10px"><br>We're super excited to have you on board!<br>
                            We hope our system can find the best choice for you.<br>
                            <br> </p>
                        </div><br><br><hr><br><br>
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
                        <h4 class="service-heading">Check Ratings</h4>
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

<?php require_once './template/homefooter.php';
