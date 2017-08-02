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
            Questions<small>Overview</small>
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
            <th>QUESTION</th>
            <th>TOPIC</th>
            <th  style="width: 189px">OPTIONS</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>QUESTION</th>
            <th>TOPIC</th>
            <th  style="width: 189px">OPTIONS</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($questions as $question):?>
            <tr>
                <td><?= $question->id ?></td>
                <td><?= $question->question ?></td>
                <?php foreach ($topics as $topic):?>
                    <?php if($question->topic == $topic->id ):?>
                        <td>(<?= $question->topic?>)<?= $topic->name ?></td>
                    <?php endif;?>
                <?php endforeach;?>
                <td>
                    <a href="<?= base_url('admin/question/view/').$question->id ?>"><button class="btn btn-sm btn-primary">
                            <i class="fa fa-eye" ></i>&nbsp;View
                        </button>&nbsp;</a>
                    <a href="<?= base_url('admin/question/edit/').$question->id ?>"><button class="btn btn-sm btn-success">
                            <i class="fa fa-pencil-square-o"></i>&nbsp;Edit
                        </button>&nbsp</a>
                    <a href="<?= base_url('admin/question/delete/').$question->id ?>"><button class="btn btn-sm btn-danger">
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
                    <form role="form" action="<?= base_url('admin/questions/create')?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label>Topic</label>
                                <div class="form-group">
                                    <select class="selectpicker show-tick form-control input-md" name="topic" id="topic" placeholder="Topic" required>
                                        <option value="" disabled selected>Select Topic</option>
                                        <?php foreach ($topics as $topic):?>
                                            <option value="<?= $topic->id?>"><?= $topic->name?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label>Question</label>
                                <div class="form-group">
                                    <input type="text" name="question" id="question" class="form-control input-md" placeholder="Question" required>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 2px; margin-left: 2px;">
                            <label>Answer</label>
                            <div class="form-group">
                                <textarea class="form-control" id="editor" name="answer" rows="2" placeholder="Answer"></textarea>
                            </div>
                            <script>
                                CKEDITOR.replace( 'editor' );
                            </script>
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

