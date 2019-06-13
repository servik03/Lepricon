<?php
// Update
if (isset($_GET['id'])) {
    echo $_GET['id']; //Test

   $ConnectDB = new PDO("pgsql:host=localhost; dbname=postgres", "postgres", 'postgres', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
   $stmt = $ConnectDB->prepare("SELECT * FROM article WHERE id=:USER");
   $stmt->bindValue(':USER', $_GET['id']);
   $stmt->execute();
   $Result = $stmt->fetchAll();

}
