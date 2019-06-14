<?php
// Delete
if (isset($_GET['id'])) {

    $ConnectDB = new PDO("pgsql:host=localhost; dbname=postgres", "postgres", 'postgres', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $stmt = $ConnectDB->prepare("DELETE FROM article WHERE id=:id");
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    header('Location: index.php');
}
