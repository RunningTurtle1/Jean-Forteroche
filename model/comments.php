<?php
require_once("model/connexionManager.php");
class CommentManager extends connexionManager
{
    public function showComments ()
    {
        $db = $this->dbconnect();
        $req = $db->prepare('SELECT * FROM comments WHERE publicationId = ?');
        $comments = $req->execute(array($_GET['publicationId']));
        return $comments;
    }
    
    public function addComment ()
    {
        $db = $this->dbconnect();
        $req = $db->prepare('INSERT INTO comments(textContent, commentDate, publicationId) VALUES (?, NOW(), ?)');
        $comment = $req->execute(array($_POST['comment'], $_GET['publicationId']));
        return $comment;
    }
}
?>