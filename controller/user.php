<?php
function userSignIn ()
{
    require('model/userManager.php');
    $userManager = new UserManager;
    $user = $userManager->connect($_POST['user']);
    if (($_POST['password']) == $user['password'])
    {
        $_SESSION['connected'] = true;
        header('location:index.php?action=adm');
    }
    else
    {
        header('location:index.php?action=authentification');
    }
}

function userSignOut ()
{
    session_destroy();
}


?>