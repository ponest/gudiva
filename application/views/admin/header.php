<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/admin/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url() ?>assets/css/admin/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?= base_url() ?>assets/css/admin/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="<?= base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/js/toolbarconfigurator/lib/codemirror/neo.css">

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url('admin/dashboard') ?>">Gudiva Online Library</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white"><i class="fa fa-user"></i><?=$this->logged_in_name?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?= base_url('auth/logout')?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="<?= base_url('admin/dashboard')?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="">
                    <a href="<?= base_url('admin/topics')?>"><i class="fa fa-fw fa-book"></i>Topics</a>
                </li>
                <li class="">
                    <a href="<?= base_url('admin/questions')?>"><i class="fa fa-fw fa-book"></i>Questions</a>
                </li>
                <li class="">
                    <a href="<?= base_url('admin/tips')?>"><i class="fa fa-fw fa-briefcase"></i>Tips</a>
                </li>
                 <li class="">
                    <a href="<?= base_url('admin/pastpapers')?>"><i class="fa fa-fw fa-paperclip"></i>Past Papers</a>
                </li>
                <li>
                    <a href="<?= base_url('admin/user-groups') ?>"><i class="fa fa-edit fa-fw"></i> User Groups</a>
                </li>
                <li>
                    <a href="<?= base_url('admin/users') ?>"><i class="fa fa-edit fa-fw"></i> Users</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div id="page-wrapper">

        <div class="container-fluid">
