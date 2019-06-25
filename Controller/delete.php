<?php
require_once __DIR__.'/../Model/Article.php';
if (isset($_GET['id'])) {
    $article = new Article;
    $article->deleteArticle($_GET['id']);
    header('Location: index.php');
}