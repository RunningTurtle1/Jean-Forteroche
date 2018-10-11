<?php
require('model/pubs.php');
$publication = new PublicationManager();
$publication->editPost($_GET['publicationId']);
?>