<style>
    body{
        background-color: lightgray;
    }
</style>
<div id="content">
    <div class="row">
        <div class="col-sm-12">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" name="search" class="form-control" placeholder="Search Topic">
                    <button type="submit" class="btn btn-default search-btn" >Search</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row" style="margin-top: 4vh; margin-left: 20px; margin-right: 20px">
        <?php if($topics):?>
            <?php foreach ($topics as $topic):?>
                <div class="col-md-3">
                    <div class="well">
                        <div class="row upper-part">
                            <?php if($topic->image):?>
                                <img src="<?= base_url()?>assets/uploads/images/topics/<?= $topic->image;?>">
                            <?php else:?>
                                <img src="<?= base_url()?>assets/uploads/images/topics/<?= $topic->image;?>">
                            <?php endif;?>
                        </div>
                        <div class="row lower-part">
                            <h4><?= $topic->name; ?></h4>
                            <p><p><?= word_limiter($topic->description, 43);?></p>
                            <a href="start-topic"><button class="btn btn-default pull-left start_btn">View More</button> </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else:?>
            <h4>There are no topics added yet</h4>
        <?php endif;?>
    </div>
</div>