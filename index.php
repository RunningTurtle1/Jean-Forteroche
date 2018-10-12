<?php
session_start();

if (isset($_GET['action']))
{
    switch ($_GET['action']) 
    {
        case "readpost":
            require('controller/pub.php');
            require('view/viewPost.php');
        break;

        case "addComment":
            if ($_SESSION['connected'] == true)
            {
                require('controller/createComment.php');
                require('controller/pub.php');
                require('view/viewPost.php');
            }
            else
            {
                header('location:index.php?action=authentification');
            }
        break;

        case "adm":
            if ($_SESSION['connected'] == true)
            {
                require('controller/showPostTitle.php');
                require('view/adm.php'); 
            }
            else
            {
                header('location:index.php?action=authentification');
            }
        break;

        case "deletepost":
            if ($_SESSION['connected'] == true)
            {
                require('controller/showPostTitle.php');
                require('view/adm.php');
                require('controller/deletePost.php');
                header('location:index.php?action=adm');
            }
            else
            {
                header('location:index.php?action=authentification');
            }
        break;

        case "createpub":
            if ($_SESSION['connected'] == true)
            {
                require('controller/createPub.php');
                header('location:index.php');
            }
            else
            {
                header('location:index.php?action=authentification');
            }
        break;

        case "editpost":
            if ($_SESSION['connected']= true)
            {
                require('controller/pub.php');
                require('controller/showPostTitle.php');
                require('view/adm.php');
            }
            else
            {
                header('location:index.php?action=authentification');
            }
        break;

        case "editedpost":
            if ($_SESSION['connected'] == true)
            {
                require('controller/editPost.php');
                header('location:index.php?action=adm');
            }    
            else
            {
                header('location:index.php?action=authentification');
            }
        break;

        case "authentification": 
            require('view/authentification.php');
        break;

        case "auth":
            require('controller/user.php');
        break;

        case "signout": 
            require('signout.php');
            header('location:index.php');
        break;

        default:
            require("controller/pubs.php");
            require("view/mainPage.php");
    }
}
else
{
    require("controller/pubs.php");
    require("view/mainPage.php");
}
?>