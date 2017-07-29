

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
