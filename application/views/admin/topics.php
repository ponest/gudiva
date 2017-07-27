<style>
    td > .btn{
        width: 65px;
    }
    td >.btn > a{
        color: #FFFFFF;
    }
    .alert{
        position: absolute;
        right: 20px;
        margin-left: 200px;
        bottom: 20px;
        padding: 5px 10px 5px 10px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-repeat: no-repeat;
        background-position: 7px center;
        filter: alpha(opacity=70);
        vertical-align: middle;
        box-shadow: 4px 4px 4px #000;
        -webkit-box-shadow: 4px 4px 4px #000;
        -moz-box-shadow: 4px 4px 4px #000;
    }

</style>
<!-- Page Heading -->
<div class="row pg-header" >
    <div class="col-lg-12">
        <h1 class="page-header">
            Topics <small>Overview</small>
        </h1>
        <button class="btn btn-info" data-target="#add_topic" data-toggle="modal"><i class="fa  fa-lg fa-plus-circle"></i>&nbsp;New Topic</button>
        <?php if ($this->session->flashdata('success_msg')):?>
            <span class="alert alert-success">
                <span class="fa fa-lg fa-check"></span> <strong>Success : </strong><?= $this->session->flashdata('success_msg');?>
            </span>
        <?php endif;?>

        <hr>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-right: 10px; margin-left: 10px">

    <table class="table table-striped table-responsive table-bordered table-hover" id="mydata">
       <thead>
       <tr>
           <th>ID</th>
           <th>TOPIC</th>
           <th>SUBJECT</th>
           <th>LEVEL</th>
           <th>DATE CREATED</th>
           <th>LAST UPDATED</th>
           <th  style="width: 189px">OPTIONS</th>
       </tr>
       </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>TOPIC</th>
            <th>SUBJECT</th>
            <th>LEVEL</th>
            <th>DATE CREATED</th>
            <th>LAST UPDATED</th>
            <th  style="width: 189px">OPTIONS</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($topics as $topic):?>
            <tr>
                <td><?= $topic->id ?></td>
                <td><?= $topic->name ?></td>
                <td><?= $topic->subject ?></td>
                <td><?= $topic->level ?></td>
                <td><?= $topic->date_created ?></td>
                <td><?= $topic->date_updated ?></td>
                <td>
                    <a href="<?= base_url('admin/topic/view/').$topic->id ?>"><button class="btn btn-sm btn-primary">
                        <i class="fa fa-eye" ></i>&nbsp;View
                    </button>&nbsp;</a>
                    <a href="<?= base_url('admin/topic/edit/').$topic->id ?>"><button class="btn btn-sm btn-success">
                        <i class="fa fa-pencil-square-o"></i>&nbsp;Edit
                    </button>&nbsp</a>
                    <a href="<?= base_url('admin/topic/delete/').$topic->id ?>"><button class="btn btn-sm btn-danger">
                       <i class="fa fa-pencil-square-o"></i>&nbsp;Delete
                    </button>&nbsp;</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="container">
    <div class="modal fade" id="add_topic">

        <div class="modal-dialog">
            <div class="modal-content">
           <!-- header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title" style="font-family: Cambria">Add Topic</h2>
                </div>
           <!-- body -->
                <div class="modal-body">
                    <form role="form" action="<?= base_url('admin/topics/create')?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control input-md" placeholder="Topic Title" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <select class="selectpicker show-tick form-control input-md" name="subject" id="subject" placeholder="Subject" required>
                                        <option value="" disabled selected>Select subject</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Biology">Biology</option>
                                        <option value="English">English</option>
                                        <option value="Geography">Geography</option>
                                        <option value="History">History</option>
                                        <option value="Civics">Civics</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <select class="selectpicker show-tick form-control input-md" name="level" id="subject" placeholder="Subject" required>
                                        <option value="" disabled selected>Select class level</option>
                                        <option value="O' level">O' level</option>
                                        <option value="A' level">A' level</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Upload Topic Image</label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="file" name="image" id="image" required>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 2px; margin-left: 2px;">
                            <div class="form-group">
                                <textarea class="form-control" id="description" name="description" rows="2" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" type="submit" href="#">Submit</button>
                            <button class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <!-- footer-->
            </div>
        </div>
    </div>
</div>
<div id="model_editor"></div>

