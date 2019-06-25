<?php

class Article
{
    public function create($name, $description, $created_at)
    {
        $Connect2DB = new PDO("pgsql:host=localhost; dbname=postgres", "postgres", 'postgres', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        $Create2DB = $Connect2DB->prepare("INSERT INTO Article (name, description, created_at) VALUES (:name, :description, :created_at )");
        $Create2DB->bindParam(':name', $name);
        $Create2DB->bindParam(':description', $description);
        $Create2DB->bindParam(':created_at', $created_at);

        return $Create2DB->execute();

    }


    public function readArticle()
    {
        $ConnectDB = new PDO("pgsql:host=localhost; dbname=postgres", "postgres", 'postgres', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        $stmt = $ConnectDB->query('SELECT * FROM article');
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function findArticleById($id)
    {
            $ConnectDB = new PDO("pgsql:host=localhost; dbname=postgres", "postgres", 'postgres', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            $stmt = $ConnectDB->prepare("SELECT * FROM article WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetchAll();

    }

    public function updateArticleAll($name, $description, $created_at, $id)

        {

        $Connect2DB = new PDO("pgsql:host=localhost; dbname=postgres", "postgres", 'postgres', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        $Create2DB = $Connect2DB->prepare("UPDATE article SET name = :name, description = :description, created_at = :created_at WHERE id = :id");
        $Create2DB->bindParam(':name', $name);
        $Create2DB->bindParam(':id', $id);
        $Create2DB->bindParam(':description', $description);
        $Create2DB->bindParam(':created_at', $created_at);


        return $Create2DB->execute();

        }


    public function deleteArticle($name, $description, $created_at,$id)
    {

            $ConnectDB = new PDO("pgsql:host=localhost; dbname=postgres", "postgres", 'postgres', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            $stmt = $ConnectDB->prepare("DELETE FROM article WHERE id=:id");
            return $stmt->execute();

    }

}


