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
            Past Papers
        </h1>
        <button class="btn btn-info" data-target="#add_pp" data-toggle="modal"><i class="fa  fa-lg fa-plus-circle"></i>&nbsp;New Past Paper</button>
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
            <td></td>
            <th>YEAR</th>
            <th>SUBJECT</th>
            <th>LEVEL</th>
            <th>PAPERS</th>
            <th  style="width: 185px">Option</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td></td>
            <th>YEAR</th>
            <th>SUBJECT</th>
            <th>LEVEL</th>
            <th>PAPERS</th>
            <th  style="width: 185px">Option</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($pastpapers as $pastpaper):?>
            <tr>
                <td><?= $pastpaper->id?></td>
                <td><?= $pastpaper->year?></td>
                <td><?= $pastpaper->subject?></td>
                <td><?= $pastpaper->level?></td>
                <td>
                    <a href="<?= base_url()?>assets/uploads/pastpapers/questions/<?=$pastpaper->questions?>" >Questions</a>
                    |<a href="<?= base_url()?>assets/uploads/pastpapers/answers/<?=$pastpaper->questions?>" >Solutions</a>
                </td>
                <td>
                    <a href="<?= base_url('admin/pastpaper/view/').$pastpaper->id ?>"><button class="btn btn-xs btn-primary">
                            <i class="fa fa-eye" ></i>&nbsp;View
                        </button>&nbsp;
                    </a>
                    <a href="<?= base_url('admin/pastpaper/edit/').$pastpaper->id ?>"><button class="btn btn-xs btn-success">
                            <i class="fa fa-pencil-square-o"></i>&nbsp;Edit
                        </button>&nbsp
                    </a>
                    <a href="<?= base_url('admin/pastpaper/delete/').$pastpaper->id ?>"><button class="btn btn-xs btn-danger">
                            <i class="fa fa-pencil-square-o"></i>&nbsp;Delete
                        </button>&nbsp;
                    </a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
<div class="container">
    <div class="modal fade" id="add_pp">

        <div class="modal-dialog">
            <div class="modal-content">
                <!-- header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title" style="font-family: Cambria">Add Past Paper</h2>
                </div>
                <!-- body -->
                <div class="modal-body">
                    <form role="form" action="<?= base_url('admin/pastpaper/create')?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label>Year</label>
                                <div class="form-group">
                                    <?php $years = array_combine(range(date("Y"), 1910), range(date("Y"), 1910));?>
                                    <select class="selectpicker show-tick form-control input-md" name="year" id="subject" required>
                                        <option value="" disabled selected>Select year</option>
                                        <?php foreach ($years as $year):?>
                                            <option value="<?= $year ?>"><?= $year ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <select class="selectpicker show-tick form-control input-md" name="subject" id="subject">
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
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
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
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="InputFile">Questions</label>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="questions" id="questions">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="InputFile">Answers</label>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="answers" id="questions">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" type="submit">Submit</button>
                            <button class="btn btn-primary" data-dismiss="modal">Close</button>

                        </div>
                    </form>
                </div>
                <!-- footer-->
            </div>
        </div>
    </div>
