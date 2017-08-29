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
            User Groups<small>Overview</small>
        </h1>
        <button class="btn btn-info" data-target="#add_grp" data-toggle="modal"><i class="fa  fa-lg fa-plus-circle"></i>&nbsp;New Group</button>
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
            <th>USER</th>
            <th>GROUP</th>
            <th style="width: 186px">OPTIONS</th>
        </tr>
        </thead>
          <tfoot>
        <tr>
            <th>ID</th>
            <th>USER</th>
            <th>GROUP</th>
            <th style="width: 186px">OPTIONS</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($groups as $group): ?>
            <tr>
                <td><?=$group->id?></td>
                <td><?=$group->name?></td>
                <td><?=$group->description?></td>
                <td>
                    <a href="<?= base_url('admin/user-groups/edit/'.$group->id) ?>" class="btn btn-xs btn-primary">
                            <i class="fa fa-eye" ></i>&nbsp;View
                        </button>&nbsp;</a>
                    <a href="<?= base_url('admin/user-groups/delete/'.$group->id) ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash-o" ></i> Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
<div class="container">
    <div class="modal fade" id="add_grp">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title" style="font-family: Cambria">Add Topic</h2>
                </div>
                <!-- body -->
                <div class="modal-body">
                    <form role="form" method="POST" action="<?=base_url('admin/user-groups/create')?>">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" placeholder="Enter group name" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" placeholder="Enter group description" id="description" name="description">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                    </form>
                </div>
                <!-- footer-->
            </div>
        </div>
    </div>
</div>