<?php
/**
 * Created by PhpStorm.
 * User: kilenga
 * Date: 7/17/17
 * Time: 8:33 AM
 */?>
<!doctype html>
<html lang="En-US">
<head>
    <meta charset="UTF-8">
    <title>Gudiva Online Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/new_index.css" type="text/css">
</head>

<body>
<div id="first-row">
    <nav class="navbar navbar-default" >
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <img class="logo" src="<?= base_url()?>assets/images/logo.png" style="height:5vh; width: 120%">
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white">Topics <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('olevel')?>">O Level</a></li>
                            <li><a href="<?= base_url('alevel')?>">A Level</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white">Past Papers <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('olevel_pp')?>">O Level Past Papers</a></li>
                            <li><a href="<?= base_url('alevel_pp')?>">A Level Past Papers</a></li>
                        </ul>
                    </li>

                    <li><a href="#" style="color: white">Forum</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_url('auth/login')?>" style="color: white">Login</a></li>
                    <li><a href="<?= base_url('auth/signup')?>" style="color: white">Register</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<div id="second-row">
    <img src="<?= base_url()?>assets/images/student1.jpg">
    <div class=" row center_contents">
        <div class="col-lg-12">
            <p style="font-size: 50px; font-weight: 600;font-family: merifont;">Gudiva Online Library</p>
            <p style="font-size: 50px; font-weight: 600;font-family: Verdana; color: whitesmoke">Powerful Tool</p>
            <p style="font-size: 35px; font-weight: 600; font-family: Verdana;">For Supporting Easy Learning</p>
            <hr class="horizontal_line"><br/>
        </div>
    </div>
</div>

<div class="row third">

    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="well">
            <p>naijeeeeeeeeeeeeeeeeeeeeeee</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="well">
            <p>naijeeeeeeeeeeeeeeeeeeeeeee</p>
        </div>
    </div>

</div>

<div class="row fourth">

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="well">
            <div class="row">
                <img class="img-circle img-responsive img-thumbnail" src="assets/images/organic.jpg" >
            </div>
            <div class="row">
                <p>Student Forum</p>
            </div>

        </div>
    </div>

 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="well">
            <div class="row">
                <img class="img-circle img-responsive img-thumbnail" src="assets/images/density.jpg" >
            </div>

            <div class="row">
                <p>Educational Tips</p>
            </div>

        </div>
    </div>

 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="well">
            <div class="row">
                <img class="img-circle img-responsive img-thumbnail" src="assets/images/organic.jpg" >
            </div>

            <div class="row">
                <p>Mobile Friend</p>
            </div>

        </div>
    </div>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="well">
            <div class="row">
                <img class="img-circle img-responsive img-thumbnail" src="assets/images/organic.jpg" >
            </div>

            <div class="row">
                <p>User-Friendly Navigation
                    WiZDOM v5 is designed to deliver learning with ease and minimum clicks!</p>
            </div>

        </div>
    </div>



</div>


<!--<div class="row">-->
<!--    <div class="footer">-->
<!--        <span>Gudiva Online Library &copy --><?//= date('Y');  ?><!--</span>-->
<!--    </div>-->
<!--</div>-->

</body>
<script src="<?= base_url()?>assets/js/jquery.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>

</html>



Available anytime, anywhere

Our truly mobile service allows access from any modern online device - Mac, PC,
tablet or smartphone. You can create an entire course on your tablet, preview any
course file (including MS Office) in a browser, and complete a quiz on your smartphone.


Online Learning. Simplified.
LearnUpon is a powerful Learning Management System that instantly simplifies online learning.


Mobile Friendly, From the Start

Our fully responsive user interface seamlessly supports any screen. If you author your SCORM
content using HTML5, your courses will play on Apple devices just fine!

Enable students to connect with each other

Students can easily communicate and collaborate on projects using wikis, blogs,
chats, forums, and groups, which helps them stay focused and excited.