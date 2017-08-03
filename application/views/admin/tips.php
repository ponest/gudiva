<style>
    td > .btn{
        width: 65px;
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
        <h1 class="page-header">Education <small>Tips</small></h1>
        <button class="btn btn-info" data-target="#add_tip" data-toggle="modal"><i class="fa  fa-lg fa-plus-circle"></i>&nbsp;New Tip</button>
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
            <th></th>
            <th>Title</th>
            <th>Created On</th>
            <th>Updated On</th>
            <th  style="width: 185px">Option</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th></th>
            <th>Title</th>
            <th>Created On</th>
            <th>Updated On</th>
            <th  style="width: 185px">Option</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($tips as $tip):?>
        <tr>
            <td><?= $tip->id?></td>
            <td><?= $tip->title?></td>
            <td><?= $tip->date_created?></td>
            <td><?= $tip->date_updated?></td>
            <td>
                <a href="<?= base_url('admin/tip/view/').$tip->id?>" ><button class="btn btn-xs btn-primary"><i class="fa fa-eye" ></i>&nbsp;View</button></a>&nbsp;
                <a href="<?= base_url('admin/tip/edit/').$tip->id ?>"><button class="btn btn-xs btn-success"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit</button></a>&nbsp;
                <a href="<?= base_url('admin/tip/delete/').$tip->id ?>"><button class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i>&nbsp;Delete</button></a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
<div class="container">
    <div class="modal fade" id="add_tip">

        <div class="modal-dialog">
            <div class="modal-content">
                <!-- header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title" style="font-family: Cambria">Add Tip</h2>
                </div>
                <!-- body -->
                <div class="modal-body">
                    <form role="form" action="<?= base_url('admin/tip/create')?>" method="post">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label>Title</label>
                                <div class="form-group">
                                    <input type="text" name="title" id="title" class="form-control input-md" placeholder="Tip Title">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label>Author</label>
                                <div class="form-group">
                                    <input type="text" name="author" id="author" class="form-control input-md" placeholder="Author">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 2px; margin-left: 2px;">
                            <label>Tip</label>
                            <div class="form-group">
                                <textarea class="form-control" name="tip" id="tip" rows="3" placeholder="Tip Description"></textarea>
                            </div>
                            <script>
                                CKEDITOR.replace( 'tip' );
                            </script>
                        </div>
                        <!-- footer-->
                        <div class="modal-footer">
                            <button class="btn btn-info" type="submit" href="#">Submit</button>
                            <button class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>