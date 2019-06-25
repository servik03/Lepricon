<?php
// Update
require_once __DIR__.'/../Model/Article.php';
if (isset($_GET['id'])) {
    echo $_GET['id'];
    //Model
    $article = new Article();
    $Result = $article->findArticleById($_GET['id']);
}

require_once __DIR__.'/../Model/Article.php';
if (isset($_POST['Name']) && ($_POST['Description']) && isset($_POST['Created_at'])) {
    if ($_POST['Name'] && $_POST['Description'] && $_POST['Created_at']) {
        $article = new Article();
        $Result = $article->updateArticleAll($_POST['Name'] && $_POST['Description'] && $_POST['Created_at']);


    }
    header ("Location: index.php");

}

require_once __DIR__.'/../View/update.php';

