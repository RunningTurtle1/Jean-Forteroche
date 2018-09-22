<?php
    require('../model/comments.php');
    $comments = showComments();
    require('../view/viewPost.php');
?>