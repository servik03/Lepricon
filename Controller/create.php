<?php
    require_once __DIR__.'/../Model/Article.php';
if (isset($_POST['Name']) && ($_POST['Description']) && isset($_POST['Created_at'])) {
    if ($_POST['Name'] && $_POST['Description'] && $_POST['Created_at']) {
        // Model

       $article = new Article();
       $article->create($_POST['Name'], $_POST['Description'], $_POST['Created_at']);

    }
header ("Location: index.php");
}

require_once __DIR__.'/../View/create.php';

?>