<?php
function checkAdmin () 
{
    if (!$_SESSION['admin'])
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
    checkAdmin();

    require_once('model/pubs.php');
    $publication = new PublicationManager();
    $req = $publication->getPosts();

    require('view/adm.php');
}

function createPost ()
{
    checkAdmin();
    require('model/pubs.php');
    $publication = new PublicationManager();
    $publication->addPub();
    
}

function deletePost ()
{
    checkAdmin();

    $publication->deletePost($_GET['publicationId']);
    require('model/comments.php');
    $comments = new CommentManager();
    $comments->deleteComment($_GET['publicationId']);
}

function editPost ()
{
    checkAdmin();

    require('model/pubs.php');
    $publication = new PublicationManager();
    $publication->editPost($_GET['publicationId']);
}

function orderReports ()
{
    require('model/comments.php');
    $comments = new CommentManager();
    $comments->orderReports();
}
?>