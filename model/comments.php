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

    public function reportComment ($commentId, $reporterId)
    {
        $db = $this->dbconnect();
        $req = $db->prepare('INSERT INTO comments_report(commentId, reporterId) VALUES (?, ?)');
        $req->execute(array($commentId, $reporterId));
    }

    public function getComment ($commentId)
    {
        $db = $this->dbconnect();
        $req = $db->prepare('SELECT textContent, username 
        FROM comments  
        WHERE commentId = ?');
        $req->execute(array($commentId));
        return $req->fetch();
    }

    public function orderReports ()
    {
        $db = $this->dbconnect();
        $req = $db->query('SELECT COUNT(DISTINCT reporterId) AS reports, commentId FROM comments_report GROUP BY commentId');
        return $req;
    }
}
?>