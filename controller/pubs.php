<?php
//j'appelle d'abord la fonction qui va récupérer les derniers billets pour les afficher les afficher
    require('../model/pubs.php');
    $req = getPosts();
    require('../view/mainPage.php');
    ?>



