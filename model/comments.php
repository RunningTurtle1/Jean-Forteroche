<?php
class connexionManager
{
    protected function dbconnect ()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');
            return $db;
        } 
        catch(Exception $e) 
        { 
            die('Erreur : '.$e->getMessage()); 
        }
    }
}
class CommentManager extends connexionManager;
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