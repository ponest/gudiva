 <div class="container">
        <div class="row pg-header" >
            <div class="col-lg-12">
                <h3 class="page-header">
                    Edit Topic <small style="color: #a61717"><i><b>tip name</b></i></small>
                </h3>
                <hr>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-8">
            <form role="form" id="form" action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Topic Title</label>
                            <input type="text" name="name" id="name" class="form-control input-md" value="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Topic Title</label>
                            <input type="text" name="name" id="name" class="form-control input-md" value="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit">Update</button>
                    <a href=""><button type="submit" class="btn btn-primary">Cancel</button></a>
                </div>
            </form>
        </div>
        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-header">
                    <h3>Topic History</h3>
                </div>
                <div class="panel-body">
                    <div>
                        <label>Created On :</label>
                        <?= date('d/m/Y')?>
                    </div>
                    <div>
                        <label>Last Updated :</label>
                        <?= date('d/m/Y')?>
                    </div>
                </div>
            </div>
        </div>
    </div>