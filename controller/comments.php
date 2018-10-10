<?php
    require('../model/comments.php');
    $comments = showComments();
    require('../view/viewPost.php');
// pour l'instant page morte elle n'est plus utile
?>