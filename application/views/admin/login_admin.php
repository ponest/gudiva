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

        </div><!-- /.container-fluid -->
    </nav>
</div>


<div class="container" style="margin-top:100px">
    <div class="row">
        <div class="admin-header" style="text-align: center; margin-top: -40px;"><h1>GUDIVA Admin Panel</h1></div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Admin Login Only</strong>
                </div>
                <div class="panel-body">
                    <?php if($this->session->flashdata('message')):?>
                        <div class="alert alert-sm alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <?= $this->session->flashdata('message')?>
                        </div>
                    <?php endif; ?>
                    <form role="form" action="<?= base_url('auth/login')?>" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img img-rounded img-responsive"
                                         src="<?= base_url() ?>assets/images/User3.png" alt="" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span>
                                            <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        </div>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-md btn-primary btn-block" value="Sign in">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="panel-footer ">
                    Forgot password! <a href="#" onClick=""> Reset Here </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div id="footer">
        <p>Gudiva &nbsp; &copy; <?php  echo date("Y") ?></p>
    </div>
</div>
<script src="<?= base_url() ?>assets/js/jquery.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
