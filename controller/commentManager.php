<?php
require('model/comments.php');

function checkUserLoggin () 
{
    if (!$_SESSION['userConnected'])
    {
        header('location:index.php?action=authentification');
        //si l'utilisateur n'est pas connecté il est renvoyé à la page d'authentification
    }
}

function addComment () 
{
    checkUserLoggin();
    if ($_SESSION['userConnected'])
    {
        $commentManager = new CommentManager();
        $commentManager->addComment($_POST['comment'], $_GET['publicationId'], $_SESSION['username']);
    }
}
?>