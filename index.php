<?php
if (isset($_GET['action']))
{
    switch ($_GET['action']) 
    {
        case "publication":
            require('controller/pub.php');
            require('view/viewPost.php');
        break;
        case "addComment":
            require('controller/createComment.php');
            require('controller/pub.php');
            require('view/viewPost.php');
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