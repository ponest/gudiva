
<?php foreach($topic as $topic):?>
    <div class="container">
        <div class="row pg-header" >
            <div class="col-lg-12">
                <h3 class="page-header">
                    Edit Topic <small style="color: #a61717"><i><b><?= $topic->name; ?></b></i></small>
                </h3>
<!--                <button class="btn btn-info" data-target="#add_topic" data-toggle="modal"><i class="fa  fa-lg fa-plus-circle"></i>&nbsp;New Topic</button>-->
                <hr>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-8">
            <form role="form" id="form" action="<?= base_url('admin/topics/update/').$topic->id ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>Topic Title</label>
                            <input type="text" name="name" id="name" class="form-control input-md" value="<?= $topic->name; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Subject</label>
                            <select class="selectpicker show-tick form-control input-md" name="subject" id="subject" placeholder="Subject">
                                <option value="<?= $topic->subject; ?>" selected><?= $topic->subject; ?></option>
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
                            <label>Subject Level</label>
                            <select class="selectpicker show-tick form-control input-md" name="level" id="subject" placeholder="Subject">
                                <option value="<?= $topic->level; ?>" selected><?= $topic->level; ?></option>
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
                            <input type="file" name="image" id="image" value="<?= $topic->image; ?>">
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-right: 2px; margin-left: 2px;">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5"><?= $topic->description; ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit">Update</button>
                    <a href="<?= base_url('admin/topics/')?>"><button type="submit" class="btn btn-primary">Cancel</button></a>
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
                        <?= $topic->date_created; ?>
                    </div>
                    <div>
                        <label>Last Updated :</label>
                        <?= $topic->date_updated; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php endforeach;?>
