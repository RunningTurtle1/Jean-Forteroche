<?php
    require('model/pubs.php');
    $publicationManager = new PublicationManager();
    $comments = $publicationManager->getComments($_GET['publicationId']);
    $post = $publicationManager->getPost($_GET['publicationId']);
?>