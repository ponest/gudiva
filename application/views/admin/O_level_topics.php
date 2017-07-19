<?php
/**
 * Created by PhpStorm.
 * User: KILENGA
 * Date: 3/29/2017
 * Time: 3:17 PM
 */
?>
<head>
    <link rel="stylesheet" href="assets/css/admin.css" type="text/css">
    <style>
        td>.btn{
          margin: 1px;
        }
    </style>
</head>
<div id="page-wrapper">
    <div class="row first">
            <div class="col-sm-6">
                <span>O level Topics</span>&nbsp;<a href="javascript:topic('o_level')"><button type="button" class="btn btn-default" style="background-color: rgba(202, 25, 85, 0.82);font-family: Cambria,sans-serif;color: white;font-weight:900">Add New</button></a>
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
    <div class="add_topic">

     </div>
    <div class="row second">
        <table class="table table-striped table-responsive table-hover">
            <tr>
                <th>Subject</th>
                <th>Level</th>
                <th>Topic</th>
                <th>Author</th>
                <th>Date</th>
                <th>Options</th>
            </tr>
            <?php foreach ($topic as $row){
                echo "<tr>";
                    echo "<td>".$row->subject."</td>";
                    echo "<td>".$row->class."</td>";
                    echo "<td>".$row->name."</td>";
                    echo "<td>".$row->instructor."</td>";
                    echo "<td>".$row->date_created."</td>";
                    echo "<td>";
                        echo "<button class='btn btn-primary btn-sm' name='view'>View</button>";
                        echo "<button class='btn btn-success btn-sm' name='edit'>Edit</button>";
                        echo "<button class='btn btn-danger btn-sm' name='delete'>Delete</button>";
                    echo "</td>";
                echo "</tr>";
            }
            ?>
      </table>
    </div>
</div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/content.js"></script>
