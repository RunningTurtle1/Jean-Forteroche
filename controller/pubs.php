<?php
//j'appelle d'abord la fonction qui va récupérer les derniers billets pour les afficher les afficher
    require('model/pubs.php');
    $publicationManager = new PublicationManager();
    $req = $publicationManager->getPosts();
?>



