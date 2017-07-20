<style>
    td > .btn{
        width: 65px;
    }

</style>
<!-- Page Heading -->
<div class="row pg-header" >
    <div class="col-lg-12">
        <h1 class="page-header">
            Topics <small>Overview</small>
        </h1>
        <button class="btn btn-info" data-target="#add_topic" data-toggle="modal"><i class="fa  fa-lg fa-plus-circle"></i>&nbsp;New Topic</button>
        <hr>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-right: 10px; margin-left: 10px">

    <table class="table table-striped table-responsive table-bordered table-hover" id="mydata">
       <thead>
       <tr>
           <th>Subject</th>
           <th>Topic</th>
           <th>Level</th>
           <th>Author</th>
           <th>Date</th>
           <th  style="width: 185px">Option</th>
       </tr>
       </thead>
        <tfoot>
        <tr>
            <th>Subject</th>
            <th>Topic</th>
            <th>Level</th>
            <th>Author</th>
            <th>Date</th>
            <th>Option</th>
        </tr>
        </tfoot>
        <tbody>
        <tr>
            <td>Mathematics</td>
            <td>Hyperbolic Functions</td>
            <td>A level</td>
            <td>Mr Zengo</td>
            <td>27/07/2017</td>
            <td><button class="btn btn-sm btn-primary"><i class="fa fa-eye" ></i>&nbsp;View</button>&nbsp;<button class="btn btn-sm btn-success"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit</button>&nbsp;<button class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i>&nbsp;Delete</button> </td>
        </tr>
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
                <form role="form">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class="form-control input-sm" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="class" id="class" class="form-control input-sm" placeholder="Class">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="topic_name" id="topic_name" class="form-control input-sm" placeholder="Topic Name">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="instructor" id="instructor" class="form-control input-sm" placeholder="Instructor">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="file" id="InputFile">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-right: 2px; margin-left: 2px;">
                        <div class="form-group">
                            <textarea class="form-control" id="description" rows="2" placeholder="Descriptions"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <!-- footer-->
            <div class="modal-footer">
                <button class="btn btn-info" type="submit" href="#">Submit</button>
                <button class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>

        </div>
    </div>
</div>
</div>