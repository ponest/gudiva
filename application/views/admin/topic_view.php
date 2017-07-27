<style>
    td {
        width: 200px;
    }
</style>
<?php foreach($topic as $topic):?>
    <div class="container">
        <div class="row pg-header" >
            <div class="col-lg-12">
                <h3 class="page-header">
                    Topic Details <small style="color: #a61717"><i><b><?= $topic->name; ?></b></i></small>
                </h3>
                <!--                <button class="btn btn-info" data-target="#add_topic" data-toggle="modal"><i class="fa  fa-lg fa-plus-circle"></i>&nbsp;New Topic</button>-->
                <hr>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-8">
            <table class="table-striped table-responsive table-bordered table-hover">
                <tbody>
                    <tr>
                        <td><b>Topic Title</b></td>
                        <td><?= $topic->name; ?></td>
                    </tr>
                    <tr>
                        <td><b>Subject</b></td>
                        <td><?= $topic->subject; ?></td>
                    </tr>
                    <tr>
                        <td><b>Level</b></td>
                        <td><?= $topic->level; ?></td>
                    </tr>
                    <tr>
                        <td><b>Topic Title</b></td>
                        <td><?= $topic->name; ?></td>
                    </tr>
                    <tr>
                        <td><b>Topic Title</b></td>
                        <td><?= $topic->name; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">

        </div>

    </div>

<?php endforeach;?>
