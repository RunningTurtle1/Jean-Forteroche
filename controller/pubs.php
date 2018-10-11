<?php
//j'appelle d'abord la fonction qui va récupérer les derniers billets pour les afficher les afficher
    require_once('model/pubs.php');
    $publicationManager = new PublicationManager();
    $req = $publicationManager->getPosts();
?>



