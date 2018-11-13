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

function getPost()
{
    require_once('model/pubs.php');
    $publication = new PublicationManager();
    $post = $publication->getPost($_GET['publicationId']);
    require('view/adm.php');
}

function showPostTitle ()
{
    checkAdmin();

    require_once('model/pubs.php');
    $publication = new PublicationManager();
    $posts = $publication->getPosts();
    $comments = orderReports();
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
    require('model/pubs.php');
    $publication = new PublicationManager();
    $publication->deletePost($_GET['publicationId']);
    require('model/comments.php');
    $comments = new CommentManager();
    $comments->deleteComments($_GET['publicationId']);
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
    require_once('model/comments.php');
    $commentManager = new CommentManager();
    $req = $commentManager->orderReports();
    $comments = [];
    while ($data = $req->fetch())
    {        
       $commentId = $data['commentId'];
        $comments[] = ['comment'=>$commentManager->getComment($commentId),'count'=>$data['reports']];
    }
    $req->closeCursor();
    return $comments;
}

function showPosts ()
{
    require_once('model/pubs.php');
    $publicationManager = new PublicationManager();
    $posts = $publicationManager->getPosts();
    require('view/mainPage.php');
}
?>