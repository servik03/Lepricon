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
    </tr>
    <?php endforeach; ?>
</table>
