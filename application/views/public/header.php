<?php
/**
 * Created by PhpStorm.
 * User: KILENGA
 * Date: 3/29/2017
 * Time: 2:40 PM
 */
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>GUDIVA-Online Library</title>
        <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/css/index.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/css/login.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/css/register.css" rel="stylesheet" type="text/css">
<!--        <link href="assets/css/topics.css" rel="stylesheet" type="text/css">-->

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <style>
            a:hover{
                text-decoration: none;
            }
        </style>
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
                        <div class="navbar-brand"><a href="<?= base_url()?>" style="color: white">Home</a></div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white">Topics <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('olevel') ?>">O Level</a></li>
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
                            <li><a href="#" style="color: white">Chat</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?= base_url('auth/login')?>" style="color: white">Login</a></li>
                            <li><a href="<?= base_url('auth/signup')?>" style="color: white">Register</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>

