
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
    <style>


    </style>
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
                        <span class="hidden-mobile hidden-xs">Don't have an account?</span>
                        <a href="<?php echo base_url('register')?>" id="register" class="btn btn-danger btn-sm" >Create account</a>
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
                        <img src="assets/images/student1.jpg" class="pull-right display-image" alt="" />
                    </div>
                </div>
                <div class="col-lg-4" id="form">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Please Sign In</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php
                                echo "<div class='error_msg'>";
                                echo validation_errors();
                                echo "</div>";
                            ?>
                            <form class="form-login" action="<?php echo base_url('student')?>" method="POST">
                                <section class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username"value="<?= set_value('username')?>">
                                </section>
                                <section class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password')?>">
                                </section>
                                <a href="">Forgot Password?</a>
                                <section class="form-group">
                                    <input type="checkbox" name="remember" checked="">
                                    <i>Stay signed in</i>
                                </section>
                                <section>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Sign In">
                                </section>
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
<script src="../../assets/js/jquery.js"></script>
<script src="../../assets/js/scripts.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>

