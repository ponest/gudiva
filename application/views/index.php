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
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/admin/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
        <img src="<?=base_url() ?>assets/images/Screenshot1.png" class="img-responsive img-thumbnail img-rounded">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12  side-text">
        <h3>View "O" Level Topic as well as "A" Level Topics</h3>
        <p>
            Gudiva Online library provide  variety of Ordinary level and Advanced level topics and a student
            will easily be able to Learning using Questions and answers format.
        </p>
    </div>

</div>



<div class="row fourth">

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="row">
            <img class="img-circle img-responsive" src="<?= base_url() ?>assets/images/forum.jpg" >
        </div>
        <div class="row text">
            <h3>Student Forum</h3>
            <p>Students can easily communicate and collaborate with one another</p>
        </div>

    </div>

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="row">
            <img class="img-circle img-responsive" src="<?= base_url() ?>assets/images/tips.jpeg" >
        </div>

        <div class="row text">
            <h3>Educational Tips</h3>
            <p> Students are able to view a number
                of educational tips which will assist them in improving their
                performances</p>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="row">
            <img class="img-circle img-responsive" src="<?= base_url() ?>assets/images/responsive2.jpg" >
        </div>

        <div class="row text">
            <h3>Mobile Friend</h3>
            <p>
                Our fully responsive user interface seamlessly supports any screen. You can view it using your android phone,
                iPad, Laptop, Desktop and other Larger screens.
            </p>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="row">
            <img class="img-circle img-responsive" src="<?= base_url() ?>assets/images/userfriend.jpg" >
        </div>

        <div class="row text">
            <h3>User-Friendly Navigation</h3>
            <p>Gudiva Online Library is designed to deliver learning with ease and minimum clicks!</p>
        </div>
    </div>

</div>

<div class="row fifth">

    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12  side-text">
        <h3>Provide Past Papers</h3>
        <p>
            Gudiva Online library provide A list of past papers for both ordinary level and advanced level and also enable a
            student to view the questions...
        </p>
    </div>

    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <img src="<?=base_url() ?>assets/images/Screenshot2.png" class="img-responsive img-thumbnail img-rounded">
    </div>

</div>

<div class="row footer">

    <div class="row">
        <img class="img-thumbnail img-circle img-responsive" src="<?= base_url() ?>assets/images/logo.png">
    </div>

    <div class="row footer-icons">
        <i class="fa fa-lg fa-facebook-square"></i>
        <i class="fa fa-lg fa-instagram"></i>
        <i class="fa fa-lg fa-twitter-square"></i>
        <i class="fa fa-lg fa-google-plus-square"></i>
        <i class="fa fa-lg fa-linkedin-square"></i>
        <i class="fa fa-lg fa-youtube-square"></i>
    </div>

    <div class="row navigation_links">
        <span>About Us</span>&nbsp;<span>Forum</span>&nbsp;<span>Contact Us</span>
    </div>

    <div class="row navigation_links">
        <span>&copy GOL &nbsp; <?= date('Y') ?></span>&nbsp;|&nbsp;<span>Made In Tanzania</span>&nbsp; Tel : 0655-151924
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
