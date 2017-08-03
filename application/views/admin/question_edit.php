
<?php foreach($question as $question):?>
    <div class="container">
        <div class="row pg-header" >
            <div class="col-lg-12">
                <h3 class="page-header">
                    Edit Question <small style="color: #a61717"><i><b><?= $question->id; ?></b></i></small>
                </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <form role="form" action="<?= base_url('admin/questions/update/').$question->id?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label>Topic</label>
                        <div class="form-group">
                            <select class="selectpicker show-tick form-control input-md" name="topic" id="topic" placeholder="Topic" required>
                                <?php foreach ($topics as $topic):?>
                                    <?php if ($question->topic == $topic->id):?>
                                        <option value="<?= $question->topic?>" selected><?= $topic->name;?></option>
                                    <?php else:?>
                                        <option value="<?= $topic->id?>"><?= $topic->name?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label>Question</label>
                        <div class="form-group">
                            <input type="text" name="question" id="question" class="form-control input-md" placeholder="Question" value="<?= $question->question?>">
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-right: 2px; margin-left: 2px;">
                    <label>Answer</label>
                    <div class="form-group">
                        <textarea class="form-control" id="editor" name="answer" rows="1" placeholder="Answer"><?= $question->answer?></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace( 'editor' );
                    </script>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit" href="#">Update</button>
                </div>
            </form>
        </div>
        <div class="col-lg-4">
            <div class="col col-md-8">
                <label>Options</label>
                <div>
                    <a href="<?= base_url('admin/questions/')?>"><button class="btn btn-md btn-block btn-default">
                            <i class="fa fa-arrow-left" ></i>&nbsp;Back to Topics
                        </button>&nbsp;
                    </a>
                    <a href="<?= base_url('admin/question/view/').$question->id ?>"><button class="btn btn-md btn-block btn-success">
                            <i class="fa fa-pencil-square-o"></i>&nbsp;View Question
                        </button>&nbsp
                    </a>
                    <a href="<?= base_url('admin/question/delete/').$question->id ?>"><button class="btn btn-md btn-block btn-danger">
                            <i class="fa fa-trash-o"></i>&nbsp;Delete Question
                        </button>&nbsp;
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>
