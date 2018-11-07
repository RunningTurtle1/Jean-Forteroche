<?php
require('model/comments.php');

function checkUserLoggin () 
{
    if (!isset($_SESSION['userConnected']))
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
        $location = 'location:index.php?action=readpost&publicationId=' . $_GET['publicationId'];
        header($location);
    }
}

function deletecomment ()
{
    $commentManager = new CommentManager();
    $commentManager->deleteComment($_GET['commentId']);
    $commentManager->unreportcomment($_GET['commentId']);
    header('location:index.php?action=adm');
}

function unreportcomment()
{
    $commentManager = new CommentManager();
    $commentManager->unreportcomment($_GET['commentId']);
    header('location:index.php?action=adm');
}

function reportComment()
{
    checkUserLoggin();
    if ($_SESSION['userConnected'])
    {
        $commentManager = new CommentManager();
        $commentManager->reportComment($_GET['commentId'], $_SESSION['username']);
        header('location:index.php');
    }
}


?>