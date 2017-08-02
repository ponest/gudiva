<style>

</style>
<?php foreach($topic as $topic):?>
    <div class="container">
        <div class="row pg-header" >
            <div class="col-lg-12">
                <h3 class="page-header">
                    <?= $topic->subject?>:  <span style="color: #a61717;"><b><?= $topic->name; ?></b></span>
                </h3>
                <hr>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="profile">
                <img src="<?= base_url()?>assets/uploads/images/topics/<?=$topic->image; ?>" width="200" height="200">
            </div>
        </div>
        <div class="col-md-6">
            <table class="table table-striped table-condensed">
                <tbody>
                <tr>
                    <td><strong>Topic ID:</strong></td>
                    <td><?= $topic->id ?></td>
                </tr>
                <tr>
                    <td><strong>Topic Title: </strong></td>
                    <td><?= $topic->name ?></td>
                </tr>
                <tr>
                    <td><strong>Subject:</strong></td>
                    <td><?= $topic->subject ?></td>
                </tr>
                <tr>
                    <td><strong>Class Level:</strong></td>
                    <td><?= $topic->level ?></td>
                </tr>
                <tr>
                    <td><strong>Created on:</strong></td>
                    <td><?= $topic->date_created ?></td>
                </tr>
                <tr>
                    <td><strong>Last updated:</strong></td>
                    <?php if($topic->date_created == $topic->date_updated):?>
                    <td>Not updated</td>
                    <?php else:?>
                    <td><?= $topic->date_updated ?></td>
                    <?php endif;?>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col col-md-2">
            <label>Options</label>
            <div>
                <a href="<?= base_url('admin/topics')?>"><button class="btn btn-md btn-block btn-default">
                        <i class="fa fa-arrow-left" ></i>&nbsp;Back to Topics
                    </button>&nbsp;
                </a>
                <a href="<?= base_url('admin/topic/edit/').$topic->id ?>"><button class="btn btn-md btn-block btn-success">
                        <i class="fa fa-pencil-square-o"></i>&nbsp;Edit Topic
                    </button>&nbsp
                </a>
                <a href="<?= base_url('admin/topic/delete/').$topic->id ?>"><button class="btn btn-md btn-block btn-danger">
                        <i class="fa fa-trash-o"></i>&nbsp;Delete Topic
                    </button>&nbsp;
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <h4>Topic Summary</h4>
                <div class="col col-md-12">
                    <?= $topic->description ?>
                </div>
            </div>
            <div class="row">
                <table class="table table-striped table-condensed">
                    <thead>
                    <tr>
                        <th></th>
                        <th>QUESTIONS</th>
                        <th  style="width: 300px">OPTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($questions as $question):?>
                        <tr>
                            <td><?= $question->id ?></td>
                            <td><?= $question->question ?></td>
                            <td>
                                <a href="<?= base_url('admin/question/view/').$question->id ?>"><button class="btn btn-xs btn-primary">
                                        <i class="fa fa-eye" ></i>&nbsp;View
                                    </button>&nbsp;</a>
                                <a href="<?= base_url('admin/question/edit/').$question->id ?>"><button class="btn btn-xs btn-success">
                                        <i class="fa fa-pencil-square-o"></i>&nbsp;Edit
                                    </button>&nbsp</a>
                                <a href="<?= base_url('admin/question/delete/').$question->id ?>"><button class="btn btn-xs btn-danger">
                                        <i class="fa fa-pencil-square-o"></i>&nbsp;Delete
                                    </button>&nbsp;</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


<?php endforeach;?>
