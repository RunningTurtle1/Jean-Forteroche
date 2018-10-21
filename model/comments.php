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
    
    public function addComment ($comment, $publicationId, $username)
    {
        $db = $this->dbconnect();
        $req = $db->prepare('INSERT INTO comments(textContent, commentDate, publicationId, username) VALUES (?, NOW(), ?, ?)');
        $comment = $req->execute(array($comment, $publicationId, $username));
        return $comment;
    }

    public function deleteComment ($publicationId)
    {
        $db = $this->dbconnect();
        $req = $db->prepare('DELETE FROM comments WHERE publicationId = ?');
        $req->execute(array($publicationId));
    }

    public function reportComment ($publicationId)
    {
        $db = $this->dbconnect();
        $req = $db->prepare('INSERT INTO comments_report(commentId, reporter Id) VALUES(?, ?)');
        $comment->execute($commentId, $reporterId);
    }
}
?>