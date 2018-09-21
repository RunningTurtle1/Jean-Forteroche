<?php
    require('../model/pubs.php');
    $comments = getComments($_GET['publicationId']);
    $post = getPost($_GET['publicationId']);
    require('../view/viewPost.php');
?>