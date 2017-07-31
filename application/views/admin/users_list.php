<h1 class="page-header">
    Users list
</h1>
<table class="table table-bordered table-responsive tablet-stripped tab" id="my_table">
            <thead>
            <tr>
                <th>Id</th>
                <th>User name</th>
                <th>First Name</th>
                <th>Email</th>
                <th>Status</th>
                <th style="width: 100px">Options</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>User name</th>
                <th>First Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                    <td><?=$user->id?></td>
                    <td><?=$user->username?></td>
                    <td><?=$user->first_name .' '.$user->last_name?></td>
                    <td><?=$user->email?></td>
                    <td><?=$user->active?></td>
                    <td>
                        <a href="<?= base_url('admin/users/edit/'.$user->id) ?>" class="btn btn-info">edit</a>
                        <a href="<?= base_url('admin/users/delete/'.$user->id) ?>" class="btn btn-danger">delete</a>
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