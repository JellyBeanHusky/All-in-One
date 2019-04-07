<?php require_once './template/header.php'; ?>

        <section>
            <br/>
            <div class="container" id="aboutHome">
                <!---Welcome Alert-->
                <div class="row" id="msg">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            Hi <strong><?php echo ucfirst($_SESSION['username']) ?>,</strong> Welcome back to ALL in ONE!
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

				<?php
				require_once './template/homefooter.php';
