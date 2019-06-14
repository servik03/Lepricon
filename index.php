<?php

$ConnectDB = new PDO("pgsql:host=localhost; dbname=postgres", "postgres", 'postgres', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $ConnectDB->query('SELECT * FROM article');
$stmt->execute();
$rows = $stmt->fetchAll();


?>

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
