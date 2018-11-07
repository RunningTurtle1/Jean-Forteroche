<?php
if (!isset($_SESSION))
{
    session_start();
}
if (isset($_GET['action']))
{
    switch ($_GET['action']) 
    {
        case "readpost":
            require('controller/publicationManager.php');
            showPost();
        break;
        case "addComment":
            require('controller/commentManager.php');
            addComment();
        break;
        case "adm":
            require('controller/publicationManager.php');
            showPostTitle();
            orderReports();
        break;
        case "deletepost":
            require('controller/publicationManager');
            deletePost();
            header('location:index.php?action=adm');
        break;
        case "deletecomment":
            require('controller/commentManager.php');
            deletecomment();
        break;
        case "unreportcomment":
            require('controller/commentManager.php');
            unreportcomment();
        break;
        case "createpub":
            require('controller/publicationManager.php');
            createPost();
            header('location:index.php');
        break;
        case "editpost":
            require('controller/publicationManager.php');
            getPost();
            
        break;
        case "editedpost":
            require('controller/publicationManager.php');
            editPost();
            header('location:index.php?action=adm');
            
        break;
        case "authentification": 
            require('view/authentification.php');
        break;
        case "auth":
            require('controller/user.php');
            userSignIn();
        break;
        case "signout": 
            require('controller/user.php');
            userSignOut();
            header('location:index.php');
        break;
        case "newAccount":
            require('view/createAccount.php');
        break;
        case "createaccount":
            require('controller/user.php');
            createAccount($_POST['email'], $_POST['username'], $_POST['password']);
            header('location:index.php');
        break;
        case "report" :
            require('controller/commentManager.php');
            reportComment();
        break;
        default:
            require("controller/publicationManager.php");
            require("view/mainPage.php");
    }
}
else
{
    require("controller/publicationManager.php");
    showPosts();
}
?>