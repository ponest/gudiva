<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GUDIVA</title>

    <!-- Bootstrap & Custom CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
    <link href="assets/css/style_1.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="navbar-brand">
                    <a href="#">
                        <img class="logo" src="assets/images/logo.png">
                    </a>
                    <span style="color: #CC0000; font-size: large">Gudiva Online Library</span>
                </div>
            </div>
            <span id="nav-right">
                <span class="hidden-mobile hidden-xs"></span>
                <a href="<?php echo base_url() ?>" class="btn btn-danger btn-sm">Sign In</a>
            </span>
        </div>
    </nav>
</header>
<div class="main">
    <div id="content" class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Gudiva Online Library</h2>
                <div class="hero">
                    <div class="left_sidebar pull-left">
                        <h5 class="paragraph-header">
                            Gudiva online library is a powerful tool for making your educational life easier
                            it provides you with best materials for all subjects under category of ordianry level
                            and advanced level. Also it provides questions with answers so as to guide a student
                            on how to answer questions correctly when they are in exams.
                        </h5>
                        <div class="download-app">
                            <p>Available On PlayStore!!!</p>
                            <span><a href="#"><button class="btn btn-danger btn-sm" type="button"><i class="fa fa-download"></i>&nbsp;DOWNLOAD APP</button></a></span>
                        </div>
                    </div>
                    <img src="assets/images/student1.jpg" class="pull-right display-image" alt=""/>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Register Here</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php
                        echo "<div class='error_msg'>";
                        echo validation_errors();
                        echo "</div>";
                        ?>
                        <form class="form-register" action="<?php echo base_url('new_student')?>" method="POST">
                            <fieldset class="form-group">
                                <section class="row">
                                    <section class="col-lg-6">
                                        <input type="text" class="form-control" name="firstname" placeholder="First name" value="<?= set_value('firstname')?>">
                                    </section>
                                    <section class="col-lg-6">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last name" value="<?= set_value('lastname')?>">
                                    </section>
                                </section>
                                <section>
                                    <select name="gender" class="form-control" value="<?= set_value('gender')?>">
                                        <option value="0" selected="" disabled="">Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </section>
                                <section>
                                    <input type="text" class="form-control" name="school" placeholder="Secondary School" value="<?= set_value('school')?>">
                                </section>
                                <section class="row">
                                    <section class="col-lg-6">
                                        <select name="level" class="form-control" value="<?= set_value('level')?>">
                                            <option value="0" selected="" disabled="">Secondary Level</option>
                                            <option value="1">O' Level</option>
                                            <option value="2">A' Level</option>
                                        </select>
                                        <?php echo form_error('Class Level','<div class="error_msg">','</div>'); ?>
                                    </section>
                                    <section class="col-lg-6">
                                        <select name="class" class="form-control" value="<?= set_value('class')?>">
                                            <option value="0" selected="" disabled="">Form</option>
                                            <option value="1">Form One</option>
                                            <option value="2">Form Two</option>
                                            <option value="3">Form Three</option>
                                            <option value="4">Form Four</option>
                                            <option value="5">Form Five</option>
                                            <option value="6">Form Six</option>
                                        </select>
                                    </section>
                                </section>
                                <section>
                                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username')?>">
                                </section>
                                <section class="row">
                                    <section class="col-lg-6" >
                                        <input type="email" class="form-control" name="email" placeholder="Email address" value="<?= set_value('email')?>">
                                    </section>
                                    <section class="col-lg-6" >
                                        <input type="tel" class="form-control" name="phone" placeholder="Phone number" value="<?= set_value('phone')?>">
                                    </section>
                                </section>
                                <section class="row">
                                    <section class="col-lg-6">
                                        <input type="password" class="form-control" name="password" placeholder="Password" id="password" value="<?= set_value('password')?>">
                                    </section>
                                    <section class="col-lg-6">
                                        <input type="password" class="form-control" name="passwordConfirm" placeholder="Confirm password">
                                    </section>
                                </section>
                                <section class="pull-right">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Register">
                                </section>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3  paddingtop-bottom ">
                <h4>O Level</h4>
                <ul>
                    <li><i class="fa fa-check-square"></i>&nbsp;<a href="#Books">Books</a></li>
                    <li><i class="fa fa-check-square"></i>&nbsp;<a href="Topics" >Topics</a></li>
                    <li><i class="fa fa-check-square"></i>&nbsp;<a href="Past Papers">Past Papers</a></li>
                </ul>
            </div>
            <div class="col-lg-3 paddingtop-bottom">
                <h4>A' Level</h4>
                <ul>
                    <li><i class="fa fa-check-square"></i>&nbsp;<a href="#Books">Books</a></li>
                    <li><i class="fa fa-check-square"></i>&nbsp;<a href="Topics" >Topics</a></li>
                    <li><i class="fa fa-check-square"></i>&nbsp;<a href="Past Papers">Past Papers</a></li>
                </ul>
            </div>
            <div class="col-lg-3  paddingtop-bottom">
                <h4>Miscellenious</h4>
                <ul>
                    <li><i class="fa fa-check-square"></i>&nbsp;<a href="#Books">Books</a></li>
                    <li><i class="fa fa-check-square"></i>&nbsp;<a href="Topics" >Topics</a></li>
                    <li><i class="fa fa-check-square"></i>&nbsp;<a href="Past Papers">Past Papers</a></li>
                </ul>
            </div>
            <div class="col-lg-3 paddingtop-bottom">
                <div class="social-btn">
                    <h5>Share On ...</h5>
                    <p>
                        <a><i class="fa fa-facebook-square fa-lg"></i></a>&nbsp;
                        <a><i class="fa fa-twitter-square fa-lg"></i></a>&nbsp;
                        <a><i class="fa fa-linkedin-square fa-lg"></i></a>&nbsp;
                        <a><i class="fa fa-envelope-square fa-lg"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="col-md-6">
            <p>Gudiva © 2017 - All Rights Reserved</p>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>



<div><img class="logo" src="assets/images/logo.png" style="height:5vh; width: 120%"></div>
