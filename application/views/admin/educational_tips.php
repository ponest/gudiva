<?php
/**
 * Created by PhpStorm.
 * User: KILENGA
 * Date: 3/29/2017
 * Time: 4:22 PM
 */
?>
<head>
    <link rel="stylesheet" href="assets/css/admin.css" type="text/css">
</head>
<div id="page-wrapper">
    <div class="row first">
        <div class="col-sm-6">
            <span>Educational Tips</span>&nbsp;<a href="javascript:tips('add_tips')"><button type="button" class="btn btn-default" style="background-color: rgba(202, 25, 85, 0.82);font-family: Cambria,sans-serif;color: white;font-weight:900">Add New</button></a>
        </div>
        <div class="col-sm-6">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default" style="background-color: rgba(202, 25, 85, 0.82);font-family: Cambria,sans-serif;color: white;font-weight:900">Search</button>
            </form>
        </div>
    </div><hr>
    <div class="tips">

    </div>
    <div class="row second">
        <table class="table table-striped table-responsive table-hover">
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
                <th>Date</th>
            </tr>
            <tr>
                <td>Inspirational</td>
                <td></td>
                <td>Mr Zengo</td>
                <td><?php echo date('d/m/Y');?></td>
            </tr>
        </table>
    </div>
</div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/content.js"></script>