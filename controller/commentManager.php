<?php
require('model/comments.php');

function checkUserLoggin () 
{
    if (!$_SESSION['connected'])
    {
        header('location:index.php?action=authentification');
        //si l'utilisateur n'est pas connecté il est renvoyé à la page d'authentification
    }
}

function addComment () 
{
    $commentManager = new CommentManager();
    $commentManager->addComment($_POST['comment'], $_GET['publicationId']);
}
?>