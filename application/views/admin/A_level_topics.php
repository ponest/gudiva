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
            <span>A level Topics</span>&nbsp;<a href="javascript:topic('a_level')"><button type="button" class="btn btn-default" style="background-color: rgba(202, 25, 85, 0.82);font-family: Cambria,sans-serif;color: white;font-weight:900">Add New</button></a>
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
            <?php if(count($topic) > 0){?>
                <table class="table table-striped table-responsive table-hover">
                    <tr>
                        <th>Subject</th>
                        <th>Level</th>
                        <th>Topic</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th>Options</th>
                    </tr>
                    <?php foreach ($topic as $row):?>
                    <tr>
                        <td><?= ucwords($row->subject)?></td>
                        <td><?= ucwords($row->class)?></td>
                        <td><?= ucwords($row->name)?></td>
                        <td><?= ucwords($row->instructor)?></td>
                        <td><?= ucwords($row->date_created)?></td>
                        <td>
                            <a href="<?= base_url('publish_topic')?>"><button class='btn btn-primary btn-sm'>Publish</button></a>
                            <a href="<?= base_url('edit_topic')?>"><button class='btn btn-success btn-sm'>Edit</button></a>
                            <a href="<?php echo base_url('delete_topic/'.$row->id)?>"><button class='btn btn-danger btn-sm'>Delete</button></a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </table>
            <?php }else{?>
                <div class="alert alert-danger">Currently, there are no records for topics. Please add new topic</div>
            <?php }?>

    </div>
</div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/content.js"></script>




