<?php if (isset($repositories) && is_array($repositories)) : ?>

    <?php foreach ($repositories as $repository) : ?>
        <?php $data = $repository->getAllData(); ?>
        <tr>
            <td><?php echo $data['count']; ?></td>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['language']; ?></td>
            <td><?php echo $data['stargazersCount']; ?></td>
            <td><?php echo date('Y-m-d', strtotime($data['createdAt'])); ?></td>
        </tr>
    <?php endforeach; ?>
<?php else : ?>
    <td><?php echo "No Search Results"; ?></td>
<?php endif; ?>