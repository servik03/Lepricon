<?php
require_once __DIR__.'/../Model/Article.php';
$article = new Article();
$rows = $article->readArticle();

// View
require_once __DIR__.'/../View/index.php';



