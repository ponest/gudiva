
    <?php foreach ($users as $user): ?>
        <tr class="odd gradeX">
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