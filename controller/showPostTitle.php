<?php
require_once('model/pubs.php');
$publication = new PublicationManager();
$req = $publication->getPosts();
?>