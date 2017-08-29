
<?php foreach($pastpaper as $pastpaper):?>
    <div class="container">
        <div class="row pg-header" >
            <div class="col-lg-12">
                <h3 class="page-header">
                    Edit Pastpaper <small style="color: #a61717"><i><b><?= $pastpaper->id; ?></b></i></small>
                </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <form role="form" action="<?= base_url('admin/pastpaper/create')?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label>Year</label>
                        <div class="form-group">
                            <?php $years = array_combine(range(date("Y"), 1910), range(date("Y"), 1910));?>
                            <select class="selectpicker show-tick form-control input-md" name="year" id="subject" required>
                                <option value="<?= $pastpaper->year?>"  selected><?= $pastpaper->year?></option>
                                <?php foreach ($years as $year):?>
                                    <option value="<?= $year ?>"><?= $year ?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <select class="selectpicker show-tick form-control input-md" name="subject" id="subject">
                                <option value="<?= $pastpaper->subject?>" selected><?= $pastpaper->subject?></option>
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
                                <option value="<?= $pastpaper->level?>" selected><?= $pastpaper->level?></option>
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
                            <input type="file" name="pastpapers" id="pastpapers" value="<?= $pastpaper->questions?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="InputFile">Answers</label>
                        </div>
                        <div class="form-group">
                            <input type="file" name="answers" id="pastpapers" value="<?= $pastpaper->answers?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit">Update</button>
                </div>
            </form>
        </div>
        <div class="col-lg-4">
            <div class="col col-md-8">
                <label>Options</label>
                <div>
                    <a href="<?= base_url('admin/pastpapers/')?>"><button class="btn btn-md btn-block btn-default">
                            <i class="fa fa-arrow-left" ></i>&nbsp;Back to Topics
                        </button>&nbsp;
                    </a>
                    <a href="<?= base_url('admin/pastpaper/view/').$pastpaper->id ?>"><button class="btn btn-md btn-block btn-success">
                            <i class="fa fa-pencil-square-o"></i>&nbsp;View pastpaper
                        </button>&nbsp
                    </a>
                    <a href="<?= base_url('admin/pastpaper/delete/').$pastpaper->id ?>"><button class="btn btn-md btn-block btn-danger">
                            <i class="fa fa-trash-o"></i>&nbsp;Delete pastpaper
                        </button>&nbsp;
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>
