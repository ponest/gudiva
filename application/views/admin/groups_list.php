<h1 class="page-header">
    User Groups <small>list</small>
</h1>
<table class="table table-responsive table-bordered table-stripped table-hover" id="my_table">
    <thead>
    <tr>
        <th>Id</th>
        <th>UserId</th>
        <th>GroupId</th>
        <th style="width: 100px">options</th>
    </tr>
    </thead>
      <tfoot>
    <tr>
        <th>Id</th>
        <th>UserId</th>
        <th>GroupId</th>
        <th>Options</th>
    </tr>
    </tfoot>
    <tbody>
    <?php foreach ($groups as $group): ?>
        <tr>
            <td><?=$group->id?></td>
            <td><?=$group->name?></td>
            <td><?=$group->description?></td>
            <td>
                <a href="<?= base_url('admin/user-groups/edit/'.$group->id) ?>" class="btn btn-info">edit</a>
                <a href="<?= base_url('admin/user-groups/delete/'.$group->id) ?>" class="btn btn-danger">delete</a>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<script src="<?=base_url()?>assets/js/jquery.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/admin/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/js/admin/dataTables.bootstrap.min.js"></script>
<script>
    $("#my_table").dataTable();
</script>