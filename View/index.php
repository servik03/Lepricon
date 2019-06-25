<table>
    <?php foreach($rows as $row): ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td><a href="update.php?id=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
