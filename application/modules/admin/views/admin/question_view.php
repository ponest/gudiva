<style>

</style>
<?php foreach($questions as $question):?>

    <div class="container">
        <div class="row pg-header" >
            <div class="col-lg-12">
                <h3 class="page-header">
                    <?php foreach($topic as $topic):?>
                        <?php if($question->topic == $topic->id):?>
                            <?= $topic->name?> Question : <?= $question->id ?>
                        <?php endif;?>
                    <?php endforeach;?>
                </h3>
                <div class="row" style="font-style: italic; color: #0f74a8">
                    <small><strong>Date added : </strong><?= $question->date_created?></small>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php if ($question->date_created == $question->date_updated):?>
                        <small><strong>Last updated : </strong><span style="color: #a61717">Not updated</small>
                    <?php else:?>
                        <small><strong>Last updated : </strong><?= $question->date_updated?></small>
                    <?php endif;?>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped table-condensed">
                <tbody>
                    <tr>
                        <td><strong>Question:</strong></td>
                        <td><?= $question->question ?></td>
                    </tr>
                    <tr>
                        <td><strong>Answer: </strong></td>
                        <td><?= $question->answer ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col col-md-2">
            <label>Options</label>
            <div>
                <a href="<?= base_url('admin/questions')?>"><button class="btn btn-md btn-block btn-default">
                        <i class="fa fa-arrow-left" ></i>&nbsp;Back to Questions
                    </button>&nbsp;
                </a>
                <a href="<?= base_url('admin/question/edit/').$question->id ?>"><button class="btn btn-md btn-block btn-success">
                        <i class="fa fa-pencil-square-o"></i>&nbsp;Edit Question
                    </button>&nbsp
                </a>
                <a href="<?= base_url('admin/question/delete/').$question->id ?>"><button class="btn btn-md btn-block btn-danger">
                        <i class="fa fa-trash-o"></i>&nbsp;Delete Question
                    </button>&nbsp;
                </a>
            </div>
        </div>
    </div>
<?php endforeach;?>
