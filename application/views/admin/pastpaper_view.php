<style>

</style>
<?php foreach($pastpaper as $pastpaper):?>

    <div class="container">
        <div class="row pg-header" >
            <div class="col-lg-12">
                <h3 class="page-header">
                    Past Paper :
                </h3>
                <div class="row" style="font-style: italic; color: #0f74a8">
                    <small><strong>Date added : </strong><?= $pastpaper->date_created?></small>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php if ($pastpaper->date_created == $pastpaper->date_updated):?>
                        <small><strong>Last updated : </strong><span style="color: #a61717">Not updated</small>
                    <?php else:?>
                        <small><strong>Last updated : </strong><?= $pastpaper->date_updated?></small>
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
                    <td><strong>Year:</strong></td>
                    <td><?= $pastpaper->year ?></td>
                </tr>
                <tr>
                    <td><strong>Subject: </strong></td>
                    <td><?= $pastpaper->subject ?></td>
                </tr>
                <tr>
                    <td><strong>Level: </strong></td>
                    <td><?= $pastpaper->level ?></td>
                </tr>
                <tr>
                    <td><strong>Questions: </strong></td>
                    <td><a href="<?= base_url()?>assets/uploads/pastpapers/questions/<?=$pastpaper->questions?>" ><?=$pastpaper->questions?></a></td>
                </tr>
                <tr>
                    <td><strong>Questions: </strong></td>
                    <td><a href="<?= base_url()?>assets/uploads/pastpapers/answers/<?=$pastpaper->answers?>" ><?=$pastpaper->answers?></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col col-md-2">
            <label>Options</label>
            <div>
                <a href="<?= base_url('admin/pastpapers')?>"><button class="btn btn-md btn-block btn-default">
                        <i class="fa fa-arrow-left" ></i>&nbsp;Back
                    </button>&nbsp;
                </a>
                <a href="<?= base_url('admin/pastpaper/edit/').$pastpaper->id ?>"><button class="btn btn-md btn-block btn-success">
                        <i class="fa fa-pencil-square-o"></i>&nbsp;Edit Past Paper
                    </button>&nbsp
                </a>
                <a href="<?= base_url('admin/pastpaper/delete/').$pastpaper->id ?>"><button class="btn btn-md btn-block btn-danger">
                        <i class="fa fa-trash-o"></i>&nbsp;Delete Past Paper
                    </button>&nbsp;
                </a>
            </div>
        </div>
    </div>
<?php endforeach;?>
