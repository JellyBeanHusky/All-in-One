<?php require_once './template/header.php'; ?>
        <!-- Contact -->
        <section id="signup">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Add New Qualification</h2><br/>
                    </div>
                </div>
                <?php
                //array(6) { ["title"]=> string(0) "" ["date"]=> string(0) "" ["time"]=> string(0) "" ["fee"]=> string(0) "" ["ctype"]=> string(1) "2" ["record"]=> string(0) "" }
                if (isset($_POST['record'])) {
                    if (empty($_POST['title']) || $_POST['title'] == "" || empty($_POST['max']) || empty($_POST['min']) || empty($_POST['qualification'])) {
                        echo '<div class="alert alert-danger">
                        <strong>Warning!</strong> Please fill all the fields!
                    </div>';
                    } else {

                            $sql = "INSERT INTO `qualification1` (`title`, `max`, `min`,`qualification`,`createdby`)
                                            VALUES ('{$_POST['title']}', '{$_POST['max']}', '{$_POST['min']}', '{$_POST['qualification']}',{$_SESSION['uniqueID']})";
                        }

                        if (($db->query($sql))) {
                            echo '<div class="alert alert-success">
                        <strong>Success!</strong> Data has been saved to the database!
                    </div>';
                        }
                    }

                ?>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="member" role="tabpanel"><br/></br>
                        <div class="row">
                            <div class="col-lg-12 offset-md-3">
                                <form  name="recordt" id="member" method="POST" action="#" novalidate>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" id="title" name="title" type="text"    value="" placeholder="Qualification Name *" required >
                                                <p class="text-danger" style="color: red;" ></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="max" name="max" type="number" placeholder="Maximum Value *"    required value="">
                                                <p class="help-block text-danger" ></p>
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" id="min" name="min" type="number" placeholder="Minimum Value *"    required value="">
                                                <p class="help-block text-danger" ></p>
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" id="qualification" name="qualification" type="text" placeholder="Qualifications *"    required value="">
                                                <p class="help-block text-danger" ></p>
                                            </div>
                                            <!--- display only whne the user click the group button !-->


                                            <div class="clearfix"></div>
                                            <div class="col-lg-12 text-center">
                                                <br/>
                                                <div id="success"></div>
                                                <button id="resetButton" class="btn btn-primary btn-xl text-uppercase" type="reset">Reset</button>
                                                <button name="record" class="btn btn-primary btn-xl text-uppercase" type="submit">Submit</button>
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

        <?php
        require_once './template/homefooter.php';
