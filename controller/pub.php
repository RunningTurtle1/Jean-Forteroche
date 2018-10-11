<?php
    require('model/pubs.php');
    $publication = new PublicationManager();
    $comments = $publication->getComments($_GET['publicationId']);
    $post = $publication->getPost($_GET['publicationId']);
?>