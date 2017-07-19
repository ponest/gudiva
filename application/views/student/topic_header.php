<?php
/**
 * Created by PhpStorm.
 * User: KILENGA
 * Date: 4/8/2017
 * Time: 11:45 AM
 */?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/metisMenu.min.css" rel="stylesheet">
    <link href="assets/css/gudiva.css" rel="stylesheet">
    <link href="assets/css/morris.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/student.css" type="text/css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0;background-color: rgba(202, 25, 85, 0.82);">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand" style="color: white; font-family: Cambria,sans-serif; font-weight: 900">Gudiva Online Library</span>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="javascript:swap_pages('dashboard')"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-book fa-fw"></i>&nbsp;Topics<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="javascript:swap_pages('o_level')">O Level</a>
                            </li>
                            <li>
                                <a href="javascript:swap_pages('a_level')">A level</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="javascript:swap_pages('my_topics')"><i class="fa fa-book fa-fw"></i>&nbsp;My Topics</a>
                    </li>
                    <li>
                        <a href="javascript:swap_pages('tips')"><i class="fa fa-edit fa-fw"></i>Educational Tips</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Past Papers<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="javascript:swap_pages('olevel_pp')">O level</a>
                            </li>
                            <li>
                                <a href="javascript:swap_pages('alevel_pp')">A level</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Questions<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="javascript:swap_pages('olevel_qn')">O Level</a>
                            </li>
                            <li>
                                <a href="javascript:swap_pages('alevel_qn')">A level</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="javascript:swap_pages('chat')"><i class="fa fa-files-o fa-fw"></i>Chat Room</a>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
</div>
    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/content.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="assets/js/raphael.min.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/gudiva.js"></script>
</body>
</html>

