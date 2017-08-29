<style>

</style>
<?php foreach($tip as $tip):?>

    <div class="container">
        <div class="row pg-header" >
            <div class="col-lg-12">
                <h3 class="page-header">
                    Tip Details
                </h3>
                <div class="row" style="font-style: italic; color: #0f74a8">
                    <small><strong>Date added : </strong><?= $tip->date_created?></small>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php if ($tip->date_created == $tip->date_updated):?>
                        <small><strong>Last updated : </strong><span style="color: #a61717">Not updated</small>
                    <?php else:?>
                        <small><strong>Last updated : </strong><?= $tip->date_updated?></small>
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
                    <td><strong>Title:</strong></td>
                    <td><?= $tip->title ?></td>
                </tr>
                <tr>
                    <td><strong>Author:</strong></td>
                    <td><?= $tip->author ?></td>
                </tr>
                <tr>
                    <td><strong>Tip info: </strong></td>
                    <td><?= $tip->tip ?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col col-md-2">
            <label>Options</label>
            <div>
                <a href="<?= base_url('admin/tips')?>"><button class="btn btn-md btn-block btn-default">
                        <i class="fa fa-arrow-left" ></i>&nbsp;Back to Tips
                    </button>&nbsp;
                </a>
                <a href="<?= base_url('admin/tip/edit/').$tip->id ?>"><button class="btn btn-md btn-block btn-success">
                        <i class="fa fa-pencil-square-o"></i>&nbsp;Edit Tip
                    </button>&nbsp
                </a>
                <a href="<?= base_url('admin/tip/delete/').$tip->id ?>"><button class="btn btn-md btn-block btn-danger">
                        <i class="fa fa-trash-o"></i>&nbsp;Delete Tip
                    </button>&nbsp;
                </a>
            </div>
        </div>
    </div>
<?php endforeach;?>
