<?php
function checkUserLoggin () 
{
    if (!$_SESSION['connected'])
    {
        header('location:index.php?action=authentification');
        //si l'utilisateur n'est pas connecté il est renvoyé à la page d'authentification
    }
}

function showPost()
{
    require_once('model/pubs.php');
    $publication = new PublicationManager();
    $comments = $publication->getComments($_GET['publicationId']);
    $post = $publication->getPost($_GET['publicationId']);

    require('view/viewPost.php');
}

function showPosts ()
{
    require_once('model/pubs.php');
    $publicationManager = new PublicationManager();
    $req = $publicationManager->getPosts();
    
    require('view/mainPage.php');
}

function showPostTitle ()
{
    checkUserLoggin();

    require_once('model/pubs.php');
    $publication = new PublicationManager();
    $req = $publication->getPosts();

    require('view/adm.php');
}

function createPost ()
{
    checkUserLoggin();
    require('model/pubs.php');
    $publication = new PublicationManager();
    $publication->addPub();
    
}

function deletePost ()
{
    checkUserLoggin();

    $publication->deletePost($_GET['publicationId']);
    require('model/comments.php');
    $comments = new CommentManager();
    $comments->deleteComment($_GET['publicationId']);
}

function editPost ()
{
    checkUserLoggin();

    require('model/pubs.php');
    $publication = new PublicationManager();
    $publication->editPost($_GET['publicationId']);
}
?>