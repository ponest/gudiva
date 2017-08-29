<div class="page-wrapper">
    <div class="row first">
        <div class="col-lg-12">
            <h3 class="page-header">
                O'Level Past Papers
            </h3>
        </div>
    </div>
    <div class="row second">
        <div class="row" style="margin-right: 10px; margin-left: 10px">
            <?php if($pastpapers):?>
                <table class="table table-striped table-responsive">
                    <thead>
                    <tr>
                        <td></td>
                        <th>Year</th>
                        <th>Subject</th>
                        <th>Level</th>
                        <th>Papers</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($pastpapers as $pastpaper):?>
                        <tr>
                            <td><?= $pastpaper->id?></td>
                            <td><?= $pastpaper->year?></td>
                            <td><?= $pastpaper->subject?></td>
                            <?php if($pastpaper->level == "0"):?>
                                <td>O' Level</td>
                            <?php endif;?>
                            <?php if($pastpaper->level == "1"):?>
                                <td>A' Level</td>
                            <?php endif;?>
                            <td>
                                <a href="<?= base_url()?>assets/uploads/pastpapers/questions/<?=$pastpaper->questions?>" >Questions</a>
                                <a href="<?= base_url()?>assets/uploads/pastpapers/answers/<?=$pastpaper->questions?>" >Solutions</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            <?php else:?>
                <h4>There are no past papers currently added</h4>
            <?php endif;?>
        </div>
    </div>
</div>