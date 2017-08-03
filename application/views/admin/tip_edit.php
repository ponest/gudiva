
<?php foreach($tip as $tip):?>
    <div class="container">
        <div class="row pg-header" >
            <div class="col-lg-12">
                <h3 class="page-header">
                    Edit tip <small style="color: #a61717"><i><b><?= $tip->title; ?></b></i></small>
                </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <form role="form" action="<?= base_url('admin/tip/update/').$tip->id?>" method="post">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label>Title</label>
                        <div class="form-group">
                            <input type="text" name="title" id="title" class="form-control input-md" value="<?= $tip->title?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label>Author</label>
                        <div class="form-group">
                            <input type="text" name="author" id="author" class="form-control input-md" value="<?= $tip->author?>" ">
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-right: 2px; margin-left: 2px;">
                    <label>Tip</label>
                    <div class="form-group">
                        <textarea class="form-control" name="tip" id="tip" rows="3"><?= $tip->tip?></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace( 'tip' );
                    </script>
                </div>
                <!-- footer-->
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit" href="#">Update</button>
                </div>
            </form>
        </div>
        <div class="col-lg-4">
            <div class="col col-md-8">
                <label>Options</label>
                <div>
                    <a href="<?= base_url('admin/tips/')?>"><button class="btn btn-md btn-block btn-default">
                            <i class="fa fa-arrow-left" ></i>&nbsp;Back to Topics
                        </button>&nbsp;
                    </a>
                    <a href="<?= base_url('admin/tip/view/').$tip->id ?>"><button class="btn btn-md btn-block btn-success">
                            <i class="fa fa-pencil-square-o"></i>&nbsp;View tip
                        </button>&nbsp
                    </a>
                    <a href="<?= base_url('admin/tip/delete/').$tip->id ?>"><button class="btn btn-md btn-block btn-danger">
                            <i class="fa fa-trash-o"></i>&nbsp;Delete tip
                        </button>&nbsp;
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>
