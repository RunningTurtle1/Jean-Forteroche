<?php
require('../model/comments.php');
addComment();
$publicationId = $_GET['publicationId'];
header('location:../controller/pub.php?publicationId=' . $publicationId);
?>