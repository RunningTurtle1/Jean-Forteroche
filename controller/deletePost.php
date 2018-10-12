<?php
$publication->deletePost($_GET['publicationId']);
require('model/comments.php');
$comments = new CommentManager();
$comments->deleteComment($_GET['publicationId']);
?>