<?php
require('model/comments.php');
$commentManager = new CommentManager();
$commentManager->addComment();
?>